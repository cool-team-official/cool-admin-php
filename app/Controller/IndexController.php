<?php

declare(strict_types=1);
/**
 * This file is part of CoolAdmin.
 */

namespace App\Controller;

class IndexController extends AbstractController
{
    public function index(): array
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
