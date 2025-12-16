

<section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(images/baduy1.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Discover the Hidden Gem of West Java</h1>
                    <p><a href="index.php?page=about-us" class="btn btn-primary" style="margin-top: 30px;">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/baduy2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Plan Your Baduy Escape</h1>
                    <p><a href="index.php?page=contact" class="btn btn-primary" style="margin-top: 30px;">Contact Us</a></p>
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url(images/baduy3.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Choose Your Baduy Adventure</h1>
                    <p><a href="index.php?page=services" class="btn btn-primary" style="margin-top: 30px;">More about our Packages</a></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2 style="font: Times New Roman;">Rasakan Keindahan Alam dan Kearifan Lokal Suku Baduy</h2>
            </div>
          </div>
        </div>
      </section>

      <?php
              $query ="select con_content from tb_content
              where con_name='home' and con_title='Content1'";
              
              $sql = mysql_query($query);
                    if ($row = $sql->fetch()){
                       echo $row['con_content'];
                    }
      ?>

      <section class="probootstrap-section" id="probootstrap-counter" style="text-align: left;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="129000" data-speed="5000" data-refresh-interval="50">K</span>
                  </span>
                  <span class="probootstrap-counter-label">Instagram Followers</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="2018" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Traveling Since</span>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Customer Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-section probootstrap-section-colored" style="background-color:#209748;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0" style="margin-top:50px;">About JejakBaduy</h2>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <?php
              $query ="select con_content from tb_content
              where con_name='tentangkita' and con_title='Content1'";
              
              $sql = mysql_query($query);
                    if ($row = $sql->fetch()){
                       echo $row['con_content'];
                    }
          ?>
      </section>
      
      <section class="probootstrap-section" style="padding-top:0px">
        <?php
              $query ="select con_content from tb_content
              where con_name='tentangkita' and con_title='Content2'";
              
              $sql = mysql_query($query);
                    if ($row = $sql->fetch()){
                       echo $row['con_content'];
                    }
          ?>
      </section>

      <section class="probootstrap-section probootstrap-section-colored  probootstrap-custom-heading probootstrap-tab-section" style="background-color:#209748;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Highlights</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab">Featured Highlights</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="images/home1.JPG" alt="Highlight1" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3> Melintas Waktu di Jembatan Bambu</h3>
                              <p>Sebuah tradisi yang menghubungkan mereka dengan leluhur dan alam.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>June 29, 2024</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="images/home2.JPG" alt="Highlight2" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Senyum Ceria di Tengah Kesederhanaan</h3>
                              <p>Ekspresi tulus dari hidup dalam kesederhanaan dan jauh dari hiruk pikuk dunia luar.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>June 29, 2024</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="images/home6.JPG" alt="Highlight3" class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Beban yang Dibawa, Tradisi yang Dijunjung</h3>
                              <p>Sebuah gambaran nyata kehidupan sehari-hari masyarakat Baduy.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>June 30, 2024</span>
                              
                            </div>
                          </a>
                        </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="index.php?page=gallery" class="btn btn-primary">View all photos</a></p>  
                    </div>
                  </div>
                </div>
                </div>

              </div>
            
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored" style="background-color:#209748;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Our Services</h2>
            </div>
          </div>
      </section>
      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <section class="probootstrap-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Open Trip</h2>
                    <p class="lead">Join a Group Adventure: Experience the magic of Baduy with like-minded travelers on our open trip.</p>
                  </div>
                  <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <img src="images/services1.JPG" alt="Warga Baduy Luar Sedang Berjalan" style="max-width: 100%; height: 100%;">
                      </div>
                      <div class="text" style="margin-top: auto;margin-bottom:auto">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> Every Saturday/Sunday</span>
                        <h3>2 Hari 1 Malam</h3>
                        <p>Menginap 1 malam di kampung cibeo baduy dalam, diluar bulan kawalu. Selama masa bulan kawalu menginap di baduy luar, jadwal trip setiap sabtu minggu.</p>
                        <p><a href="index.php?page=services-single" class="btn btn-primary">Learn more</a></p>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                          <img src="images/services3.JPG" alt="Pengunjung sedang melihat keseharian warga suku Baduy" style="max-width: 100%; height: 100%;">
                      </div>
                      <div class="text" style="margin-top: auto;margin-bottom:auto">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> Everyday</span>
                        <h3>Single Day Trip</h3>
                        <p>Explore Baduy luar/sesuai permintaan, jadwal setiap hari, penjemputan stasiun rangkasbitung/ciboleger, harga menyesuaikan jumlah orang/paket.</p>
                        <p><a href="index.php?page=services-single" class="btn btn-primary">Learn more</a> </p>
                      </div>
                    </div>
                  </div>
              </div>
            </section>

            <section class="probootstrap-section" style="padding-top: 0px;">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 text-left section-heading probootstrap-animate" style="margin-top: 75px;">
                    <h2>Private Trip</h2>
                    <p class="lead">Tailor Your Experience: Enjoy a personalized Baduy adventure with our exclusive private trip options.</p>
                  </div>
                  <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <img src="images/services2.JPG" alt="Anak Suku Baduy Dalam memegang Es Krim" style="max-width: 100%; height: 100%;">
                      </div>
                      <div class="text" style="margin-top: auto;margin-bottom:auto">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> On Request</span>
                        <h3>Private Trip</h3>
                        <p>Tanggal trip menyesuikan permintaan weekend/weekday, fasilitas, lamanya trip menyesuaikan permintaan, harga menyesuaikan jumlah orang.</p></p>
                        <p><a href="index.php?page=services-single" class="btn btn-primary">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(images/bg1.JPG);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Ulasan Jejak Baduy</h2>
              <p class="lead">Temukan pengalaman wisata budaya yang tak terlupakan</p>
            </div>
          </div>
          <!-- END row -->
          <?php
              $query ="select con_content from tb_content
              where con_name='home' and con_title='Content2'";
              
              $sql = mysql_query($query);
                    if ($row = $sql->fetch()){
                       echo $row['con_content'];
                    }
          ?>
          <!-- END row -->
        </div>
      </section>


      

  