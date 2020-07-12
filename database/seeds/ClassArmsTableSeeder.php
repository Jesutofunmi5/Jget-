<?php

use Illuminate\Database\Seeder;

class ClassArmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_arms')->insert([
            'class_id' => 1,
            'class_arm' => 'A',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 1,
            'class_arm' => 'B',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 1,
            'class_arm' => 'C',
            'school_id' => 1
        ]);
        DB::table('class_arms')->insert([
            'class_id' => 2,
            'class_arm' => 'A',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 2,
            'class_arm' => 'B',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 2,
            'class_arm' => 'C',
            'school_id' => 1
        ]);
        DB::table('class_arms')->insert([
            'class_id' => 3,
            'class_arm' => 'A',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 3,
            'class_arm' => 'B',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 3,
            'class_arm' => 'C',
            'school_id' => 1
        ]);
        DB::table('class_arms')->insert([
            'class_id' => 4,
            'class_arm' => 'A',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 4,
            'class_arm' => 'B',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 4,
            'class_arm' => 'C',
            'school_id' => 1
        ]);
        DB::table('class_arms')->insert([
            'class_id' => 4,
            'class_arm' => 'D',
            'school_id' => 1
        ]);
        DB::table('class_arms')->insert([
            'class_id' => 5,
            'class_arm' => 'A',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 5,
            'class_arm' => 'B',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 5,
            'class_arm' => 'C',
            'school_id' => 1
        ]);
        DB::table('class_arms')->insert([
            'class_id' => 6,
            'class_arm' => 'A',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 6,
            'class_arm' => 'B',
            'school_id' => 1
        ]);

        DB::table('class_arms')->insert([
            'class_id' => 6,
            'class_arm' => 'C',
            'school_id' => 1
        ]);
    }
}
