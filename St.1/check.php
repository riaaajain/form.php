<?php

if(isset($_COOKIE['name'])){
    echo 'Name: ' . $_COOKIE['name'] . '<br>';
}

if(isset($_COOKIE['email'])){
    echo 'Email : ' . $_COOKIE['email'] . '<br>';
}
if(isset($_COOKIE['phone'])){
    echo 'phone : ' . $_COOKIE['phone'] . '<br>';
}
if(isset($_COOKIE['state'])){
    echo 'State: ' . $_COOKIE['state'] . '<br>';
}

if(isset($_COOKIE['city'])){
    echo 'City: ' . $_COOKIE['city'] . '<br>';
}
if(isset($_COOKIE['about'])){
    echo 'about: ' . $_COOKIE['about'] . '<br>';
}
?>