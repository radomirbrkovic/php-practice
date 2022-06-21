<?php

namespace BehavioralPatterns\ChainOfResponsibility;

use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    /**
     * @param array $data
     * @param Handler|null $successor
     */
    public function __construct(private array $data, ?Handler $successor = null)
    {
        parent::__construct($successor);
    }

    /**
     * @param RequestInterface $request
     * @return string|null
     */
    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}