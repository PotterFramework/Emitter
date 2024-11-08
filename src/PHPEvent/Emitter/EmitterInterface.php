<?php

declare(strict_types=1);

namespace PHPEvent\Emitter;

use Potter\Event\Dispatcher\DispatcherInterface;
    PHPAbles\Cloneable\CloneableInterface;

interface EmitterInterface extends CloneableInterface
{
    public function getDispatcher(): DispatcherInterface;
    public function withDispatcher(DispatcherInterface $dispatcher): static;
}
