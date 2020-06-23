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
     * @var array<string>
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * @var array<object>
     */
    protected $dontReport = [
        //
    ];

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception): Response
    {
        return parent::render($request, $exception);
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

    /**
     * @throws \Exception
     */
    public function report(Throwable $exception): void
    {
        parent::report($exception);
    }
}
