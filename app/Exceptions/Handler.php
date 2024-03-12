<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Response;
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

    public function render($request, mixed $exception)
    {
        $statusCode = (int) $exception->getStatusCode();
        switch ($statusCode) {
            case Response::HTTP_NOT_FOUND:
                return response()->view('errors.not-found', [], Response::HTTP_NOT_FOUND);
                // default:
                // return response()->view('errors.500.page', [], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
