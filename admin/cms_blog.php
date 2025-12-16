<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

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
$query = "SELECT * FROM tb_blog";
$stmt = $conn->prepare($query);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5" style="min-height: calc(100vh - 200px);">
    <div class="bg-white p-4 rounded shadow">
        <h2><?php echo ucfirst($category); ?> Records</h2>
        
        <!-- Button to add a new record -->
        <a href="add_blog_content.php" class="btn btn-success mb-3">Add New <?php echo ucfirst($category); ?></a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Read Time</th>
                    <th>Content</th>
                    <th>Author</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($record['id']); ?></td>
                        <td><?php echo htmlspecialchars($record['title']); ?></td>
                        <td><?php echo htmlspecialchars($record['date']); ?></td>
                        <td><?php echo htmlspecialchars($record['read_time']); ?> minutes</td>
                        <td><?php echo htmlspecialchars(substr($record['content'], 0, 200)) . (strlen($record['content']) > 200 ? '...' : ''); ?></td>
                        <td><?php echo htmlspecialchars($record['author']); ?></td>
                        <td><?php echo htmlspecialchars($record['image']); ?></td>
                        <td><?php echo htmlspecialchars($record['category']); ?></td>
                        <td><?php echo htmlspecialchars($record['tags']); ?></td>
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
// Handle the deletion of a record
// Handle the deletion of a record
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM tb_$category WHERE id = :id";
    $delete_stmt = $conn->prepare($delete_query);
    $delete_stmt->bindParam(':id', $delete_id);
    try {
        $delete_stmt->execute();
        echo "<script>window.location.href = 'cms_blog.php?category=$category';</script>";
    } catch (PDOException $e) {
        echo "Error deleting record: " . $e->getMessage();
    }
}
?>

<?php include 'footer.php'; ?>

