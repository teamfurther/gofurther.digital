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
     * A list of the exception types that are not reported.
     *
     * @var array<object>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<string>
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception): Response
    {
        return parent::render($request, $exception);
    }

    /**
     * Render the given HttpException.
     *
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

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @throws \Exception
     */
    public function report(Throwable $exception): void
    {
        parent::report($exception);
    }

}
