<?php

namespace App\Controller;

use Cool\Request\SpaceRequest;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\PostMapping;

#[Controller('api/admin')]
class SpaceController extends AbstractController
{
    #[PostMapping(path: 'space/type')]
    public function type(SpaceRequest $request): array
    {
        $request->validated();


    }

    public function page()
    {

    }
}