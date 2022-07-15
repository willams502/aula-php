<?php
    
    $pagina= ['home' =>'Minha Página em php', 'sobre' => 'Estou na pagina sobre', 'contato'=>''];  //ao colocar => na variavel ela define a variavel com o nome//
    $pagina=['contato'=>'<form><input type="text" placeholder= "Seu nome..."/></form>']; // eu posso repetir a variavel para definir ela em uma outra linha//

?>

<!DOCTYPE html>
<html>
    <head>
       <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header{
            background-color: black;
            padding: 8px 10px ;
            text-align: center;
        }

        a{
            display: inline-block;
            margin: 0 10px;
            color: aliceblue;
            font-size: 17px;
        }
       </style>
        <title>Primeiro site PHP</title>
    </head>
    <body>
        <?php
            echo'home';
        ?>
    </body>
</html>