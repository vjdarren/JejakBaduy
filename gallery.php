

      <?php
      // Include database connection
      require_once 'function/database.php';

      // Pagination settings
      $items_per_page = 9; // Number of images per page
      $page = isset($_GET['p']) ? (int)$_GET['p'] : 1; // Current page number
      $offset = ($page - 1) * $items_per_page;

      // Get total number of images
      $total_query = "SELECT COUNT(*) as total FROM tb_gallery";
      $total_result = $conn->query($total_query);
      $total_row = $total_result->fetch(PDO::FETCH_ASSOC);
      $total_images = $total_row['total'];
      $total_pages = ceil($total_images / $items_per_page);

      // Query to fetch gallery images and descriptions with pagination
      $query = "SELECT img, title FROM tb_gallery LIMIT :offset, :items_per_page";
      $stmt = $conn->prepare($query);
      $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
      $stmt->bindValue(':items_per_page', $items_per_page, PDO::PARAM_INT);
      $stmt->execute();

      // Check if the query was successful
      if ($stmt && $stmt->rowCount() > 0) {
          ?>
          <section class="probootstrap-section probootstrap-section-colored">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
                          <h1 class="mb0">Baduy Gallery</h1>
                      </div>
                  </div>
              </div>
          </section>

          <section class="probootstrap-section probootstrap-bg-white">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="portfolio-feed three-cols">
                              <div class="grid-sizer"></div>
                              <div class="gutter-sizer"></div>
                              <div class="probootstrap-gallery">
                                  <?php
                                  // Loop through each image
                                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                      $img = htmlspecialchars($row['img']);
                                      $title = htmlspecialchars($row['title']);
                                      $imgSize = (strpos($img, 'landscape') !== false) ? '1000x667' : '364x547';
                                  ?>
                                      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="grid-item probootstrap-animate">
                                          <a href="images/gallery/<?php echo $img; ?>" itemprop="contentUrl" data-size="<?php echo $imgSize; ?>">
                                              <img src="images/gallery/<?php echo $img; ?>" itemprop="thumbnail" alt="<?php echo $title; ?>" />
                                          </a>
                                          <figcaption itemprop="caption description"><?php echo $title; ?></figcaption>
                                      </figure>
                                  <?php
                                  }
                                  ?>
                              </div>
                          </div>

                          <!-- Pagination -->
                          <?php if ($total_pages > 1): ?>
                          <div class="row">
                              <div class="col-md-12 text-center">
                                  <nav aria-label="Page navigation">
                                      <ul class="pagination custom-pagination">
                                          <?php if ($page > 1): ?>
                                          <li>
                                              <a href="?page=gallery&p=<?php echo ($page - 1); ?>" aria-label="Previous">
                                                  <span aria-hidden="true">&laquo; Previous</span>
                                              </a>
                                          </li>
                                          <?php endif; ?>

                                          <?php
                                          // Show numbered pagination
                                          for ($i = 1; $i <= $total_pages; $i++) {
                                              if ($i == $page) {
                                                  echo "<li class='active'><a href='#'>$i</a></li>";
                                              } else {
                                                  echo "<li><a href='?page=gallery&p=$i'>$i</a></li>";
                                              }
                                          }
                                          ?>

                                          <?php if ($page < $total_pages): ?>
                                          <li>
                                              <a href="?page=gallery&p=<?php echo ($page + 1); ?>" aria-label="Next">
                                                  <span aria-hidden="true">Next &raquo;</span>
                                              </a>
                                          </li>
                                          <?php endif; ?>
                                      </ul>
                                  </nav>
                              </div>
                          </div>
                          <?php endif; ?>
                      </div>
                  </div>
              </div>
          </section>
          <?php
      } else {
          echo "<p>No images found in the gallery.</p>";
      }
      ?>

      

    <!-- Photoswipe Modal -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">

          <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
          </div>

          <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                  <div class="pswp__counter"></div>
                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                  <button class="pswp__button pswp__button--share" title="Share"></button>
                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                  <div class="pswp__preloader">
                      <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                          <div class="pswp__preloader__donut"></div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                  <div class="pswp__share-tooltip"></div> 
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>
              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>
          </div>
      </div>
    </div>
    