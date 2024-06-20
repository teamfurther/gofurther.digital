<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\ViewErrorBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * @return \Illuminate\Http\Response|Response
     */
    protected function renderHttpException(HttpExceptionInterface $exception)
    {
        $prefix = mb_substr(request()->path(), 0, 2);
        if ($prefix && in_array($prefix, config('app.locales'))) {
            $prefix = trim($prefix, '/');
            app()->setLocale($prefix);
        }

        $this->registerErrorViewPaths();
        $view = getLang() . ".errors.{$exception->getStatusCode()}";

        if (view()->exists($view)) {
            return response()->view($view, [
                'errors' => new ViewErrorBag(),
                'exception' => $exception,
            ], $exception->getStatusCode(), $exception->getHeaders());
        }

        return $this->convertExceptionToResponse($exception);
    }
}
