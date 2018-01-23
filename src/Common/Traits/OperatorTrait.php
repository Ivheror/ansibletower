<?php

namespace AnsibleTower\Common\Traits;

trait OperatorTrait 
{

    protected function execute($options, $params = null)
    {
        return $this->client->sendRequest($options, $params);
    }
    
}