<?php declare(strict_types=1);

namespace AnsibleTower\Models;

use AnsibleTower\Common\AbstractClasses\AbstractModel;
use AnsibleTower\Api\JobTemplates;

class JobTemplate extends AbstractModel
{
	public $id;
	public $type;
	
	public function __construct(\AnsibleTower\Common\Resources\Connection $client)
	{
		parent::__construct($client, new JobTemplates());
	}

}