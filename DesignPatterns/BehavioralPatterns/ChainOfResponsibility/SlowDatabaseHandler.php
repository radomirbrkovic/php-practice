<?php

namespace BehavioralPatterns\ChainOfResponsibility;

use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler
{

    /**
     * @param RequestInterface $request
     * @return string|null
     */
    protected function processing(RequestInterface $request): ?string
    {
        return 'Hello World!';
    }
}