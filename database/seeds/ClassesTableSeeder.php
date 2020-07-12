<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'class_name' => 'JSS 1',
            'school_id' => 1
        ]);

        DB::table('classes')->insert([
            'class_name' => 'JSS 2',
            'school_id' => 1
        ]);

        DB::table('classes')->insert([
            'class_name' => 'JSS 3',
            'school_id' => 1
        ]);

        DB::table('classes')->insert([
            'class_name' => 'SSS 1',
            'school_id' => 1
        ]);

        DB::table('classes')->insert([
            'class_name' => 'SSS 2',
            'school_id' => 1
        ]);

        DB::table('classes')->insert([
            'class_name' => 'SSS 3',
            'school_id' => 1
        ]);
    }
}
