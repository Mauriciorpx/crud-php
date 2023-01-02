<?php 
    function conectar(){
        $host="localhost";
        $user="root";
        $pass="";

        $bd="mrp-crud";

        /* Encuentra BBDD */
        $con=mysqli_connect($host,$user,$pass);
        /* Conecta a una BD especifica */
        mysqli_select_db($con,$bd);

        return $con;
    }


?>