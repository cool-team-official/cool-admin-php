<?php

declare(strict_types=1);
/**
 * This file is part of CoolAdmin.
 */
return [
    Hyperf\ExceptionHandler\Listener\ErrorExceptionHandler::class,
    Hyperf\Command\Listener\FailToHandleListener::class,
];
