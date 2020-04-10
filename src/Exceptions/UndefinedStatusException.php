<?php

namespace HtmlAcademy\Exceptions;

use Exception;

require_once './vendor/autoload.php';

class UndefinedStatusException extends Exception
{
    protected $message = 'Такого статуса нету';
}
