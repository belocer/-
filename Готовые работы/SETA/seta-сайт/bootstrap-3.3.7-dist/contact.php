<?php session_start (); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SETA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
  <!--*******************НАВ МЕНЮ**********************-->
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="media/setaRed.jpg" alt="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="prise.php">ПРАЙС<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="contact.php">КОНТАКТЫ</a></li>
       </ul>
      <form class="navbar-form navbar-left">
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
   
     <!--*******************БОЛК ПО ЦЕНТРУ**********************-->
 <div class="jumbotron" id="centerM">
  <div class="centrImg">
  	<h3>Региональный менеджер <br>
  	по оптовым продажам:</h3>
  	Кипреев Станислав Владимирович <br><br>
  	<img src="https://public.superjob.ru/images/resume_fotos/084/60/9808460.medium_4d57c2c1bfd9e04c6a09e0253b9df7be.jpg" alt="">
  </div><br><br>
  <p>
 тел: 8-952-851-51-29<br>
 тел: 8-961-175-30-20</p>
 e-mail: kipreew@mail.ru <br>
 Skype: kipreewsw <br>
 WhatsApp: 8-961-175-30-20 <br><br><br>
 <form action="inspect.php" method="GET">
 	<span style="color: #52A15F">Оставьте свои контакты, мы Вам перезвоним.</span> <br><br>
 	Как к Вам обращатся:<br>
 	<input type="text" name="fio"><br><br>
 	Ваш e-mail: <br>
 	<input type="email" name="email"><br><br>
 	Ваш телефон: <br>
 	<input type="text" name="telefon"><br><br>
 	<input type="submit" value="ОТПРАВИТЬ">
</form>
</div>  
 <br><br><br>  
   
   
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>