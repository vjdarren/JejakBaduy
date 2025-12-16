<?php

require_once 'function/database.php';

// Get the blog ID from the URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

try {
    // Check if database connection exists
    if (!isset($conn)) {
        throw new Exception("Database connection not established");
    }

    // Query to fetch blog content based on the ID
    $query = "SELECT * FROM tb_blog WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $blog_id, PDO::PARAM_INT);
    $stmt->execute();
    
    // Check if blog post exists
    $blog = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$blog) {
        throw new Exception("Blog post not found");
    }
    ?>

<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1 class="blog-single-title"><?php echo htmlspecialchars($blog['title']); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="blog-single-post">
                    <div class="blog-single-header">
                        <div class="blog-single-meta">
                            <span class="meta-item">
                                <i class="icon-calendar"></i>
                                <?php echo date('F j, Y', strtotime($blog['date'])); ?>
                            </span>
                            <span class="meta-item">
                                <i class="icon-user2"></i>
                                By <?php echo htmlspecialchars($blog['author']); ?>
                            </span>
                            <span class="meta-item">
                                <i class="icon-folder"></i>
                                <?php echo htmlspecialchars($blog['category']); ?>
                            </span>
                        </div>
                        <div class="blog-single-image">
                            <img src="images/<?php echo htmlspecialchars($blog['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($blog['title']); ?>" 
                                 class="img-responsive">
                        </div>
                    </div>
                    
                    <div class="blog-single-content">
                        <h2 class="blog-single-subtitle"><?php echo htmlspecialchars($blog['subtitle']); ?></h2>
                        <div class="blog-single-text">
                            <?php echo nl2br(htmlspecialchars($blog['content'])); ?>
                        </div>
                        <?php if (!empty($blog['tags'])): ?>
                        <div class="blog-single-tags">
                            <h4>Tags</h4>
                            <ul class="tags-list">
                                <?php
                                $tags = explode(',', $blog['tags']);
                                foreach ($tags as $tag) {
                                    echo '<li><a href="#" class="tag-link">' . htmlspecialchars(trim($tag)) . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

    <?php
} catch (Exception $e) {
    ?>
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Error</h2>
                    <p><?php echo $e->getMessage(); ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>