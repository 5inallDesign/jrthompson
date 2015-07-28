<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PersonsTableSeeder');

		$this->command->info('Persons table seeded!');
	}
}

class PersonsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('persons')->delete();

        $faker = Faker\Factory::create();
 
		for ($i = 0; $i < 50; $i++)
		{
		  	$user = Person::create(array(
		    	'first_name' => $faker->firstName,
		    	'last_name' => $faker->lastName,
		    	'email' => $faker->email,
		    	'phone' => $faker->randomNumber(10)
		  	));
		}
    }

}