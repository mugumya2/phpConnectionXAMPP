
<!DOCTYPE html5>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>connection to php</title>

       
    </head>
    <body>
        <?php
        $server_name="localhost";
        $user_name="root";
        $password="";
        $database="dailySales";

        $connection =new mysqli($server_name,$user_name,$password,$database);

        if($connection-> connect_error){
            die("Unableto connect".$connect->connection_error);
        }
        echo "Database connection successful";
        ?>


    </body>
</html>
