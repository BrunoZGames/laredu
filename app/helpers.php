<?php
if (!function_exists('idcookies')) {
    function idcookies()
    {
        $userDel = $_COOKIE['userDel'] ?? null;
        return $userDel;
    }
}



?>