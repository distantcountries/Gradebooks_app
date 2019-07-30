<?php

use Illuminate\Database\Seeder;

class GradebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gradebook::class, 10)->create();
    }
}
