<?php

declare(strict_types = 1);

namespace AvtoDev\RoadRunnerLaravel\Events;

use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;

final class BeforeLoopIterationEvent implements Contracts\WithApplication, Contracts\WithServerRequest
{
    /**
     * @var ApplicationContract
     */
    private $app;

    /**
     * @var ServerRequestInterface
     */
    private $request;

    /**
     * Create a new event instance.
     *
     * @param ApplicationContract    $app
     * @param ServerRequestInterface $request
     */
    public function __construct(ApplicationContract $app, ServerRequestInterface $request)
    {
        $this->app     = $app;
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    public function application(): ApplicationContract
    {
        return $this->app;
    }

    /**
     * {@inheritdoc}
     */
    public function serverRequest(): ServerRequestInterface
    {
        return $this->request;
    }
}
