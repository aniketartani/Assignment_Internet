<?php
$con=new mysqli('localhost','root','','res');
if(!$con)
{
    echo "database is not connected";
}