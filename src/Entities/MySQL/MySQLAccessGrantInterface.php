<?php

namespace Stick\Service\Entities\MySQL;

use Stick\Service\AccessGrant;

/**
 * Interface MySQLAccessor
 * @package Stick\Service\Entities\MySQL
 */
interface MySQLAccessGrantInterface extends AccessGrant
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
