<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Location::create([
                    'latitude' => $faker->latitude,
                    'longitude' => $faker->longitude,
                    'address' => $faker->address,
                    'location_name' => $faker->streetName

			]);
		}
	}

}