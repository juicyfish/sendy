<?php
    //----------------------------------------------------------------------------------//
    //                               COMPULSORY SETTINGS
    //----------------------------------------------------------------------------------//

    /*  Set the URL to your Sendy installation (without the trailing slash) */
    define('APP_PATH', 'https://sendy.plastarc.com');

    /*  MySQL database connection credentials (please place values between the apostrophes) */
    $dbHost = 'localhost'; //MySQL Hostname
    $dbUser = 'forge'; //MySQL Username
    $dbPass = 'IfFkH298VXb528ftaeuT'; //MySQL Password
    $dbName = 'moveandshake'; //MySQL Database Name


    // $dbHost = 'localhost'; //MySQL Hostname
    // $dbUser = 'root'; //MySQL Username
    // $dbPass = 'imadethis'; //MySQL Password
    // $dbName = 'dev_sendy'; //MySQL Database Name

    //----------------------------------------------------------------------------------//
    //								  OPTIONAL SETTINGS
    //----------------------------------------------------------------------------------//

    /*
        Change the database character set to something that supports the language you'll
        be using. Example, set this to utf16 if you use Chinese or Vietnamese characters
    */
    $charset = 'utf8mb4';

    /*  Set this if you use a non standard MySQL port.  */
    $dbPort = 3306;

    /*  Domain of cookie (99.99% chance you don't need to edit this at all)  */
    define('COOKIE_DOMAIN', '');
    
