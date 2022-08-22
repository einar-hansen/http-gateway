<?php

declare(strict_types=1);

namespace EinarHansen\Http\Exceptions;

use Exception;
use Psr\Http\Client\ClientExceptionInterface;

final class ValidationException extends Exception implements ClientExceptionInterface
{
    /**
     * Create a new exception instance.
     *
     * @param  array  $errors   The array of errors.
     * @return void
     */
    public function __construct(public array $errors = [])
    {
        parent::__construct('The given data failed to pass validation.');

        $this->errors = $errors;
    }

    /**
     * The array of errors.
     *
     * @return array
     */
    public function errors(): array
    {
        return $this->errors;
    }
}
