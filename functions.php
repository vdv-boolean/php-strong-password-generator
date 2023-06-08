<?php

    # Number of password character
    $length = $_GET['length'];

    # Function for generate random password
    function generatePassword($length) {
        return substr(str_shuffle(str_repeat($all_character='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($all_character)) )),1,$length);
    }