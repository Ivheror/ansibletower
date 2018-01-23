<?php declare(strict_types=1);

namespace AnsibleTower\Builders;

use AnsibleTower\Common\AbstractClasses\AbstractBuilder;
use AnsibleTower\Api\JobTemplates as JobTemplatesApi;
use AnsibleTower\Models\JobTemplate;

class JobTemplates extends AbstractBuilder
{
	public $id;
	public $type;
	
	 public function __construct($client)
    {
        parent::__construct($client, new JobTemplatesApi(), JobTemplate::class);
    }

}