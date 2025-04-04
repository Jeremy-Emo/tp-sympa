<?php
declare(strict_types=1);

namespace src\Controller;

class ErrorController
{
    public function index(\Exception $e): string
    {
        return $e->getMessage();
    }
}