<?php


namespace App\Api\V1\Exceptions;


class HttpException extends \Symfony\Component\HttpKernel\Exception\HttpException
{
  public function __construct($message, $statusCode = 422) {
    parent::__construct($statusCode, $message);
  }
}
