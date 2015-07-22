<?php namespace mKomorowski\Breadcrumbs;

/**
 * Interface MarkupSettings
 * @package mKomorowski\Breadcrumbs
 */

abstract class MarkupSettings
{

    protected $containerElement = 'ul';
    protected $containerElementClass = false;
    protected $itemElement = 'li';
    protected $itemElementClass = false;
    protected $itemElementActiveClass = false;

    /**
     * @return string
     */

    public function getContainerElement()
    {
        return $this->containerElement;
    }

    /**
     * @return string
     */

    public function getContainerElementClass()
    {
        return $this->containerElementClass;
    }

    /**
     * @return string
     */

    public function getItemElement()
    {
        return $this->itemElement;
    }

    /**
     * @return string
     */

    public function getItemElementClass()
    {
        return $this->itemElementClass;
    }

    /**
     * @return string
     */

    public function getItemElementActiveClass()
    {
        return $this->itemElementActiveClass;
    }
}