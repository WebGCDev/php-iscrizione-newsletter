<?php

if (empty($_GET['mail'])) {
    $joinmail = '';
} else {
    if (isset($_GET['mail'])) {
        $newmail = $_GET['mail'];
        if (str_contains($newmail, '@') && str_contains($newmail, '.')) {
            $joinmail = 'Indirizzo e-mail inserito è corretto';
        } else {
            $joinmail = 'Indirizzo e-mail inserito non è corretto, deve contenere entrambi i caratteri "@" e "."';
        }
    }
}
