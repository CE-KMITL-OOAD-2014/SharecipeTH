<?php
	class RecipePostTest extends TestCase{
		public static function mockPost($recipeName,$hour,$minute,$method,$prepared,$ingredient,$quantity,$unit){
			$recipe = new Recipe();
			$recipe->name = $recipeName;
			$recipe->timeH = $hour;
			$recipe->timeM = $minute;
			$recipe->method = $method;
			$recipe->prepared = $prepared;
			$recipe->ingredient = $ingredient;
			$recipe->quantity = $quantity;
			$recipe->unit = $unit;
			return $Recipe;
		}
		public function testRecipePost(){
	
			$mock = RecipePostTest::mockPost('testUserName',5,20,'testMethod','testPrepate'
				,'testIngredient',1,'testUnit');
			$memRecipe = new  Recipe();
			$result = $memRecipe->save();

			$this->assertEquals('testUserName',$result->recipeName;
			$this->assertEquals(5,$result->hour;
			$this->assertEquals(20,$result->minute;
			$this->assertEquals('testMethod',$result->method;
			$this->assertEquals('testPrepate',$result->prepared;
			$this->assertEquals('testIngredient',$result->ingredient;
			$this->assertEquals(1,$result->quantity;
			$this->assertEquals('testUnit',$result->unit;
		}
	}
?>