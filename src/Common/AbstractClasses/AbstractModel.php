<?php declare(strict_types=1);

namespace AnsibleTower\Common\AbstractClasses;

use AnsibleTower\Common\Resources\Params;
use AnsibleTower\Common\Resources\AnsibleIterator;
use AnsibleTower\Common\Traits\OperatorTrait;

abstract class AbstractModel
{
    use OperatorTrait;
    
	protected $client;
	protected $api;

	public function __construct(\AnsibleTower\Common\Resources\Connection $client,
                                \AnsibleTower\Common\AbstractClasses\AbstractApi $api) 
	{
		$this->client = $client;
        $this->api = $api;
	}

    public function enumerate($api, array $options = null): AnsibleIterator
    {
        return new AnsibleIterator(
            $this,
            $this->execute($api, $options)
        );
    }


	public function populateFromArray(array $data): self
    {
        foreach ($data as $key => $val) {
            if (property_exists($this, $key)) {
                $this->{$key} = $val;
            }
        }
        return $this;
    }
}