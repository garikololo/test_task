<?php

namespace classes;

class Validator implements ValidatorInterface
{
    /**
     * validate email
     * @param $email
     * @return true
     * @throws \Exception
     */
    public function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return throw new \Exception('Пошта не валідна');
        }

        return true;
    }

    /**
     * validate password
     * @param $password
     * @param $repeat_password
     * @return true
     * @throws \Exception
     */
    public function validatePassword($password, $repeat_password)
    {
        if (mb_strlen($password) < 6) {
            return throw new \Exception('Мінімальна довжина паролю - 6  символів');
        }

        if ($password !== $repeat_password) {
            return throw new \Exception('Паролі не співпадають');
        }

        return true;
    }
}