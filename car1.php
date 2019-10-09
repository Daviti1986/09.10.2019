<?php
abstract class car1
{
	private $model;

	public function setmodel($model)
	{
		$this->model=$model;
	}
	public function getmodel(){
		return $this->model;
	}

}