<?php

namespace Stick\Service\Entities\MySQL;

use Stick\Service\AccessGrant;
use Stick\Service\BaseService;
use Stick\Service\ServiceInterface;

/**
 * Class MySQLService
 * @package Stick\Service\Entities\MySQL
 */
class MySQLService extends BaseService implements ServiceInterface
{
    public function addObject(ServiceInterface $applicant) : AccessGrant
    {
        //cretae new Database, User and set PWD
        $grant = new MySQLGrant;
        $grant->metadata->setApplicant($applicant);
        $grant->metadata->setSupplicant($this);
        $grant->setData([]);
        return $grant;
    }

    /**
     * @param AccessGrant $object
     * @return mixed
     */
    public function removeObject(AccessGrant $object)
    {
        // TODO: Implement removeObject() method.
    }

    /**
     * @param ServiceInterface $applicant
     * @return AccessGrant
     */
    public function getObject(ServiceInterface $applicant) : AccessGrant
    {
        // TODO: Implement getObject() method.
    }


    public function setPassword(string $user, string $password)
    {

    }
}
