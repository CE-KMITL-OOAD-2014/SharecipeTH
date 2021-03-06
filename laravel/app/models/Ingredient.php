<?php

class Ingredient extends Eloquent {

	public $timestamps = false;

	protected $table = 'ingredients';

	protected $fillable = array('name','quantity', 'unit', 'recipe_id');

	public function recipe()
	{
		return $this->belongsTo('Recipe');
	}
}
/*class Ingredient {
	private $name;
	private $quantity;
	private $unit;

	public function newIngredient()
	{
		$ingredient = Ingredient::create(array(
			'name'=>$name,
			'quantity'=>$quantity,
			'unit'=>$unit));
		}
	}

	public function setName($value)
	{
		$this->name = $value;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setQuantity($value)
	{
		$this->quantity = $value;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setUnit($value)
	{
		$this->unit = $value;
	}

	public function getUnit()
	{
		return $this->unit;
	}
}*/