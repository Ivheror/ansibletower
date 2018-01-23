<?php declare(strict_types=1);

namespace AnsibleTower\Common\AbstractClasses;

use AnsibleTower\Common\Resources\Params;

abstract class AbstractApi
{
    protected $params;
    
    public function __construct()
    {
        $this->params = new Params();
    }
}