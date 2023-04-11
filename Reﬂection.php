<?php

require_once "helper/ValidationUtil.php";
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";

$request = new LoginRequest();
$request->username = "Eunha";
$request->password = "Eva";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public string $name;
    public string $address;
    public string $email;
}

$register = new RegisterUserRequest();
$register->name = "Eunha";
$register->address = "Busan";
$register->email ="eunha@gmail.com";

ValidationUtil::validateReflection($register);
