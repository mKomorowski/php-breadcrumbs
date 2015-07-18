<?php

use mKomorowski\Breadcrumbs\Render;

class RenderTests extends PHPUnit_Framework_TestCase
{
    protected $breadcrumbsRender;

    public function setUp()
    {
        $this->breadcrumbsRender = new Render;
    }

    public function testRenderHTMLContentForEmptyPath()
    {
        $this->assertEquals("<ol class='breadcrumb'><li><a href='/' title='Home'>Home</a></li></ol>", $this->breadcrumbsRender->build());
    }

    public function testRenderHTMLContentForGivenPath()
    {
        $this->assertEquals("<ol class='breadcrumb'><li><a href='/' title='Home'>Home</a></li><li><a href='/library/' title='Library'>Library</a></li><li class='active'>Data</li></ol>", $this->breadcrumbsRender->build('/library/data'));
    }
}