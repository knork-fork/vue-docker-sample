<?php

namespace App\System;

use App\Controller\ApiExampleController;
use App\Controller\TestController;
use App\Exception\NotFoundException;

class PrimitiveRoutes
{
    /**
     * @return Route[]
     */
    private static function getRoutes(): array
    {
        return [
            '/test' => new Route(TestController::class, 'test'),
            '/api_1' => new Route(ApiExampleController::class, 'api_response_1'),
        ];
    }

    public static function invokeRoute(string $route): void
    {
        $routes = self::getRoutes();
        if (!isset($routes[$route])) {
            throw new NotFoundException();
        }
        $routes[$route]->runMethod();
    }
    
}
