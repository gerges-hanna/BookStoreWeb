<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host="127.0.0.1";
        $user="root";
        $password="";
        $database="book_shop";

        $connect =  mysqli_connect($host, $user, $password, $database);

        if(mysqli_connect_errno())
        {
            die("Cannot Connect To DataBase:".  mysqli_connect_error());
        }  else {
            echo 'Connected';
        }
        ?>
    </body>
</html>
