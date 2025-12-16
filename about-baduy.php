      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Tentang Baduy</h1>
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
                  <h3>Temukan Ritual Tahunan Seba Baduy</h3>
                  <p>Saksikan warisan budaya mendalam masyarakat Baduy melalui ritual tahunan Seba. Tradisi yang telah berlangsung lama ini menampilkan masyarakat Baduy yang memberikan hasil bumi mereka kepada pemerintah sebagai tanda hormat dan syukur. Ritual Seba bukan sekadar acara, melainkan ekspresi hidup dari semangat dan identitas budaya Baduy yang abadi.</p>
                  <p><a href="#tradisi" class="btn btn-primary scrollToSection">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_4.jpg)">
                <iframe class="btn-video popup-vimeo" width="560" height="315" src="https://www.youtube.com/embed/dEE5Bz78TsU?si=YR_EusUNB03oF6J4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                  <i class="icon-play3"></i>
                </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <section class="probootstrap-section probootstrap-animate" id="about" style="margin-top: -100px;">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Mengenal Baduy</h2>
                <h3 class="lead">Menyaksikan Kehidupan yang Tetap Alami dan Berkelanjutan di Tengah Modernisasi</h3>
              </div>
            </div>
            <div class="col-md-6">
              <p>
                <img src="images/<?php
                    $query = "Select img from tb_aboutbaduy
                              Where id=14";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['img'];
                    }
                ?>" alt="Warga Baduy Berjalan" class="img-responsive" style="margin-left: 0px; width:100%">
              </p>
            </div>
            <div class="col-md-6 col-md-push-1" style="margin-left: 0px;" >
              <h2 style="font-size: 35px;">
                <?php
                    $query = "Select heading from tb_aboutbaduy
                                Where id=14";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['heading'];
                    }
                ?></h2>
              <p>
              <?php
                    $query = "Select content from tb_aboutbaduy
                                Where id=14";
                    $sql = mysql_query($query);
                    if ($row = $sql->fetch()) {
                        echo $row['content'];
                    }
                ?>
              </p>                      
            </div>
            </div>
        </section>
 
        <section class="probootstrap-section" style="margin-top:-100px">
          <div class="container">
            <div class="row">
                        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInUp">
                          <h2>
                          <?php
                              $query = "Select heading from tb_aboutbaduy
                                          Where id=15";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['heading'];
                              }
                          ?>
                          </h2>
                          <p>
                          <?php
                              $query = "Select content from tb_aboutbaduy
                                          Where id=15";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['content'];
                              }
                          ?>
                          </p>
                        </div>
                        <div class="col-md-6 col-md-push-1 probootstrap-animate" data-animate-effect="fadeInUp">
                          <p>
                            <img src="images/<?php
                              $query = "Select img from tb_aboutbaduy
                                          Where id=15";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['img'];
                              }
                          ?>" alt="Wanita Suku Baduy Menenun" class="img-responsive pull-right" style="margin-left: 0px;">
                          </p>
                        </div>
                    </div> 
        </section>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" style="margin-top: -50px;">
              <h2>Peraturan untuk Pengunjung</h2>
              <p>Masyarakat Baduy sangat menjaga adat dan tradisi mereka, sehingga penting bagi pengunjung untuk mematuhi beberapa peraturan berikut:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-cross2"></i></div>
                <div class="text">
                  <h3>Dilarang Mengambil Foto atau Video</h3>
                  <p>Di wilayah Baduy Dalam, pengambilan foto atau video dilarang untuk menghormati adat setempat.</p>
                </div>  
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Menghormati Pakaian Adat</h3>
                  <p>Berpakaianlah sopan dan sesuai dengan budaya lokal.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Tidak Membuang Sampah Sembarangan</h3>
                  <p>Jaga kebersihan lingkungan dengan tidak membuang sampah sembarangan dan membawa pulang sampah Anda.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Tidak Memetik Tanaman atau Mengambil Benda-Benda Alam</h3>
                  <p>Jangan memetik tanaman atau mengambil benda alam tanpa izin untuk menjaga kelestarian.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-cross2"></i></div>
                <div class="text">
                  <h3>Dilarang Mandi dengan Sabun atau Shampoo</h3>
                  <p>Jangan mandi di sungai atau wilayah Baduy Dalam menggunakan shampoo, pasta gigi, dan sabun untuk menjaga kealamian lingkungan.</p>
                </div>  
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-cross2"></i></div>
                <div class="text">
                  <h3>Dilarang Mandi di Sungai</h3>
                  <p>Wisatawan dilarang mandi atau membuang kotoran di aliran sungai di kampung Baduy Dalam, yang hanya digunakan oleh PUUN, kepala adat.</p>
                </div>
              </div>
              
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-cross2"></i></div>
                <div class="text">
                  <h3>Dilarang Berbicara Tidak Sopan</h3>
                  <p>Jaga ucapan dan hindari berbicara tidak sopan atau sembarangan untuk menghormati adat setempat.</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Menghormati Ritual dan Upacara Adat</h3>
                  <p>Jangan mengganggu upacara adat dan hindari mengambil foto atau video selama upacara berlangsung.</p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section>

      <section id="tradisi">
        <section class="probootstrap-section" id="about" style="margin-top: -100px;">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                <h2>Lebih Tentang Baduy</h2>
                <h3 class="lead">Menemukan Harmoni di Antara Tradisi dan Alam yang Terjaga</h3>
              </div>
            </div>
            <div class="col-md-6">
              <p class="probootstrap-animate" data-animate-effect="float">
                <img src="images/<?php
                              $query = "Select img from tb_aboutbaduy
                                          Where id=16";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['img'];
                              }
                          ?>" alt="Warga Baduy Berjalan" class="img-responsive" style="margin-left: 0px;">
              </p>
            </div>
            <div class="col-md-6 col-md-push-1" style="margin-left: 0px;" >
            <h2 class="probootstrap-animate" data-animate-effect="float">
            <?php
                              $query = "Select heading from tb_aboutbaduy
                                          Where id=16";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['heading'];
                              }
                          ?>
            </h2>
              <p class="probootstrap-animate" data-animate-effect="float">
              <?php
                              $query = "Select content from tb_aboutbaduy
                                          Where id=16";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['content'];
                              }
                          ?>
              </p>
          </div>
        </section>

        <section class="probootstrap-section" style="margin-top:-100px">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h2 class="probootstrap-animate" data-animate-effect="float"><?php
                              $query = "Select heading from tb_aboutbaduy
                                          Where id=17";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['heading'];
                              }
                          ?></h2>
                <p class="probootstrap-animate" data-animate-effect="float">
                <?php
                              $query = "Select content from tb_aboutbaduy
                                          Where id=17";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['content'];
                              }
                          ?>
                </p>
              </div>
              <div class="col-md-6 col-md-push-1">
                <p>
                  <img src="images/<?php
                              $query = "Select img from tb_aboutbaduy
                                          Where id=17";
                              $sql = mysql_query($query);
                              if ($row = $sql->fetch()) {
                                  echo $row['img'];
                              }
                          ?>" alt="Masyarakat Baduy Bermusyawarah" class="img-responsive pull-right probootstrap-animate" data-animate-effect="float" style="margin-left: 0px;">
                </p>
              </div>
            </div> 
          </div>
        </section>
      
      <?php
try {
    // Prepare and execute the query using PDO
    $query = "SELECT * FROM tb_aboutbaduy WHERE id > 17 ORDER BY id";
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