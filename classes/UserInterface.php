<?php

interface UserInterface
{
    public function checkExistsUser($email);

    public function addUser($data);

}
