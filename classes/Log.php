<?php

namespace classes;

class Log
{
    public static function addLog($message)
    {
        file_put_contents('./logs/log_'.date("j.n.Y").'.log', $message, FILE_APPEND);
    }
}