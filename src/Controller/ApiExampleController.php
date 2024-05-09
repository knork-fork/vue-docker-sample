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

    public function api_response_folders(): void
    {
        echo json_encode([
            ['id' => 0, 'name' => 'Folder 1', 'icon' => 'folder'],
            ['id' => 1, 'name' => 'Folder 2', 'icon' => 'folder'],
            ['id' => 2, 'name' => 'Folder 3', 'icon' => 'folder'],
            ['id' => 3, 'name' => 'Folder 4', 'icon' => 'folder'],
            ['id' => 4, 'name' => 'Folder 5', 'icon' => 'folder'],
        ]);
    }

    public function api_response_channels(): void
    {
        echo json_encode([
            ['id' => 0, 'name' => 'Channel 1', 'folder_id' => 0],
            ['id' => 1, 'name' => 'Channel 2', 'folder_id' => 0],
            ['id' => 2, 'name' => 'Channel 3', 'folder_id' => 0],
            ['id' => 3, 'name' => 'Channel 4', 'folder_id' => 1],
            ['id' => 4, 'name' => 'Channel 5', 'folder_id' => 2],
        ]);
    }

    public function api_response_messages(): void
    {
        echo json_encode([
            ['id' => 0, 'author' => 'user_1', 'content' => 'Hello world', 'channel_id' => 0],
            ['id' => 1, 'author' => 'user_2', 'content' => 'Hi, there!', 'channel_id' => 0],
            ['id' => 2, 'author' => 'user_1', 'content' => 'How are you?', 'channel_id' => 1],
            ['id' => 3, 'author' => 'user_2', 'content' => 'I am fine, thank you!', 'channel_id' => 1],
            ['id' => 4, 'author' => 'user_1', 'content' => 'Good to hear that!', 'channel_id' => 1],
        ]);
    }
}