<?php

namespace Engine\Core\Template;

use Engine\Core\Template\Theme;
use Engine\DI\DI;

class View
{
    /**
     * @var \Engine\DI\DI
     */
    public $di;

    /**
     * @var \Engine\Core\Template\Theme
     */
    protected $theme;

    /**
     * View constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di    = $di;
        $this->theme = new Theme();
    }

    /**
     * @param $template
     * @param array $vars
     * @throws \Exception
     */
    public function render($template, $vars = [])
    {
        $templatePath = $this->getTemplatePath($template, ENV);

        if(!is_file($templatePath))
        {
            throw new \InvalidArgumentException(
                sprintf('Template "%s" not found in "%s"', $template, $templatePath)
            );
        }

        $vars['lang'] = $this->di->get('language');
        $this->theme->setData($vars);
        extract($vars);

        ob_start();
        ob_implicit_flush(0);

        try{
            require $templatePath;
        }catch (\Exception $e){
            ob_end_clean();
            throw $e;
        }

        echo ob_get_clean();
    }


    /**
     * @param $template
     * @param null $env
     * @return string
     */
    private function getTemplatePath($template, $env = null)
    {
        if($env === 'Cms')
        {
            return ROOT_DIR . '/content/themes/default/' . $template . '.php';
        }

        return ROOT_DIR . '/View/' . $template . '.php';
    }
}