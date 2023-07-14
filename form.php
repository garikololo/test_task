<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__.'/classes/ValidatorInterface.php';
require_once __DIR__.'/classes/UserInterface.php';
require_once __DIR__.'/classes/Validator.php';
require_once __DIR__.'/classes/User.php';
require_once __DIR__.'/classes/Log.php';

if (!empty($_POST)) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) &&
        !empty($_POST['password']) && !empty($_POST['password_repeat'])) {

        try
        {
            $validator = new \classes\Validator();

            if ($validator->validateEmail($_POST['email']) &&
                $validator->validatePassword($_POST['password'], $_POST['password_repeat'])) {

                $user = new \classes\User();

                unset($_POST['password_repeat']);
                $data = $_POST;

                if (!$user->checkExistsUser($_POST['email'])) {
                    if($user->addUser($data)) {
                        echo json_encode(['status' => true, 'message' => 'Користувача успішно зареєстровано']);
                        exit;
                    }
                } else {
                    \classes\Log::addLog('Користувач існує: '.print_r($_POST, true));
                    echo json_encode(['status' => false, 'message' => 'Користувач існує']);
                    exit;
                }
            }
        } catch (\Exception $exception) {
            echo json_encode(['status' => false, 'message' => $exception->getMessage()]);
            exit;
        }

    }
}

exit;