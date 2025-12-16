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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $heading = $_POST['heading'] ?? '';
    $content = $_POST['content'] ?? '';
    $notes = $_POST['notes'] ?? '';
    $img = $_POST['img'] ?? '';

    if (empty($heading) || empty($content)) {
        $error = "Heading and Content are required fields.";
    } else {
        $query = "INSERT INTO tb_$category (heading, content, notes, img) VALUES (:heading, :content, :notes, :img)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':heading', $heading);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':notes', $notes);
        $stmt->bindParam(':img', $img);
        
        try {
            if ($stmt->execute()) {
                $_SESSION['success_message'] = "New record has been added successfully.";
                echo "<script>window.location.href = 'cms_aboutusbaduy.php?category=$category';</script>";
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
                <label for="heading">Heading:</label>
                <input type="text" class="form-control" id="heading" name="heading" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="notes">Notes:</label>
                <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="img">Image URL:</label>
                <input type="text" class="form-control" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Add <?php echo ucfirst($category); ?></button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>