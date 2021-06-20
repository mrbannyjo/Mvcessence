<?php

namespace EssenceList;

class AuthManager
{
    /**
     * @param string $hash
     */
    public function logIn(string $hash)
    {
        setcookie("hash", $hash, time() + 3600 * 24 * 365 * 10, "/", null, false, true);
    }

    public function checkIfIsAuthorized()
    {
        return isset($_COOKIE["hash"]) ? true : false;
    }
}