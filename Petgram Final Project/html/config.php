<?php
   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'cadastro-clientes';

   $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   if($conexao ->connect_error)
    {
   echo "Erro";
    }
   else{
    echo "Conexão efetuada com sucesso";
    }
 
?>