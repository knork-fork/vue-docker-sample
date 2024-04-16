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

    public function api_response_2(): void
    {
        echo json_encode([
            ['id' => 0, 'user' => 'user_1', 'message' => 'Hi, there!'],
            ['id' => 1, 'user' => 'user_2', 'message' => 'Hello, how are you?'],
            ['id' => 2, 'user' => 'user_1', 'message' => 'I am fine, thank you!'],
        ]);
    }
}