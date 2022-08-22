<?php

declare(strict_types=1);

namespace EinarHansen\Http\Exceptions;

use InvalidArgumentException;
use Psr\Http\Client\ClientExceptionInterface;

final class InvalidMethodException extends InvalidArgumentException implements ClientExceptionInterface
{
}
