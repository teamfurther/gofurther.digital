<?php

namespace Tests\Unit;

use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * @var array<string>
     */
    private array $except = [
        '/',
        '_ignition/health-check',
        'cover/generate',
        'en/careers',
        'en/careers/{slug}',
        'en/freebies',
        'en/solutions/{any}',
        'hu/ingyenes-anyagok',
        'hu/megoldasaink/{any}',
    ];

    /**
     * @var array<string>
     */
    private array $parameters = [
        'en/blog/posts/{slug}' => [
            'slug' => 'custom-development-vs-out-of-the-box-software',
        ],
        'en/blog/tagged/{slug}' => [
            'slug' => 'digital-transformation',
        ],
        'en/newsletter/{year}/{issue}' => [
            'year' => '2020',
            'issue' => 'no1',
        ],
        'en/projects/{slug}' => [
            'slug' => 'njoy-the-hive',
        ],
        'hu/blog/cikkek/{slug}' => [
            'slug' => 'egyedi-fejlesztes-vagy-dobozos-szoftver',
        ],
        'hu/blog/cimkek/{slug}' => [
            'slug' => 'digitalis-transzformacio',
        ],
        'hu/hirlevel/{year}/{issue}' => [
            'year' => '2020',
            'issue' => 'no1',
        ],
        'hu/projektek/{slug}' => [
            'slug' => 'njoy-the-hive',
        ],
    ];

    private Router $router;

    /**
     * @var array<Route>
     */
    private array $routes;

    public function setUp(): void
    {
        parent::setUp();

        $this->router = $this->app->make(Router::class);

        $this->routes = $this->router->getRoutes()->getRoutesByMethod()['GET'];
    }

    private function getExpectedStatus(Route $route): int
    {
        if (
            isset($route->action['controller'])
            && $route->action['controller'] === '\Illuminate\Routing\RedirectController'
        ) {
            return $route->defaults['status'];
        }

        return 200;
    }

    private function getResponseStatus(Route $route): int
    {
        $params = $route->parameterNames();
        $url = $route->uri();

        if ($params && count($params) > 0) {
            return $this->get(route($route->getName(), $this->parameters[$url]))->getStatusCode();
        }

        return $this->get($url)->getStatusCode();
    }

    private function printReadableUrlStatus(string $url, int $responseStatus, int $expectedStatus): void
    {
        echo $responseStatus !== $expectedStatus
            ? PHP_EOL . $url . ' (FAILED) ❌ with status ' . $responseStatus . ' (' . $expectedStatus . ' expected)'
            : PHP_EOL . $url . ' (SUCCESS) ✓ with status ' . $responseStatus;
    }

    public function testRoutesShouldReturn200(): void
    {
        foreach ($this->routes as $route) {
            $url = $route->uri();

            if (in_array($url, $this->except)) {
                continue;
            }

            $expectedStatus = $this->getExpectedStatus($route);
            $responseStatus = $this->getResponseStatus($route);

            $this->printReadableUrlStatus($url, $responseStatus, $expectedStatus);

            $this->assertTrue($responseStatus === $expectedStatus);
        }
    }
}
