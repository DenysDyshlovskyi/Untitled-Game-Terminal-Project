<?php
session_start();

require "./php_scripts/conn.php";
require "./php_scripts/get_loggedin_info.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub - User settings</title>
    <link rel="icon" type=".image/x-icon" href="./img/favicon.png">
    <link rel="icon" type=".image/x-icon" href="./img/favicon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style> <?php include "./css/universal.css" ?> </style>
    <style> <?php include "./css/user-settings-page.css" ?> </style>
</head>
<body id="settings-body" onload="ajaxGet('./spa/user_settings/myaccount.php', 'settings-spa-container')">
    <div id="settings-dark-container" class="settings-dark-container">
    </div>
    <div class="settings-confirmation-popup" id="confirmContainer"></div>
    <div class="settings-container">
        <button class="settings-backtohub" title="Back to Hub" onclick="window.location.href = 'hub.php';">Back to Hub</button>
        <div class="settings-sidebar">
            <p class="settings-sidebar-headline">Profile settings</p>
            <button class="settings-sidebar-button" id="myaccount-button" onclick="ajaxGet('./spa/user_settings/myaccount.php', 'settings-spa-container')">My Account</button>
            <button class="settings-sidebar-button" id="changeborder-button" onclick="ajaxGet('./spa/user_settings/change_border.php', 'settings-spa-container')">Change border</button>
            <p class="settings-sidebar-headline">General settings</p>
            <button class="settings-sidebar-button" id="audiomusic-button" onclick="ajaxGet('./spa/user_settings/audio_music.php', 'settings-spa-container')">Audio and Music</button>
            <p class="settings-sidebar-headline">Miscellaneous settings</p>
            <button class="settings-sidebar-button" id="devcode-button" onclick="ajaxGet('./spa/user_settings/dev_codes.php', 'settings-spa-container')">Dev Codes</button>
        </div>
        <div class="settings-spa-container" id="settings-spa-container">
        </div>
    </div>
    <!-- div to target with jQuery when nothing should be displayed -->
    <div id="reload-div"></div>
    <audio autoplay loop style="display: none;">
        <source src="audio/OldJazzOST.mp3" type="audio/mpeg">
    </audio>
    <script><?php include "./js/script.js" ?></script>
</body>
</html>