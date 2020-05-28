<?php

        function dbConnect(){
            $conexao= mysqli_connect("localhost","root","","minisite") or die (mysql_connect_error());

            return $conexao;
        }
  

?>