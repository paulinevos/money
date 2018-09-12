<?php

interface NewFeature 
{

	/**
	 * @var CoolStuff
	 */
	public $coolStuff;

	public function DoThisCoolStuf(): return CoolStuffDoned;


	public function getCoolStuff()
	{
		return $this->coolStuff;
	}
}
