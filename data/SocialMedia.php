<?php

class SocialMedia
{
    public string $name;
}

// final +
class Instagram extends SocialMedia
{
    // final +
    public function login(string $username, string $password)
    {
        return true;
    }
}

// error
class Faceook extends Instagram
{
    public function login(string $username, string $password)
    {
        return false;
    }
}