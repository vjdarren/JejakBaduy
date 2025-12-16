
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Packages</h1>
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
                  <div class="text-uppercase probootstrap-uppercase">Featured Video</div>
                  <h3>Explore Baduy in 2 Days, 1 Night: Watch Our Vlog</h3>
                  <p> Immerse yourself in the breathtaking beauty of Baduy as we take you on a journey through traditional villages, lush rice terraces, and serene waterfalls in our captivating 2-day, 1-night vlog.</p>
                  <p><a href="#" class="btn btn-primary">Book now</a>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                  <iframe class="btn-video popup-vimeo" src="https://www.youtube.com/embed/iwhc_ESA6Vo?si=Kg4Xn8IUCU6BytZl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <i class="icon-play3"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Open Trip</h2>
              <p class="lead">Join a Group Adventure: Experience the magic of Baduy with like-minded travelers on our open trip.</p>
            </div>
            <?php
              $query ="select con_content from tb_content
              where con_name='trippackage' and con_title='Content1'";
              
              $sql = mysql_query($query);
                    if ($row = $sql->fetch()){
                       echo $row['con_content'];
                    }
            ?>
            <?php
              $query ="select con_content from tb_content
              where con_name='trippackage' and con_title='Content2'";
              
              $sql = mysql_query($query);
                    if ($row = $sql->fetch()){
                       echo $row['con_content'];
                    }
            ?>
        </div>
      </section>

      <section class="probootstrap-section" style="padding-top: 0px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-left section-heading probootstrap-animate" style="margin-top: 75px;">
              <h2>Private Trip</h2>
              <p class="lead">Tailor Your Experience: Enjoy a personalized Baduy adventure with our exclusive private trip options.</p>
            </div>
            <?php
              $query ="select con_content from tb_content
              where con_name='trippackage' and con_title='Content3'";
              
              $sql = mysql_query($query);
                    if ($row = $sql->fetch()){
                       echo $row['con_content'];
                    }
            ?>
          </div>
        </div>
      </section>

  