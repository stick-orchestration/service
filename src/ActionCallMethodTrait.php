<?php

namespace Stick\Service;

trait ActionCallMethodTrait
{
    /**
     * @param string $action
     * @param array ...$args
     * @return mixed
     */
    public function executeAction(string $action, ...$args) {
        return $this->{$action}(...$args);
    }
}
