      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Testimonials</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" style="margin-bottom:-100px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>What Our Guests Say</h3>
                  <p>Read genuine feedback from our valued guests who have experienced the magic of Baduy with JejakBaduy.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <?php
            // Query to get all testimonials from tb_testimonials
            $query = "SELECT * FROM tb_testimonials ORDER BY id DESC";
            $result = mysql_query($query);
            
            $rowCount = 0;
            while ($testimonial = $result->fetch(PDO::FETCH_ASSOC)) {
              $rowCount++;
              ?>
              <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                <a href="#" class="probootstrap-featured-news-box">
                  <figure class="probootstrap-media">
                    <img src="images/<?php echo htmlspecialchars($testimonial['img']); ?>" 
                        alt="<?php echo htmlspecialchars($testimonial['details']); ?>" 
                        class="img-responsive">
                  </figure>
                  <div class="probootstrap-text">
                    <h3><?php echo htmlspecialchars($testimonial['name']); ?></h3>
                    <p><?php echo htmlspecialchars($testimonial['details']); ?></p>
                  </div>
                </a>
              </div>
              <?php
              // Add clearfix div after every 3 items to maintain grid
              if ($rowCount % 3 == 0) {
                echo '<div class="clearfix visible-md-block visible-lg-block"></div>';
              }
            }
            
            // If no testimonials found
            if ($rowCount == 0) {
              echo '<div class="col-md-12 text-center">';
              echo '<p>No testimonials available at the moment.</p>';
              echo '</div>';
            }
            ?>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2>Guest Testimonials</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 probootstrap-animate">
              <div class="probootstrap-testimonial">
                <blockquote>
                  <p>"JejakBaduy provided an incredible experience. The guides were knowledgeable and the scenery was breathtaking."</p>
                  <cite class="author">— John Doe</cite>
                </blockquote>
              </div>
            </div>
            <div class="col-md-6 probootstrap-animate">
              <div class="probootstrap-testimonial">
                <blockquote>
                  <p>"The Baduy trip with JejakBaduy was a once-in-a-lifetime experience. Highly recommended!"</p>
                  <cite class="author">— Jane Smith</cite>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
