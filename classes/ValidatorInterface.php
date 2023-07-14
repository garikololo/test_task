<?php
namespace classes;
interface ValidatorInterface
{
    public function validateEmail($email);
    public function validatePassword($password, $repeat_password);


}