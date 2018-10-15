<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
			['name' => 'Parent', 'id_cate' => NULL, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		]);	
		factory(Category::class, 7)->create();
    }
}
