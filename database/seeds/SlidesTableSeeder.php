<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
			['link' => 'sl.jpg', 'active' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'order' => 1],
			['link' => 'slide.jpg', 'active' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime, 'order' => 2],
		]);	
    }
}
