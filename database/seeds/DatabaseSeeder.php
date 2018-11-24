<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $faker = Faker::create();
    	
          foreach (range(1,1000) as $index) {
	        DB::table('tropa')->insert([
	        'data_1'=>$faker->word,
	        'data_2'=>$faker->word,
            'data_3'=>$faker->word,
            'data_4'=>$faker->word,
            'data_5'=>$faker->word,
            'data_6'=>$faker->word,
	      ]);
	   
	  }
    }
}

