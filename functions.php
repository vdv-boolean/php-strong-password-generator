<?php

    # Error message
    $error_message = 'Nessun parametro valido inserito';

    # Number of password character
    $length = $_GET['length'];

    # Function for generate random password
    // function generatePassword($length) {
    //     return substr(str_shuffle(str_repeat($all_character='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($all_character)) )),1,$length);
    // }

    # Checkbox status
    $nocaps_status = isset($_GET['no-caps']);
    $caps_status = isset($_GET['caps']);
    $caps_status = isset($_GET['caps']);
    $numbers_status = isset($_GET['numbers']);
    $symbols_status = isset($_GET['symbols']);

    # Function for generate advanced random password
    function generateAdvancedPassword($length, $nocaps_status, $caps_status, $numbers_status, $symbols_status) {
        if ($nocaps_status) {
            $nocaps_character = 'abcdefghijklmnopqrstuvwxyz';
        } else {
            $nocaps_character = '';
        }
        if ($caps_status) {
            $caps_character = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } else {
            $caps_character = '';
        }
        if ($numbers_status) {
            $number_character = '0123456789';
        } else {
            $number_character = '';
        }
        if ($symbols_status) {
            $symbol_character = '!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
        } else {
            $symbol_character = '';
        }
        return substr(str_shuffle(str_repeat($merge_character=$caps_character . $number_character . $symbol_character . $nocaps_character, ceil($length/strlen($merge_character)) )),1,$length);
    }   