<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PolicestationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Policestation::create([
                    'name' => $faker->name,
                    'location_id'=> rand(1,10)

			]);
		}
	}

}