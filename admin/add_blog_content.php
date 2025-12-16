<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once '../function/database.php';

if ($_SESSION["login"] != "success") {
    header("Location: index.php");
    exit();
}

$category = 'blog';

include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $img = $_POST['image'] ?? '';
    $date = $_POST['date'] ?? '';
    $readtime = $_POST['read_time'] ?? '';
    $content = $_POST['content'] ?? '';
    $author = $_POST['author'] ?? '';
    $category = $_POST['category'] ?? '';
    $tags = $_POST['tags'] ?? '';

    if (empty($title) || empty($img) || empty($date) || empty($readtime) || empty($content) || empty($author) || empty($category)) {
        $error = "All fields except tags are required.";
    } else {
        $query = "INSERT INTO tb_blog (title, image, date, read_time, content, author, category, tags, created_at) VALUES (:title, :image, :date, :read_time, :content, :author, :category, :tags, CURRENT_TIMESTAMP)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':image', $img);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':read_time', $readtime);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':tags', $tags);
        
        try {
            if ($stmt->execute()) {
                $_SESSION['success_message'] = "New record has been added successfully.";
                echo "<script>window.location.href = 'cms_blog.php?category=blog';</script>";
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
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="img">Image:</label>
                <input type="text" class="form-control" id="img" name="image" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="datetime-local" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="readtime">Read Time:</label>
                <input type="number" class="form-control" id="readtime" name="read_time" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>
            <div class="form-group">
                <label for="tags">Tags:</label>
                <input type="text" class="form-control" id="tags" name="tags">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add <?php echo ucfirst($category); ?></button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

