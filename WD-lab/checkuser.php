<?php
require_once 'function.php';
if($_POST)
{
    if(isset($_POST['user']))
    {
        $user=($_POST['user']);
        $query="SELECT * FROM Users WHERE username='$user'";
        $result=queryMysql($query);
        if(mysqli_num_rows($result)==0)
        {
            echo 'true';
        }
        else
        {
            echo 'false';
        }
    }
}
?>