<?php

namespace HtmlAcademy;

use Exception;

require_once '../vendor/autoload.php';

class UndefinedActionException extends Exception
{
    protected $message = 'Такого действия нету';
}
