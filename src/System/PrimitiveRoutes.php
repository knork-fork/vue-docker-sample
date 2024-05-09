<?php

namespace App\System;

use App\Controller\ApiExampleController;
use App\Controller\TestController;
use App\Exception\NotFoundException;

class PrimitiveRoutes
{
    const API_PREFIX = '/api';

    /**
     * @return Route[]
     */
    private static function getRoutes(): array
    {
        return [
            '/test' => new Route(TestController::class, 'test'),
            '/api_1' => new Route(ApiExampleController::class, 'api_response_1'),
            '/api_2' => new Route(ApiExampleController::class, 'api_response_2'),
            '/folders' => new Route(ApiExampleController::class, 'api_response_folders'),
            '/channels' => new Route(ApiExampleController::class, 'api_response_channels'),
            '/messages' => new Route(ApiExampleController::class, 'api_response_messages'),
        ];
    }

    private static function stripPrefix(string $route): string
    {
        if (strpos($route, self::API_PREFIX) === 0) {
            return substr($route, strlen(self::API_PREFIX));
        } else {
            return $route;
        }
    }

    public static function invokeRoute(string $route): void
    {
        $route = self::stripPrefix($route);
        $routes = self::getRoutes();
        if (!isset($routes[$route])) {
            throw new NotFoundException();
        }
        $routes[$route]->runMethod();
    }
    
}
