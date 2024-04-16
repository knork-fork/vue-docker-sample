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
