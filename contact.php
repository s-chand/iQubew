<?php
include 'header.php';

?>
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
            <h2>Our <span>Contacts</span></h2>
            <!-- .contacts -->
            <ul class="contacts">
            	<li><strong>Zip Code:</strong>+23401</li>
              <li><strong>Country:</strong>Nigeria</li>
              <li><strong>City:</strong>Lagos</li>
              <li><strong>Phone</strong></li>
                <li><strong></strong>+234 (803) 407 4979</li>
              <li><strong></strong>+234 (803) 343 8870</li>
              <li><strong></strong>+234 (706) 234 4351</li>
              <li><strong></strong>+234 (816) 234 5436</li> 
              <li><strong>Email:</strong></li>
                <li><strong></strong></li>
                <a href="mailto:detan.oyedele@gmail.com">detan.oyedele@gmail.com</a></li>
              <li><strong></strong><a href="mailto:tofunmibabatunde@gmail.com">tofunmibabatunde@gmail.com</a></li>
              <li><strong></strong><a href="mailto:samuel.i.okoroafor@gmail.com">samuel.i.okoroafor@gmail.com</a>
            </ul>
            <!-- /.contacts -->
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>Contact <span>Form</span></h2>
              <?php
              if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])) {
$email = $_POST['email'];
$fullname = $_POST['name'];
$message = $_POST['message'];
$email_subject = "iQubebase Website Contact Message";
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$header="From: ".$email;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

if(mail('samuel.i.okoroafor@gmail.com, tofunmibabatunde@gmail.com, detan@iqubebase.com', $email_subject, $message,$header))
{
echo '<label class="">Contact information sent!</label>';
}
}
}
              ?>
              <label><h3 id="res"></h3></label>
              <form id="contacts-form" action="contact.php" method="post">
                <fieldset>
                  <div class="field">
                    <label>Your Name:</label>
                    <input type="text" value="" id="name" name="name"/>
                  </div>
                  <div class="field">
                    <label>Your E-mail:</label>
                    <input type="email" value="" id="email" name="email"/>
                  </div>
                  
                  <div class="field">
                    <label>Your Message:</label>
                    <textarea id="message" name="message"></textarea>
                  </div>
                  <div><input type="submit" style="width:200px;height:35px;background-color:#86C31D;color:#EAEAEA" value="Send Your Message!"/></div>
                </fieldset>
              </form>
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
 <?php
include 'footer.php';
 ?>