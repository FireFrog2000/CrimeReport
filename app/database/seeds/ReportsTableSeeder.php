<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ReportsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $i=1;
		foreach(range(1, 10) as $index)
		{
			Report::create([
                'body' => $faker->text(1000),
                'status' => ((rand(1,10)>5)?'seen':'unseen'),
                'crime_id' => rand(1,10),
                'victim_id' => $i++,
                'location_id' => rand(1,10)
			]);
		}
	}

}