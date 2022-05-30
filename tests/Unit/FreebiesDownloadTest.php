<?php

namespace Tests\Unit;

use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Tests\TestCase;

class FreebiesDownloadTest extends TestCase
{
    /**
     * @var array<string>
     */
    private array $except = [
        'en/freebies',
        'hu/ingyenes-anyagok',
    ];

    private Router $router;
    private FilesystemManager $storage;

    /**
     * @var array<Route>
     */
    private array $routes;

    public function setUp(): void
    {
        parent::setUp();

        $this->router = $this->app->make(Router::class);
        $this->storage = $this->app->make(FilesystemManager::class);

        $allRoutes = $this->router->getRoutes()->getRoutesByName();

        $this->routes = array_intersect_key($allRoutes, array_flip(preg_grep('/freebies\./', array_keys($allRoutes))));
    }

    private function printReadableFileStatus(string $file, bool $exists): void
    {
        echo !$exists
            ? PHP_EOL . $file . ' (MISSING) ❌'
            : PHP_EOL . $file . ' (EXISTS) ✓';
    }

    public function testFreebieDownloadShouldReturnFileIfSuccess(): void
    {
        foreach ($this->routes as $route) {
            $url = $route->uri();

            if (in_array($url, $this->except)) {
                continue;
            }

            $freebie = $route->defaults['data']['freebie'];
            $exists = $this->storage->exists($freebie);

            $this->printReadableFileStatus($freebie, $exists);

            $this->assertTrue($exists);
        }
    }
}
