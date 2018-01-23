<?php declare(strict_types=1);

namespace AnsibleTower;

use AnsibleTower\Common\Resources\Connection;
use AnsibleTower\Builders\JobTemplates;

class AnsibleTower
{
	private $client;

	public function __construct(array $options = [])
    {
        $this->client = new Connection($options);
    }

    public function jobTemplates(): JobTemplates
    {
        return new JobTemplates($this->client);
    }


}