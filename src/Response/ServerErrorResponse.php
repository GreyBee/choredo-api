<?php

declare(strict_types=1);

namespace Choredo\Response;

use Zend\Diactoros\Response\JsonResponse;

class ServerErrorResponse extends JsonResponse
{
    public function __construct(array $errors)
    {
        parent::__construct(
            ['errors' => $errors],
            500
        );
    }
}
