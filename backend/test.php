<?php

require 'register.php';

// addUser('pantswewe@steve.com', 'Steve', 'Moss', '+371 000 000 00', 'John Street 1-4', 'Riga', 'T n CO', 'Latvia', 'LV6667', true, false, true, true, false, true, true);

if(isset($_POST['october6']) && $_POST['october6'] == '1') 
{
    $october6 = "1";
}
else
{
    $october6 = "0";
}   

if(isset($_POST['october7']) && $_POST['october7'] == '1') 
{
    $october7 = "1";
}
else
{
    $october7 = "0";
}  

if(isset($_POST['october8']) && $_POST['october8'] == '1') 
{
    $october8 = "1";
}
else
{
    $october8 = "0";
}  

if(isset($_POST['october9']) && $_POST['october9'] == '1') 
{
    $october9 = "1";
}
else
{
    $october9 = "0";
}  

if(isset($_POST['october10']) && $_POST['october10'] == '1') 
{
    $october10 = "1";
}
else
{
    $october10 = "0";
}  

if(isset($_POST['msg_email']) && $_POST['msg_email'] == '1') 
{
    $msg_email = "1";
}
else
{
    $msg_email = "0";
}  

if(isset($_POST['msg_phone']) && $_POST['msg_phone'] == '1') 
{
    $msg_phone = "1";
}
else
{
    $msg_phone = "0";
}  


addUser($_POST['email'], $_POST['first_name'], $_POST['last_name'], $_POST['phone'], $_POST['address'], $_POST['town'], $_POST['organization'], $_POST['country'], $_POST['zip'], $october6, $october7, $october8, $october9, $october10, $msg_email, $msg_phone);