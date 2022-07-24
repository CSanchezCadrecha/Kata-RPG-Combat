<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;
use App\Faction;

class CharacterTest extends TestCase {

	/** @test */
	public function test_character_Health_starting_at_1000_points()
	{
		//Given 
		$goku = new Character;
		//When
		//$gokuHealth = $goku->health; si fuera public $health
		$gokuHealth = $goku->getHealth();
		//Then
		$this->assertEquals(1000,$gokuHealth);
	}

	public function test_character_Level_starting_at_1_point()
	{
		//Given 
		$goku = new Character;
		//When
		$gokuLevel = $goku->getLevel();
		//Then
		$this->assertEquals(1,$gokuLevel);
	}

	public function test_character_starting_alive()
	{
		//Given 
		$goku = new Character;
		//When
		$gokuAlive = $goku->getAlive();
		//Then
		$this->assertEquals(True,$gokuAlive);
	}

	public function test_character_damage()
	{
		//Given 
		$goku = new Character;
		$spiderman = new Character;
		//When
		$gokuDamage = $goku->getdamage($spiderman,100);
		$result = $spiderman->getHealth();
		//Then
		$this->assertEquals(900,$result);
	}

	

}


