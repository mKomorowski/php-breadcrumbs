<?php namespace mKomorowski\Breadcrumbs;

class BootstrapMarkupSettings extends MarkupSettings
{
    protected $containerElement = 'ol';
    protected $containerElementClass = 'breadcrumb';
    protected $itemElement = 'li';
    protected $itemElementActiveClass = 'active';
}