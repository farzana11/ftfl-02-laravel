<?php

use Illuminate\Database\Seeder;

class CatagoriesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('catagories')->delete();

        $catagories = array(
            ['id' => 1, 'title' => 'title 1', 'description' => 'project-1', 'created_by' => 'sathi', 'modified_by' => 'lict@2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'title' => 'title 2', 'description' => 'project-2', 'created_by' => 'farzana', 'modified_by' => 'lict@3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'title' => 'title 3', 'description' => 'project-3', 'created_by' => 'farzanasathi', 'modified_by' => 'lict@4', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('catagories')->insert($catagories);
    }

}