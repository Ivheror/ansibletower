<?php declare(strict_types=1);

namespace AnsibleTower\Common\AbstractClasses;

use AnsibleTower\Common\Traits\OperatorTrait;

abstract class AbstractBuilder
{
    use OperatorTrait;

	protected $client;
	protected $api;
    protected $model;

    public function __construct(
    	\AnsibleTower\Common\Resources\Connection $client,
    	\AnsibleTower\Common\AbstractClasses\AbstractApi $api,
    	string $model)
    {
    	$this->client = $client;
        $this->api = $api;
        $this->model = $model;
    }

    public function get(string $id): \AnsibleTower\Common\AbstractClasses\AbstractModel
    {
        return $this->model($this->model)->populateFromArray($this->execute($this->api->get(), ['id' => $id]));
    }

    public function list(array $options = null): \AnsibleTower\Common\Resources\AnsibleIterator
    {
        return $this->model($this->model)->enumerate($this->api->all(), $options);
    }
    
    protected function model(string $class, array $data = null) 
    {
        $model = new $class($this->client);
        if (isSet($data)) {
            $model->populateFromArray($data);
        }
        return $model;
    }

}