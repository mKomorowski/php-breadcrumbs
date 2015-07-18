<?php namespace mKomorowski\Breadcrumbs;

class Render
{
    protected $containerElement = 'ol';

    protected $containerElementClass = 'breadcrumb';

    protected $itemElement = 'li';

    protected $itemElementActiveClass = 'active';

    public function build($path = false)
    {
        $path = ($path) ? $path : $this->requestURI();

        $path = array_filter(explode('/', $path, PHP_URL_PATH));

        $breadcrumbs = array(
            $this->buildElement($this->itemElement, "<a href='/' title='Home'>Home</a>")
        );

        $lastCrumb = end($path);

        $href= '';

        foreach($path as $crumb)
        {
            $href .= $crumb.'/';

            if($crumb === $lastCrumb){
                array_push($breadcrumbs, $this->buildElement($this->itemElement, ucfirst($crumb), $this->itemElementActiveClass));
                continue;
            }

            array_push($breadcrumbs, $this->buildElement($this->itemElement, "<a href='/".$href."' title='".ucfirst($crumb)."'>".ucfirst($crumb)."</a>"));
        }

        return $this->buildElement($this->containerElement, implode('', $breadcrumbs), $this->containerElementClass);
    }

    protected function requestURI()
    {
        return (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '/';
    }

    protected function buildElement($element, $content, $class = false){

        $class = ($class) ? " class='{$class}'" : "";

        return "<{$element}{$class}>{$content}</{$element}>";
    }
}