<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $conn = new mysqli('localhost','root','','JejakBaduy');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into tb_form (firstName, lastName, email, subject, message) values(?, ?, ?, ?, ? )");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $subject, $message);
    $execval = $stmt->execute();
    echo $execval;
    header('Location:index.php?page=thank_you');
    $stmt->close();
    $conn->close();
  }
}
?>

      
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Contact Us</h1>
            </div>
          </div>
        </div>
      </section>

      

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <?php
                $query ="select con_content from tb_content
                where con_name='contact' and con_title='Content1'";
                
                $sql = mysql_query($query);
                      if ($row = $sql->fetch()){
                        echo $row['con_content'];
                      }
                ?>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Get In Touch  or Text Our <a href="https://api.whatsapp.com/send/?phone=6287872046627&text&type=phone_number&app_absent=0"><strong>Whatsapp</strong></a></h2>
                  <p>Contact us using the form below.</p>
                  <form action="" method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="first_name">First Name</label>
                      <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                      <label for="last_name">Last Name</label>
                      <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message" required></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      