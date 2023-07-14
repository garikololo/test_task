<?php

namespace classes;

class User implements \UserInterface
{
    public static $users = [
        [
            'id' => 1,
            'firstName' => 'Ivan',
            'lastName' => 'Pupkin',
            'email' => 'test@gmail.com',
            'password' => '123123123',
        ],
        [
            'id' => 2,
            'firstName' => 'Ivan',
            'lastName' => 'Pupkin',
            'email' => 'test1@gmail.com',
            'password' => '123123123',
        ],
        [
            'id' => 3,
            'firstName' => 'Ivan',
            'lastName' => 'Pupkin',
            'email' => 'test2@gmail.com',
            'password' => '123123123',
        ],
        [
            'id' => 4,
            'firstName' => 'Ivan',
            'lastName' => 'Pupkin',
            'email' => 'test3@gmail.com',
            'password' => '123123123',
        ],
        [
            'id' => 5,
            'firstName' => 'Ivan',
            'lastName' => 'Pupkin',
            'email' => 'test4@gmail.com',
            'password' => '123123123',
        ]
    ];

    /**
     * add user
     * @param $data
     * @return array
     * @throws \Exception
     */
    public function addUser($data)
    {
        if (!array_push(self::$users, $data)) {
            return throw new \Exception('Помилка створення користувача');
        }

        return $data;
    }

    /**
     * check exists user
     * @param $email
     * @return false|string[]
     */
    public function checkExistsUser($email)
    {
        $key = array_search($email, array_column(self::$users, 'email'));

        if ($key === false) {
            return false;
        }

        return self::$users[$key];
    }
}