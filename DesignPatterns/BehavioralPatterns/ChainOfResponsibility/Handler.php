<?php

namespace BehavioralPatterns\ChainOfResponsibility;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    /**
     * @param Handler|null $successor
     */
    public function __construct(private ?Handler $successor = null)
    {
    }

    /**
     * @param RequestInterface $request
     * @return string|null
     */
    abstract protected function processing(RequestInterface $request): ?string;

    /**
     * @param RequestInterface $request
     * @return string|null
     */
    final public function handle(RequestInterface $request): ?string
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }
}