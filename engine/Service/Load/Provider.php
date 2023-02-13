<?php

namespace Engine\Service\Load;

use Engine\Service\AbstractProvider;
use Engine\load;

class Provider extends AbstractProvider
{

    /**
     * @var string
     */
    public $serviceName = 'load';

    /**
     * @return mixed
     */
    public function init()
    {
        $load = new Load($this->di);

        $this->di->set($this->serviceName, $load);

        return $this;
    }
}