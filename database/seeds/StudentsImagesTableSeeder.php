<?php

use Illuminate\Database\Seeder;

class StudentsImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\StudentImage::class, 90)->create();
    }
}
