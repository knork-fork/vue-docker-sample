<?php declare(strict_types=1);

namespace App\Controller;

class ApiExampleController
{
    public function api_response_1(): void
    {
        echo json_encode([
            'message' => 'Hello, World!',
            'type' => 'json',
            'source' => 'ApiExampleController::api_response_1()',
        ]);
    }
}