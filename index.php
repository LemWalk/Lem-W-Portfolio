<?php 
include'inc/form_validation.php';
include'inc/header.php'; 
?>

<!-- ==================== hero text ================ -->

          <div class="hero-text-box">
            <span id="hero-title"></span> <br>
            <span id="hero-text"></span> 
          </div>

          <div >
            <a  class="scroll-down" href="#portfolio">
            <span>Scroll Down</span>
            <i class="fa-solid fa-chevron-down"></i> 
          </a>           
          </div>


        </div>
      </div>


<!-- ================ Portfolio ================ -->

      <section id="portfolio">
        <div class="container-inner">

          <div class="port-intro">
            <h1 class="portfolio-title">Welcome to My Portfolio</h1>
          </div>
          
          <div class="port-outer">

            <div class="port-item">
              <a rel="noopener" href="https://netmatters.lemuel-walkinshaw.netmatters-scs.co.uk/" target="_blank">
                <div class="port-img" style="background-image: url(./img/netmatters-reflection-screenshot.jpg);">
                  <span class="port-img-text">I created a rebuild of the Netmatters homepage using HTML, CSS, JavaScript and PHP</span>
                </div>
                <div class="port-info">
                  <h3>Project 1</h3>
                  <p>View My Work <i class="fa-solid fa-arrow-right"></i></p>
                </div>
              </a> 
            </div>

            <div class="port-item">
              <a rel="noopener" href="https://js-array.lemuel-walkinshaw.netmatters-scs.co.uk/" target="_blank">
                <div class="port-img" style="background-image: url(./img/js-array.jpg);">
                  <span class="port-img-text">I have created a JavaScript project that assigns images to unique email addresses using multi-dimensional arrays, with built in validation and error alerts .</span>
                </div>
                <div class="port-info">
                  <h3>Project 2</h3>
                  <p>View My Work <i class="fa-solid fa-arrow-right"></i></p>
                </div>
              </a> 
            </div>

            <div class="port-item">
              <a href="#">
                <div class="port-img" style="background-image: url(./img/pb-triangle-bg.jpg);">
                  <span class="port-img-text">I am the second placeholder, waiting for a legendary project!</span>
                </div>
                <div class="port-info">
                  <h3>Project 3</h3>
                  <p>View My Work <i class="fa-solid fa-arrow-right"></i></p>
                </div>
              </a> 
            </div>

            <div class="port-item">
              <a href="#">
                <div class="port-img" style="background-image: url(./img/pb-triangle-1.jpg);">
                  <span class="port-img-text">I, like my fellow placeholders, eagerly await a great project!</span>
                </div>
                <div class="port-info">
                  <h3>Project 4</h3>
                  <p>View My Work <i class="fa-solid fa-arrow-right"></i></p>
                </div>
              </a> 
            </div>

            <div class="port-item">
              <a href="#">
                <div class="port-img" style="background-image: url(./img/pb-triangle-bg.jpg);">
                  <span class="port-img-text">Tis I, the fourth placeholder, let my champion project come forth!  </span>
                </div>
                <div class="port-info">
                  <h3>Project 5</h3>
                  <p>View My Work <i class="fa-solid fa-arrow-right"></i></p>
                </div>
              </a> 
            </div>

            <div class="port-item">
              <a href="#">
                <div class="port-img" style="background-image: url(./img/pb-triangle-bg.jpg);">
                  <span class="port-img-text">I'm the last placeholder, and I hate everyone!</span>
                </div>
                <div class="port-info">
                  <h3>Project 6</h3>
                  <p>View My Work <i class="fa-solid fa-arrow-right"></i></p>
                </div>
              </a> 
            </div>
                        
          </div>


        </div>
      </section>


<!-- ================= Contact Form =================== -->


      <div id="contact">
        <div class="container-inner">
          <div class="form-container">

        <h2 class="contact-title">Contact Me <i class="fa-solid fa-phone fa-sm"  style="color: #000000;"></i></h2>

        <div class="contact-info">
          
          <p>Need some work doing? Want to collaborate? Or if you just have a question?</p><br>
          <p>E-mail me at: <br><br> <a class="text-small" href="mailto:lemuel.walkinshaw@netmatters-scs.com"><strong class="text-small">lemuel.walkinshaw@netmatters-scs.com</strong></a></p> <br>
          <p>Or you can complete the form below and I will get back to you. </p>

        </div>

        <form class="form-contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
          <div class="form-inner">

          <?php 
                    
                    if($_SESSION['form_valid'] == true) { 
                        echo "<div class=\"submit_message_box\"> ";
                        echo " <div  class=\"submit-successful \">Submission Successful!<i class=\" submit_message_close fa-solid fa-x fa-xs\"></i></div> ";
                        echo "</div> ";                        
                    }

                    if(
                        !empty($firstNameErr) ||
                        !empty($lastNameErr) ||
                        !empty($emailErr) ||
                        !empty($subjectErr) ||
                        !empty($messageErr)) 
                            { 
                                echo "<div class=\"submit_message_box\"> ";
                                echo " <div  class=\"submit-failed\">Submission Unsuccessful: <br><br> ";
                                
                                if(!empty($firstNameErr)){
                                    echo htmlspecialchars("First name error: $firstNameErr");
                                    echo "<br><br>";
                                }

                                if(!empty($lastNameErr)){
                                  echo htmlspecialchars("Last name error: $lastNameErr");
                                  echo "<br><br>";
                              }

                                if(!empty($emailErr)){
                                    echo htmlspecialchars("Email error: $emailErr");
                                    echo"<br><br>";
                                }

                                if(!empty($subjectErr)){
                                    echo htmlspecialchars("Telephone error: $subjectErr");
                                    echo"<br><br>";
                                }

                                if(!empty($messageErr)){
                                  echo htmlspecialchars("Telephone error: $messageErr");
                                  echo"<br><br>";
                              }
                                
                                
                                echo" <i class=\" submit_message_close_error fa-solid fa-x fa-xs\"></i></div> ";
                                echo "</div> ";                        
                            };

                        ?>   

            <div class="input-names">

            <div class="data-input">
              <label for="first_name"></label>
              <input class="input-box" id="first_name" type="text" placeholder="First Name*" value="<?php echo $firstName;?>" name="first_name" required <?php if(!empty($firstNameErr)) {echo 'style="border: 3px solid #a94442 !important;"';} ?>>
            </div>

            <div class="data-input">
              <label for="last_name"></label>
              <input class="input-box" type="text" id="last_name" placeholder="Last Name*" value="<?php echo $lastName;?>" name="last_name" required <?php if(!empty($lastNameErr)) {echo 'style="border: 3px solid #a94442 !important;"';} ?>>
            </div>

          </div>

            <div class="data-input">
              <label for="e-mail"></label>
              <input class="input-box" type="email" id="e-mail" placeholder="E-mail Address*" value="<?php echo $email;?>" name="email" required <?php if(!empty($emailErr)) {echo 'style="border: 3px solid #a94442 !important;"';} ?>>
            </div>

            <div class="data-input">
              <label for="subject"></label>
              <input class="input-box" type="text" id="subject" placeholder="Subject*" value="<?php echo $subject;?>" name="subject" required <?php if(!empty($subjectErr)) {echo 'style="border: 3px solid #a94442 !important;"';} ?>>
            </div>

            <div class="data-input">
              <label for="message"></label>
              <textarea class="input-box" type="text" id="message" placeholder="Message*" value="<?php echo $message;?>" name="message" required <?php if(!empty($messageErr)) {echo 'style="border: 3px solid #a94442 !important;"';} ?>></textarea>
            </div>
            
            <div class="btn-submit">
              <button type="submit" class="form-submit-button"> Submit</button>
            </div>

        </div>
        </form>
        
      </div>
      </div>  
      </div>

    </div>
  </main>
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/slick/slick.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/hero.js"></script>
  </body>  
</html>