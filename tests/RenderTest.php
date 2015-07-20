<?php

use mKomorowski\Breadcrumbs\Render;

/**
 * Class RenderTests
 */

class RenderTests extends PHPUnit_Framework_TestCase
{
    protected $breadcrumbsRender;

    /**
     * Set up Render Class
     */

    public function setUp()
    {
        $this->breadcrumbsRender = new Render;
    }

    /**
     * Assertion for rendering empty URI
     */

    public function testRenderHTMLContentForEmptyPath()
    {
        $this->assertEquals("<ol class='breadcrumb'><li><a href='/' title='Home'>Home</a></li></ol>", $this->breadcrumbsRender->build());
    }

    /**
     * Assertion for rendering custom URI
     */

    public function testRenderHTMLContentForGivenPath()
    {
        $this->assertEquals("<ol class='breadcrumb'><li><a href='/' title='Home'>Home</a></li><li><a href='/library/' title='Library'>Library</a></li><li class='active'>Data</li></ol>", $this->breadcrumbsRender->build('/library/data'));
    }

    /**
     * Assertion for rendering custom URI with disabled Home crumb option
     */

    public function testRenderHTMLContentWithDisabledHomeCrumb()
    {
        $this->breadcrumbsRender->disableHomeCrumb();

        $this->assertEquals("<ol class='breadcrumb'><li><a href='/library/' title='Library'>Library</a></li><li class='active'>Data</li></ol>", $this->breadcrumbsRender->build('/library/data'));
    }
}