<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        DB::table('categories')->insert([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        DB::table('categories')->insert([
            'name' => 'UI Design',
            'slug' => 'ui-design'
        ]);

    }
}
