<?php
session_start();

if (!isset($_SESSION['success']))
    {
        $_SESSION['success'] = false;
    
    }

    if (!isset($_SESSION['form_valid']))
    {
        $_SESSION['form_valid'] = false;
    }
    
    if (!isset($_SESSION['errorMessage']))
    {
        $_SESSION['errorMessage'] = [];
    }
    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }






// define variables and set to empty values
$firstNameErr = $lastNameErr = $emailErr = $subjectErr = $messageErr = "";
$firstName = $lastName = $email = $subject = $message = "";
$emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
// $telephoneRegex = "/^(?:(?:\+?44\s?(?:\(\d{1,5}\)|\d{1,5})|\d{4}|\d{5})\s?\d{3}\s?\d{3}\s?)$/";






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
            
                // $_SESSION['form_valid'] = false;
            } 
            
    } else {
            // header("Location:index.php#contact");
        }



        session_destroy();
    

?>