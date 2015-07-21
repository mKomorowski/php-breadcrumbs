<?php namespace mKomorowski\Breadcrumbs;

/**
 * Interface MarkupSettings
 * @package mKomorowski\Breadcrumbs
 */

interface MarkupSettings
{
    /**
     * @return string
     */

    public function getHomeCrumb();

    /**
     * @return string
     */

    public function getContainerElement();

    /**
     * @return string
     */

    public function getContainerElementClass();

    /**
     * @return string
     */

    public function getItemElement();

    /**
     * @return string
     */

    public function getItemElementClass();

    /**
     * @return string
     */

    public function getItemElementActiveClass();
}