      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>About JejakBaduy</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">History</div>
                  <h3>Jejak Baduy: A Journey Into Authentic Baduy Culture</h3>
                  <p>Founded with a deep respect for the rich cultural heritage of the Baduy people, Jejak Baduy is dedicated to providing travelers with immersive experiences that honor the customs and traditions of this indigenous community. We believe in responsible and sustainable tourism that supports the Baduy people while allowing visitors to gain unique insights into their way of life.</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_4.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container" style="margin-top:-10px">
            <div class="col-md-6">
              <p>
                <img src="images/<?php
                    $query = "Select img from tb_aboutus
                                Where id=1";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['img'];
                    }
                ?>" alt="Anak-anak Baduy" class="img-responsive" style="margin-left: 0px;">
              </p>
            </div>
            <div class="col-md-6 col-md-push-1" style="margin-left: 0px;" >
              <h2>
                <?php
                    $query = "Select heading from tb_aboutus
                                Where id=1";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['heading'];
                    }
                ?>
              </h2>
              <p>
              <?php
                    $query = "Select content from tb_aboutus
                                Where id=1";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['content'];
                    }
                ?>
              </p>
            </div>
          </div>
      </section>
      
      <section class="probootstrap-section" style="padding-top:0px">
        <div class="container">
              <div class="col-md-6">
                <h2><?php
                    $query = "Select heading from tb_aboutus
                                Where id=2";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['heading'];
                    }
                ?></h2>
                <p><?php
                    $query = "Select content from tb_aboutus
                                Where id=2";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['content'];
                    }
                ?></p>
              </div>
              <div class="col-md-6 col-md-push-1" >
                <p>
                  <img src="images/<?php
                    $query = "Select img from tb_aboutus
                                Where id=2";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['img'];
                    }
                ?>" alt="Anak-anak Baduy" class="img-responsive pull-right" style="margin-left: 0px;">
                </p>
              </div>
            </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Why Choose JejakBaduy</h2>
              <p class="lead">We are committed to providing:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Authentic Cultural Experiences</h3>
                  <p>Each trip is carefully curated to offer a genuine insight into the Baduy way of life.</p>
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Sustainable Tourism Practices</h3>
                  <p>We work closely with the community to ensure that our tours benefit the Baduy people without harming their environment.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Exclusive Access to Remote Villages</h3>
                  <p>Experience the hidden corners of the Baduy region, where tourists rarely venture.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Support for Local Communities</h3>
                  <p>A portion of our profits goes directly to the Baduy community to support their ongoing efforts in preserving their traditions and environment.</p>
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Customizable Tours</h3>
                  <p>Whether you're interested in trekking through the beautiful landscape or learning traditional weaving, we can tailor your trip to your interests.</p>
                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Experienced Local Guides</h3>
                  <p>Our guides are not only well-versed in the culture and traditions of the Baduy but are also locals themselves, ensuring you get a truly informed and respectful experience from those who know the region best.</p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section>
      


      <?php
try {
    // Prepare and execute the query using PDO
    $query = "SELECT * FROM tb_aboutus WHERE id > 2 ORDER BY id";
    $stmt = $conn->prepare(query: $query);
    $stmt->execute();
    
    // Check if there are results
    if ($stmt->rowCount() > 0) {
        $count = 0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $count++;
            $isEven = ($count % 2 == 0);
            ?>
            <section class="probootstrap-section" <?php echo $count > 1 ? 'style="margin-top:-100px"' : ''; ?>>
                <div class="container">
                    <div class="row">
                        <?php if (!$isEven): ?>
                            <div class="col-md-6">
                                <p>
                                    <img src="images/<?php echo htmlspecialchars($row['img']); ?>" 
                                         alt="<?php echo htmlspecialchars($row['heading']); ?>" 
                                         class="img-responsive" style="margin-left: 0px;">
                                </p>
                            </div>
                            <div class="col-md-6 col-md-push-1" style="margin-left: 0px;">
                                <h2><?php echo htmlspecialchars($row['heading']); ?></h2>
                                <p><?php echo htmlspecialchars($row['content']); ?></p>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6">
                                <h2><?php echo htmlspecialchars($row['heading']); ?></h2>
                                <p><?php echo htmlspecialchars($row['content']); ?></p>
                            </div>
                            <div class="col-md-6 col-md-push-1">
                                <p>
                                    <img src="images/<?php echo htmlspecialchars($row['img']); ?>" 
                                         alt="<?php echo htmlspecialchars($row['heading']); ?>" 
                                         class="img-responsive pull-right" style="margin-left: 0px;">
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php
        }
    } 
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>