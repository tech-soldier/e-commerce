<?php

use App\Watches;
use Illuminate\Http\Request;

// $watches = new Watches();

// $p = $watches->all();

if(!empty($_GET['s'])) {
    $p = $watches->getAllWatchesBySearch($_GET['s']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>Techwatch Home</title>
    <!-- Favicon  -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Hairline&family=Staatliches&display=swap" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <link rel="shortcut icon" href="{{ asset('icon.png') }}">

    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Style CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
