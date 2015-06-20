<?php

    #Sounds and url(source) address
    $appUrl = "http://9860deda.ngrok.io/odev3/"; //Source
    $soundWelcome = $appUrl."sounds/welcome.mp3"; //Welcome massage sound address
    $soundDecralation = $appUrl."sounds/decralation_question.mp3"; //Decralation massage sound address
    $soundWrongKey = $appUrl."sounds/wrong_keying.mp3"; //Wrong keying massage sound address
    $soundClosing = $appUrl."sounds/closing.mp3"; //Closing massage sound address


    #Database info
    $value = explode("/",$appUrl); //Server name
    switch($_SERVER['SERVER_NAME']){
        case $value[2]:
            #Production
            $servername = "localhost"; //Server name
            $dbname = "notifications"; //DataBase name
            $username = "root"; //User name
            $password = ""; //Password
            break;

        case "localhost":
            #Developer
            $servername = "localhost";
            $dbname = "dbname";
            $username = "user";
            $password = "pass";
            break;

        default:
            #Other
            $servername = "example.com";
            $dbname = "example";
            $username = "user";
            $password = "pass";
            break;

    }

