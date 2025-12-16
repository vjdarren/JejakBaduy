<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once '../function/database.php';

if ($_SESSION["login"] != "success") {
    header("Location: index.php");
    exit();
}

$category = isset($_GET['category']) ? $_GET['category'] : 'testimonials';

include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $details = $_POST['details'] ?? '';
    $img = $_POST['img'] ?? '';

    if (empty($name) || empty($img)) {
        $error = "Name and Image are required fields.";
    } else {
        $query = "INSERT INTO tb_$category (name, details, img) VALUES (:name, :details, :img)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':details', $details);
        $stmt->bindParam(':img', $img);
        
        try {
            if ($stmt->execute()) {
                $_SESSION['success_message'] = "New record has been added successfully.";
                echo "<script>window.location.href = 'cms_testi.php?category=$category';</script>";
                exit();
            } else {
                $error = "Failed to add new record.";
            }
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>

<div class="container mt-5" style="min-height: calc(100vh - 200px);">
    <div class="bg-white p-4 rounded shadow">
        <h2>Add New <?php echo ucfirst($category); ?></h2>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="details">Details:</label>
                <input type="text" class="form-control" id="details" name="details" required>
            </div>
            <div class="form-group">
                <label for="img">Image Name</label>
                <input type="text" class="form-control" id="img" name="img" required>
            </div>
            <button type="submit" class="btn btn-primary">Add <?php echo ucfirst($category); ?></button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

