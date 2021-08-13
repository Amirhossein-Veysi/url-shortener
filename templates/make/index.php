<?php

// Include database configuration file
require_once 'dbConfig.php';

// Include URL Shortener library file
require_once 'Shortener.class.php';

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($db);

// Long URL
$longURL = $_POST['url'];

// Prefix of the short URL 
$shortURL_Prefix = 'http://localhost/url-shortener-hackathon/templates/make/'; // without URL rewrite

try{
    // Get short code of the URL
    $shortCode = $shortener->urlToShortCode($longURL);
    
    // Create short URL
    $shortURL = $shortURL_Prefix.$shortCode;
    
    // Display short URL
    echo $shortURL;
}catch(Exception $e){
    // Display error
    echo 'Something went wrong! here is the error: ' . $e->getMessage();
}

?>