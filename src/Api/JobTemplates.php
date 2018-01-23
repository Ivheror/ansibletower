<?php declare(strict_types=1);

namespace AnsibleTower\Api;
use AnsibleTower\Common\AbstractClasses\AbstractApi;

class JobTemplates extends AbstractApi
{
	
	public function all(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'job_templates'
        ];
    }

    public function get(): array
    {
        return [
            'method'  => 'GET',
            'path'    => 'job_templates/{id}',
            'params'  => [
            	'id' => $this->params->stringPath()
            ]
        ];
    }

}