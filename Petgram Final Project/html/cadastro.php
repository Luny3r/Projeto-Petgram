<?php
  session_start();
  include_once("config.php");
  if(isset($_POST['button']))
  {
   // print_r('Nome: ' . $_POST['Nome']);
   // print_r('<br>');
   // print_r('Email: ' . $_POST['Email']);
   // print_r('<br>');
   // print_r('Senha: ' . $_POST['Senha']);
   
   $Nome = $_POST['Nome'];
   $Email =$_POST['Email'];
   $Senha = $_POST['Senha'];

   $result = mysqli_query($conexao, "INSERT INTO usuários(Nome,Email,Senha) VALUES ('$Nome','$Email','$Senha')"); 
  }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:\xampp\htdocs\Petgram Final Project\css\cadatro.css">
    <title>Cadastro de cliente</title>
</head>
<body>
    <nav>
        <div class="logo">
             <span>
                 PET
                 <i class="fa fa-paw"></i>
                 GRAM
             </span>
        </div>
        <ul class="options">
             <li><a href="Home.html">Home</a></li>
             <li><a href="Agendar.html">Agendar</a></li>
             <li><a href="https://chat.whatsapp.com/Irbqb8w1bMX2Ldn0IZLP5m">Contato</a></li>
        </ul>
        <div class="user">
             <a href="../html/login.html">Login</a>
             <p> | </p>
             <a href="../html/cadastro.html">Cadastrar</a>
        </div>
        <div class="hamburguer" onclick="menuMobile()">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
     </nav>
     <div class="container">
         <i class="paw fa fa-paw"></i>
         <div class="wrapper">
             <div class="top">
                 <span>PET</span>
                 <span>GRAM</span>
             </div>
             <div class="bottom">
                 <div class="triangle"></div>
                 <form>
                     <div class="profilePic">
                         <i class="fa fa-user"></i>
                         <div class="circle">
                             <i class="fa fa-camera-retro"></i>
                         </div>
                     </div>
    <div CLASS="box">
        <form action="config.php" method="post"> 


            <fieldset>
                <legend><b> Cadastro de Clientes </b></legend>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="Nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="Email" id="Email" class="inputUser" required>
                    <label for="nome" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="Senha" id="Senha" class="inputUser" required>
                    <label for="nome" class="labelInput">Senha</label>
                </div>
                <br><br>
              <input type="submit" name="button" id="submit" href=''>
                <script src="C:\xampp\htdocs\Petgram Final Project\js\Script.js"></script>
                <script>function myfunction(){
                alert("Envio feito com sucesso!")
                }</script>
            </fieldset>
        </form>
    </div>
</body>
</html>