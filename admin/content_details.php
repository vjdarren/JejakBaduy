<?php
session_start();
require_once '../function/database.php';

if ($_SESSION["login"] != "success") {
    header("Location: index.php");
    exit();
}

include 'header.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$category = isset($_GET['category']) ? $_GET['category'] : null;

if (!$id || !$category) {
    echo "Invalid request.";
    exit();
}

$categoryTableMap = [
    'aboutus' => 'tb_aboutus',
    'aboutbaduy' => 'tb_aboutbaduy',
    'testimonials' => 'tb_testimonials',
    'gallery' => 'tb_gallery',
    'blog' => 'tb_blog',
];

$table = $categoryTableMap[$category] ?? 'tb_aboutus';

// Fetch the content
$query = "SELECT * FROM $table WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->execute(['id' => $id]);
$content = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$content) {
    echo "Content not found.";
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        // Delete the content
        $deleteQuery = "DELETE FROM $table WHERE id = :id";
        $deleteStmt = $conn->prepare($deleteQuery);
        try {
            if ($deleteStmt->execute(['id' => $id])) {
                $_SESSION['success_message'] = "Content has been deleted successfully.";
                if ($category === 'aboutus' || $category === 'aboutbaduy') {
                    echo "<script>window.location.href = 'cms_aboutusbaduy.php?category=$category';</script>";
                } elseif ($category === 'testimonials') {
                    echo "<script>window.location.href = 'cms_testi.php?category=$category';</script>";
                } else {
                    echo "<script>window.location.href = 'cms_$category.php?category=$category';</script>";
                }
                exit();
            } else {
                $error = "Failed to delete content.";
            }
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    } else {
        // Update the content
        $updateQuery = "UPDATE $table SET ";
        $params = [];
        foreach ($content as $key => $value) {
            if ($key != 'id') {
                $updateQuery .= "$key = :$key, ";
                $params[$key] = $_POST[$key] ?? $value;
            }
        }
        $updateQuery = rtrim($updateQuery, ", ");
        $updateQuery .= " WHERE id = :id";
        $params['id'] = $id;

        $updateStmt = $conn->prepare($updateQuery);
        try {
            if ($updateStmt->execute($params)) {
                $_SESSION['success_message'] = "Content has been updated successfully.";
                if ($category === 'aboutus' || $category === 'aboutbaduy') {
                    echo "<script>window.location.href = 'cms_aboutusbaduy.php?category=$category';</script>";
                } elseif ($category === 'testimonials') {
                    echo "<script>window.location.href = 'cms_testi.php?category=$category';</script>";
                } else {
                    echo "<script>window.location.href = 'cms_$category.php?category=$category';</script>";
                }
                exit();
            } else {
                $error = "Failed to update content.";
            }
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
    }
}
?>

<div class="container-fluid" id="container-wrapper" style="min-height: 100vh; display: flex; flex-direction: column;">
    <div class="row mb-3 flex-grow-1">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h1 class="m-0 font-weight-bold text-primary"><?php echo ucfirst($category); ?> Content Details</h1>
                </div>
                <div class="card-body">
                    <form method="post">
                        <?php foreach ($content as $key => $value): ?>
                            <?php if ($key != 'id'): ?>
                                <div class="form-group">
                                    <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
                                    <?php if (strlen($value) > 100): ?>
                                        <textarea class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>" rows="5"><?php echo htmlspecialchars($value); ?></textarea>
                                    <?php else: ?>
                                        <input type="text" class="form-control" id="<?php echo $key; ?>" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($value); ?>">
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this content?');">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer style="margin-top: auto;">
        <?php include 'footer.php'; ?>
    </footer>
</div>

