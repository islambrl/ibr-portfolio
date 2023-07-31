<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style and js/style.css">
    <style>
        .hr-lines{
  position: relative;
  max-width: 500px;
  margin: auto;
  text-align: center;
  
  
}

.hr-lines:before{
  content:" ";
  height: 3px;
  width: 130px;
  background:#2D371A;;
  display: block;
  position: absolute;
  top: 50%;
  left: 0;
}

.hr-lines:after{
  content:" ";
  height: 3px;
  min-width: 130px;
  background: #2D371A;
  display: block;
  position: absolute;
  top: 50%;
  right: 0;
}





    </style>
</head>
<body style="background-color: #A2C9DC;">

<?php 
include_once("./nav.php");
?>


<h1 class="  card-title " style=" text-align: center; margin-top: auto;margin-bottom:40px;font-size: 70px; background: -webkit-linear-gradient(#2D371A, #A2C9DC); -webkit-background-clip: text;-webkit-text-fill-color: transparent;">My Skills</h1>

<h2 class="hr-lines"> Front-end </h2>

<div class="row">
  <div class="col-sm">
    <div class="" >
      <div class="card-body"  >
        <img src="./img/html.png" alt="" style=" display: block;margin-left: auto;margin-right: auto;"  >
       </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="" >
      <div class="card-body"  >
        <img src="./img/css.png" alt="" style=" display: block;margin-left: auto;margin-right: auto;" >
        </div>
    </div>
  </div>
  <div class="col-sm">
    <div class="" >
      <div class="card-body"  >
        <img src="./img/js.png" alt="" style=" display: block;margin-left: auto;margin-right: auto;"  >
       </div>
    </div>
  </div>
  
</div>

<h2 class="hr-lines"> Back-end  </h2>

<div class="row">
  <div class="col-sm">
    <div class=""  >
      <div class="card-body"   >
        <img src="./img/php.png" alt="" style=" display: block;margin-left: auto;margin-right: auto;"   >
       </div>
    </div>
  </div>
  
  
</div>
<h2 class="hr-lines"> Database  </h2>

<div class="row" style="margin-bottom: 40px;" >
  <div class="col-sm">
    <div class=""  >
      <div class="card-body"    >
        <img src="./img/mysq.png" alt="" style=" display: block;margin-left: auto;margin-right: auto;width: 40%;"   >
       </div>
    </div>
  </div>
  
  
</div>
<h2 class="hr-lines"> Framework  </h2>

<div class="row" >
  <div class="col-sm">
    <div class=""  >
      <div class="card-body"    >
        <img src="./img/bootsrap.png" alt="" style=" display: block;margin-left: auto;margin-right: auto;"   >
       </div>
    </div>
  </div>
  
  
</div>

    




<script src="./style and js/javascript.js"></script>
</body>
</html>