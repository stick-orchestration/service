<?php

namespace Stick\Service\Entities\MySQL;

use Stick\Service\GrantInterface;

/**
 * Interface MySQLAccessor
 * @package Stick\Service\Entities\MySQL
 */
interface MySQLGrantInterfaceInterface extends GrantInterface
{
    /**
     * @return string
     */
    public function getDatabase(): string;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @return string
     */
    public function getServer(): string;

    /**
     * @return string
     */
    public function getUser(): string;

    /**
     * @param string $password
     * @return mixed
     */
    public function resetPassword(string $password);
}
