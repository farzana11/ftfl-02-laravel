<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('portfolios')->delete();

        $portfolios = array(
            ['id' => 1,'catagories_id' =>1, 'title' => 'title 01', 'description' => 'project-01','status' => '1', 'created_by' => 'sathi01', 'modified_by' => 'lict@02', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2,'catagories_id' =>1, 'title' => 'title 02', 'description' => 'project-02','status' => '1', 'created_by' => 'farzana02', 'modified_by' => 'lict@03', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3,'catagories_id' =>1, 'title' => 'title 03', 'description' => 'project-03','status' => '1', 'created_by' => 'farzanasathi03', 'modified_by' => 'lict@04', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        DB::table('portfolios')->insert($portfolios);
    }

}