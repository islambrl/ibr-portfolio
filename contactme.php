<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>
    <link rel="stylesheet" href="./contact.css">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
</head>
<body style="background-color: #A2C9DC;">
    <?php require_once("./nav.php") ?>
    
    <?php 



   
   
    if(isset($_POST["send"])){
        require_once 'mail.php';
        $mail->setFrom($_SESSION['email'], $_SESSION['name']);
        $mail->addAddress('islamberoual0519@gmail.com');
        $mail->Subject = $_POST['subject'] ;
        $mail-> Body = '<h2>Email:</h2>'. $_POST['email'].'<br>'.'<h2>name:</h2>'.$_POST['fullname'].'<br>'.'<h2>phone number:</h2>'.$_POST['phone'].'<br>'.'<h2>subject:</h2>'.'<br>'. $_POST['message'] ; 
       
        if( $mail->send()){
            echo "<h3  >we get your message and we'll reply  soon </h3>";
        }else{
            echo "<h2 style=' color:red;position: absolute;bottom: 10%; right:37% ;'  >there is a problem try againe </h2>";
        }
     }
   

   
  ?>
  
    <script>
    var home = document.getElementById("contact");
    home.classList.add("active");
  </script>


    <div class="page  ">
        <h1 class="tit text-center mt-5">My informations</h1> <br>
        <div class="presentation text-center">
            
            <img id="phone_img" src="./img/phone.png" alt="">
            <label  for="phone_img">Phone: <span style="color:  #599FB0;" id="mail_label">0672304482</span></label> <br>
            <img id="mail_img" src="./img/email.png" alt=""> 
            <label for="mail_img">Email: <span style="color:  #599FB0;" id="mail_label">islamberoual0519@gmail.com</span> </label> <br>
            <img id="address_img" src="./img/adress.png" alt=""> 
            <label for="address_img">address: <span style="color:  #599FB0;" id="mail_label">Algiers, Algeria</span></label>
        </div>
        
        </div>
        

        <form method="POST">
        <div style="max-width: 90%;" class="input-group mt-5 mb-3 mx-4">
  
  <input required name="fullname" type="text" class="form-control" placeholder="Username">
</div>

<div style="max-width: 90%;" class="input-group mb-3 mx-4">
  <input required name="email" type="text" class="form-control" placeholder="username" >
  <span class="input-group-text" style="background-color:#2D371A; color:white;" >@gmail.com</span>
</div>

<div style="max-width: 90%;" class="input-group mb-3 mx-4">
  <span class="input-group-text" style="background-color:#2D371A; color:white;">+</span>
  <input name="phone" required type="text" class="form-control" placeholder="Your Phone number">
 
</div>

<div style="max-width: 90%; height:100px;" class="input-group mx-4 ">
  
  <textarea name="message" name="send" required class="form-control" aria-label="With textarea"placeholder="Your Message"></textarea>
  
</div>

<button class="btn  mx-auto d-block mt-4" style="background-color: #599FB0;" type="submit" name="send">send message</button>
        </form>
        
       





    




</body>
</html>