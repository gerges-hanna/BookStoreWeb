<?php



class DBMangement {
    //put your code here
    
    function ConnectStart()
    {
        $host="127.0.0.1";
        $user="root";
        $password="";
        $database="book_shop";

        $connect =  mysqli_connect($host, $user, $password, $database);
        //mysql_close($connect);

        if(mysqli_connect_errno())
        {
            die("Cannot Connect To DataBase:".  mysqli_connect_error());
        }  else {
            echo 'Connected';
        }
    }
    
   
}

