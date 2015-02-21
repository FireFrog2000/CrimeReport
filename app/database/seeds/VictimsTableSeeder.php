<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VictimsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $i=1;
		foreach(range(1, 10) as $index)
		{
			Victim::create([
                'name' => $faker->name,
                'nic' => substr($faker->creditCardNumber,0,14),
                'user_id' => $i++,

			]);
		}
	}

}