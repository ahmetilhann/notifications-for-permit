<?php

    #Sounds and url(source) address
    $appUrl = "http://811ec473.ngrok.io/odev3/"; //Source
    $soundWelcome = "sounds/welcome.mp3"; //Welcome massage sound address
    $soundDecralation = "sounds/decralation_question.mp3"; //Decralation massage sound address
    $soundWrongKey = "sounds/wrong_keying.mp3"; //Wrong keying massage sound address
    $soundClosing = "sounds/closing.mp3"; //Closing massage sound address


    #Database info
    $value = explode("/",$appUrl); //Server name
    if($_SERVER['SERVER_NAME'] == $value[2]) {
        #Production
        $servername = "localhost"; //Server name
        $dbname = "notifications"; //DataBase name
        $username = "root"; //User name
        $password = ""; //Password
    }else if ($_SERVER['SERVER_NAME'] == "localhost"){
        #Developer
        $servername = "localhost";
        $dbname = "dbname";
        $username = "user";
        $password = "pass";
    }else {
        #Other
        $servername = "example.com";
        $dbname = "example";
        $username = "user";
        $password = "pass";
    }

