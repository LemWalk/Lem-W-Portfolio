<?php 
$pageTitle = 'Coding Examples'; 
$bannerTitle = 'Coding Examples';
include 'inc/header_banner.php';
?>

      <div class="container-inner">

      <div class="code-outer autoplay">  

      <div class="placeholder">
        <h2 class="placeholder-title">Burger Menu JavaScript Function</h2>
          <div class="img-container">
            <p class="img-desc">
            Here is a JavaScript function I used on my portfolio website for the burger menu button and side menu.
              The function is designed to add the class 'active' when clicked, which transforms the menu button and displays the side menu. 
              When the button is clicked again, or a link is clicked, it closes the menu and returns to its former state.
            </p>
          </div>
      
        <div class="code-block">   
          <pre class="code-example">
            <code class="language-javascript line-numbers" tabindex="0">              
              // This function toggles the 'active' class for the 'burger-menu' and 'off-screen-menu' elements
              function toggleMenu() {
                  // Get the elements by their class names
                  let burgerMenu = document.querySelector('.burger-menu');
                  let offScreenMenu = document.querySelector('.off-screen-menu');
                  // Add or remove the 'active' class depending on the current state
                  burgerMenu.classList.toggle('active');
                  offScreenMenu.classList.toggle('active');
                }
                
                // This function removes the 'active' class for the 'burger-menu' and 'off-screen-menu' elements
                function closeMenu() {
                  // Get the elements by their class names
                  let burgerMenu = document.querySelector('.burger-menu');
                  let offScreenMenu = document.querySelector('.off-screen-menu');
                  // Remove the 'active' class if it exists
                  if (burgerMenu.classList.contains('active')) {
                    burgerMenu.classList.remove('active');
                    offScreenMenu.classList.remove('active');
                  }
                }
                
                // Add an event listener to the 'burger-menu' element to call the toggleMenu function when clicked
                document.querySelector('.burger-menu').addEventListener('click', toggleMenu);
                
                // Get all the elements with the 'nav-link' class and loop through them
                let navLinks = document.querySelectorAll('.nav-link-off-screen');
                for (let navLink of navLinks) {
                  // Add an event listener to each element to call the closeMenu function when clicked
                  navLink.addEventListener('click', closeMenu);
                }
            </code>
          </pre>
      </div>
      </div>
          
      <div class="placeholder">
          <h2 class="placeholder-title">E-mail validation JavaScript Function</h2>
          <div class="img-container">
            <p class="img-desc">
              Here is an example of a function used for e-mail validation in an input on my JavaScript Array project.
              The function first assesses if the email input is not equal to the regular expression, or the input is empty. 
              If either are true then it displays a red border around the input and asks the user to "input a valid email...".
              If the e-mail is valid, it is then accepted, turning all the styles back to their default and clearing the error message in the browser.      
            </p>
          </div>

        <div class="code-block"> 
          <pre class="code-example">
            <code class="language-javascript line-numbers" tabindex="0">              
              const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
                      
              let email = document.getElementById("email");
                      
              function clearError () {
                  emailMessage.innerHTML = ``
              }
                      
              function emailValidation () {
                  if(!regex.test(email.value) || email.value === '') {
                          email.style.border = '3px solid #d45b5b';
                          email.style.boxShadow = '0 0 8px #d45b5b';
                          email.placeholder = 'Please insert a valid email...';
                          // console.log('email invalid');
                          return true;
                      } else {
                          email.style.border = 'solid 3px #b09ee9';
                          email.style.boxShadow = '';
                          email.placeholder = '';
                          // console.log('email is valid');
                          clearError();
                          return false;
                      }
                  }
            </code>
          </pre>
        </div> 
      </div>


      <div class="placeholder">
        <h2 class="placeholder-title">PHP Form Validation Function</h2>
          <div class="img-container">
            <p class="img-desc">
            Here is a block of PHP code that validates the inputs of a form against custom regular expressions.
            If the input values are valid then the data will be accepted and submitted to a database.
            If the data is not valid then the code will reject the input and display an error message to alert the user.  
            </p>
          </div>
      
        <div class="code-block">   
          <pre class="code-example">
            <code class="language-javascript line-numbers" tabindex="0">              
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST["first_name"])) {
                    $firstNameErr = "First name is required";
                } else {            
                    $firstName = test_input($_POST["first_name"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
                        $firstNameErr = "Only letters and white space allowed";
                    }
                }    

                if (empty($_POST["last_name"])) {
                    $lastNameErr = "Last name is required";
                } else {            
                    $lastName = test_input($_POST["last_name"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
                        $lastNameErr = "Only letters and white space allowed";
                    }
                }


                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                    if (!preg_match($emailRegex, $email)) {
                        $emailErr = "Invalid email";
                    }
                }


                if (empty($_POST["subject"])) {
                    $subjectErr = "Subject is required";
                } else {
                        $subject = test_input($_POST["subject"]);
                }    


                if (empty($_POST["message"])) {
                    $messageErr = "Message is required";
                } else {
                    $message = test_input($_POST["message"]);
                }


                if (
                    empty($firstNameErr) &&
                    empty($lastNameErr) &&
                    empty($emailErr) &&
                    empty($subjectErr) &&
                    empty($messageErr)
                )   {
                    
                        try{

                            $_SESSION['form_valid'] = true;

                            require_once "connection.php";
                            $query = "INSERT INTO client_details (first_name, last_name, email, subject, message) 
                            VALUES ( :first_name , :last_name , :email , :subject, :message)";            

                            $stmt = $conn->prepare($query);

                            $stmt->bindParam(":first_name", $firstName);
                            $stmt->bindParam(":last_name", $lastName);
                            $stmt->bindParam(":email", $email);
                            $stmt->bindParam(":subject", $subject);
                            $stmt->bindParam(":message", $message);
                            
                            $stmt->execute();
                        
                            $conn = null;
                            $stmt = null;
                            header('Location: index.php#contact');
                            die();
                            

                        } catch (PDOException $e) {
                            die("Query Failed: " . $e->getMessage());
                        }                    
                    }                     
                } 

            </code>
          </pre>
      </div>
      </div>

        
      </div>


    </div>

  </main>
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/slick/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.autoplay').slick({
  draggable : true,      
  slidesToShow: 1,
  slidesToScroll: 1,
  infintie : true,
  dots : true,
  arrows : false,
});
});

  </script>
  <script src="./js/main.js"></script>
  <script src="js/prism.js"></script>
  <script src="./js/darkmode.js"></script>
</body>

