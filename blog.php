<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex align-items-center justify-content-center section-heading probootstrap-animate" style="margin-bottom: 0px;">
        <h1 class="text-center">Our Blog</h1>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
        <h2>Blog Posts</h2>
        <p class="lead">Discover captivating stories, insights, and practical tips for your Baduy adventure.</p>
      </div>
    </div>
    
    <div class="row">
      <?php
      // Query to get all blog posts
      $query = "SELECT * FROM tb_blog ORDER BY date DESC";
      $result = mysql_query($query);
      
      $rowCount = 0;
      while ($blog = $result->fetch(PDO::FETCH_ASSOC)) {
        $rowCount++;
        ?>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="index.php?page=blog-single&id=<?php echo htmlspecialchars($blog['id']); ?>" class="probootstrap-featured-news-box" style="display: flex; flex-direction: column; height: 100%;">
            <figure class="probootstrap-media">
              <img src="images/<?php echo htmlspecialchars($blog['image']); ?>" 
                   alt="<?php echo htmlspecialchars($blog['title']); ?>" 
                   class="img-responsive" width="384px" height="384px">
            </figure>
            <div class="probootstrap-text" style="flex-grow: 1;">
              <h3 style="overflow: hidden; text-overflow: ellipsis; margin-bottom: 10px;"><?php echo htmlspecialchars($blog['title']); ?></h3>
              <span class="probootstrap-date">
                <i class="icon-calendar"></i>
                <?php echo date('F j, Y', strtotime($blog['date'])); ?>
              </span>
              <span class="probootstrap-location">
                <i class="icon-book"></i>
                <?php echo htmlspecialchars($blog['read_time']); ?>-minute read
              </span>
            </div>
          </a>
        </div>
        <?php
        // Add clearfix div after every 3 items to maintain grid
        if ($rowCount % 3 == 0) {
          echo '<div class="clearfix visible-md-block visible-lg-block"></div>';
        }
      }
      
      // If no blogs found
      if ($rowCount == 0) {
        echo '<div class="col-md-12 text-center">';
        echo '<p>No blog posts available at the moment.</p>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>
