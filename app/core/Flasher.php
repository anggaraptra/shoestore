<?php

class Flasher
{
    public static function setFlash($message)
    {
        $_SESSION['flash'] = [
            'message' => $message,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo $_SESSION["flash"]["message"];
            unset($_SESSION['flash']);
        }
    }
}
