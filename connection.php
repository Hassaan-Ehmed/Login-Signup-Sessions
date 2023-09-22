<?php


$connection =  mysqli_connect("localhost","root","","clstask");


if(!$connection){

echo "connection failed !";

}else{
    echo "connection successfull !";
}

?>