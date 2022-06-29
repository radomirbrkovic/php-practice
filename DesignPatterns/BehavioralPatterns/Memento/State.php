<?php

namespace BehavioralPatterns\Memento;

use InvalidArgumentException;

class State implements \Stringable
{

    public const STATE_CREATED = 'created';
    public const STATE_OPENED = 'opened';
    public const STATE_ASSIGNED = 'assigned';
    public const STATE_CLOSED = 'closed';

    /**
     * @var string
     */
    private string $state;

    /**
     * @var string[]
     */
    private static array $validStates = [
        self::STATE_CREATED,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED,
    ];

    /**
     * @param string $state
     */
    public function __construct(string $state)
    {
        self::ensureIsValidState($state);

        $this->state = $state;
    }

    /**
     * @param string $state
     * @return void
     */
    private static function ensureIsValidState(string $state): void
    {
        if (!in_array($state, self::$validStates)) {
            throw new InvalidArgumentException('Invalid state given');
        }
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->state;
    }
}