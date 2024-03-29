<?php
namespace Ipolh\SDEK\Api\Entity\Response;

use Ipolh\SDEK\Api\BadResponseException;
use Ipolh\SDEK\Api\Entity\Response\Part\Common\ErrorList;
use Ipolh\SDEK\Api\Entity\Response\Part\Common\RequestList;
use Ipolh\SDEK\Api\Entity\Response\Part\IntakesInfo\Entity;

/**
 * Class IntakesInfo
 * @package Ipolh\SDEK\Api\Entity\Response
 */
class IntakesInfo extends AbstractResponse
{
    /**
     * @var Entity|null
     */
    protected $entity;

    /**
     * @var RequestList
     */
    protected $requests;

    /**
     * @var ErrorList|null - Do you really think that errors are always returned in request.errors?
     */
    protected $errors;

    /**
     * @return Entity|null
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param array $entity
     * @return IntakesInfo
     */
    public function setEntity(array $entity)
    {
        $this->entity = new Entity($entity);
        return $this;
    }

    /**
     * @return RequestList
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * @param array $array
     * @return IntakesInfo
     * @throws BadResponseException
     */
    public function setRequests(array $array)
    {
        $collection = new RequestList();
        $this->requests = $collection->fillFromArray($array);
        return $this;
    }

    /**
     * @return ErrorList|null
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $array
     * @return IntakesInfo
     * @throws BadResponseException
     */
    public function setErrors(array $array)
    {
        $collection = new ErrorList();
        $this->errors = $collection->fillFromArray($array);
        return $this;
    }
}