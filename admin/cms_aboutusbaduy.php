<?php
session_start();
require_once '../function/database.php';

if ($_SESSION["login"] != "success") {
    header("Location: index.php");
    exit();
}

$category = isset($_GET['category']) ? $_GET['category'] : '';

if (!$category) {
    die("Category not specified");
}

include 'header.php';

// Fetch existing records from the database
$query = "SELECT * FROM tb_$category";
$stmt = $conn->prepare($query);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5" style="min-height: calc(100vh - 200px);">
    <div class="bg-white p-4 rounded shadow">
        <h2><?php echo ucfirst($category); ?> Records</h2>
        
        <!-- Button to add a new record -->
        <a href="add_aboutusbaduy.php?category=<?php echo $category; ?>" class="btn btn-success mb-3">Add New <?php echo ucfirst($category); ?></a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Heading</th>
                    <th>Content</th>
                    <th>Notes</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($record['id']); ?></td>
                        <td><?php echo htmlspecialchars($record['heading']); ?></td>
                        <td><?php echo htmlspecialchars($record['content']); ?></td>
                        <td><?php echo htmlspecialchars($record['notes']); ?></td>
                        <td><?php echo htmlspecialchars($record['img']); ?></td>
                        <td>
                            <!-- Add edit and delete actions if needed -->
                            <a href="content_details.php?category=<?php echo $category; ?>&id=<?php echo $record['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?category=<?php echo $category; ?>&delete_id=<?php echo $record['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM tb_$category WHERE id = :id";
    $delete_stmt = $conn->prepare($delete_query);
    $delete_stmt->bindParam(':id', $delete_id);
    try {
        $delete_stmt->execute();
        echo "<script>window.location.href = 'cms_aboutusbaduy.php?category=$category';</script>";
    } catch (PDOException $e) {
        echo "Error deleting record: " . $e->getMessage();
    }
}
?>

<?php include 'footer.php'; ?>

