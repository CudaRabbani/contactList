<?php

use Illuminate\Database\Seeder;

use App\Contacts;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      Contacts::truncate();
      $faker = Faker\Factory::create();
      for ($i = 0; $i < 10; $i++)
      {
        Contacts::create(
          [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'company_name' => $faker->company,
            'created_at' => date_format(new \DateTime(), 'Y-m-d H:i:s')
          ]
        );
      }
    }
}
