<?php

session_start();

// if(isset($_SESSION['name'])){
//     echo 'My name is ' . $_SESSION['name'];
// }

unset($_SESSION['name']);
echo 'session key is destroyed';

// session_destroy();
?>