<?php
class Deparment{
	protected $name;
	protected $desc;

	public function getInfo()
	{
		echo "this is a function of parent class";
	}

}
class student extends Deparment
{
	protected $name;
	public function getInfo()
	{
		echo "function in sub class";
	}
}
$roshan= new student();
$roshan->getInfo();