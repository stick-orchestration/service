<?php

namespace Stick\Service\Entities\MySQL;

use Stick\Service\BaseEntity;
use Stick\Service\GrantMetadataTrait;

/**
 * Class AccesGrant
 * @package Stick\Service\Entities\MySQL
 */
class MySQLGrant extends BaseEntity implements MySQLAccessGrantInterface, \ArrayAccess
{
    use GrantMetadataTrait;

    /**
     * @return string
     */
    public function getDatabase() : string
    {
       return $this->data['database'];
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->data['password'];
    }

    /**
     * @return string
     */
    public function getServer() : string
    {
        return $this->data['server'];
    }

    /**
     * @return string
     */
    public function getUser() : string
    {
        return $this->data['user'];
    }

    /**
     * @param string $password
     */
    public function resetPassword(string $password)
    {
        $this->metadata['supplicant']->setPassword($data['user'], $password);
        $this->data['password'] = $password;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->data[$offset];
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        throw new \Exception("Access not allowed!");
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        throw new \Exception("Access not allowed!");
    }
}
