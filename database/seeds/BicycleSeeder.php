<?php

use Illuminate\Database\Seeder;
use \App\Bicycle;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Bicycle::class,200)->create();

        for ($i = 1; $i <= 100; $i++) {
            factory(\App\Bicycle::class, 2)->create(['user_id' => $i]);
        }

    }
}
