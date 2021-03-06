<?php

declare(strict_types = 1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\HealthCheck;


use CodelyTv\Shared\Infrastructure\RandomNumberGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HealthCheckGetController
{
    private $generator;

    public function __construct(RandomNumberGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function __invoke(Request $request): Response
    {
        return new JsonResponse([
            'status' => 'ok',
            'number' => $this->generator->generate()
        ]);
    }
}