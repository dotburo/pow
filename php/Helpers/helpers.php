<?php

if (!function_exists('obfuscateEmail')) {
    /**
     * Obfuscate email addresses, requires associated javascript to unveil them
     *
     * @todo Replace this with your own obfuscation algorithm
     * @param string $email
     * @return string
     */
    function obfuscateEmail(string $email)
    {
        return $email;
    }
}