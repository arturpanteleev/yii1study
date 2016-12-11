<?php

include_once __DIR__ . '/../../vendor/autoload.php';

class DbSeedCommand extends CConsoleCommand
{
	public function actionIndex() {
		$seeder = new \tebazil\yii1seeder\Seeder();
		$generator = $seeder->getGeneratorConfigurator();
		$faker = $generator->getFakerConfigurator();

		$seeder->table('users')->columns([
			'id', //automatic pk
			'login', //automatic fk
			'pass'=>$faker->password(),
			'email'=>$faker->email
		])->rowQuantity(5);


		$seeder->table('posts')->columns([
			'id',
			'title'=>$faker->text(20),
			'content' => $faker->text(500),
			'author' => $faker->randomNumber(),
			'category' => $faker->randomNumber(),
			'date_created' => $faker->unixTime,
			'date_updated' => '',
			'rating' =>$faker->randomNumber(),
			'views' => $faker->randomNumber()
		])->rowQuantity(5);

		$seeder->table('posts')->columns([
			'id',
			'content' => $faker->text(500),
			'author' => $faker->randomNumber(),
			'date_created' => $faker->unixTime,
			'date_updated' => ''
		])->rowQuantity(5);

		$seeder->refill();
	}

}