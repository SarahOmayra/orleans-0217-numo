<?php

namespace NumoBundle\Entity;

/**
 * Class SelectEvent
 * @package NumoBundle\Entity
 */
class SelectEvent
{
    private $startDate;
    private $endDate;
    private $category;
    private $passed;
    private $id;

    public function __construct()
    {
        $this
        ->setStartDate(null)
        ->setEndDate(null)
        ->setCategory('')
        ->setPassed(0)
        ->setId('');
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     * @return SelectEvent
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     * @return SelectEvent
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $tags
     * @return SelectEvent
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassed()
    {
        return $this->passed;
    }

    /**
     * @param mixed $passed
     * @return SelectEvent
     */
    public function setPassed($passed)
    {
        $this->passed = $passed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return SelectEvent
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}