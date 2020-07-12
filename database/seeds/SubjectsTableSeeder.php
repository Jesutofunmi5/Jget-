<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        DB::table('subjects')->insert([
            'id' => 1,
            'subject_name' => 'SOCIAL STUDIES',
            'subject_code' => 'SOC',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 2,
            'subject_name' => 'HEALTH SCIENCE',
            'subject_code' => 'HS',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 3,
            'subject_name' => 'TECHNICAL DRAWING',
            'subject_code' => 'TD',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 4,
            'subject_name' => 'INTEGRATED SCIENCE',
            'subject_code' => 'ISCI',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 14,
            'subject_name' => '',
            'subject_code' => '',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 18,
            'subject_name' => 'ENGLISH LANGUAGE',
            'subject_code' => 'ENG-LANG',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 19,
            'subject_name' => 'MATHEMATICS',
            'subject_code' => 'MATHS',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 20,
            'subject_name' => 'BUSINESS STUDIES',
            'subject_code' => 'BUS',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 21,
            'subject_name' => 'PRE-VOCATION STUDIES',
            'subject_code' => 'PVS',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 22,
            'subject_name' => 'NATIONAL VALUES',
            'subject_code' => 'NAT-VAL',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 23,
            'subject_name' => 'RELIGION',
            'subject_code' => 'REL',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 24,
            'subject_name' => 'BASIC SCIENCE & TECHNOLOGY',
            'subject_code' => 'BST',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 25,
            'subject_name' => 'CULTURAL & CREATIVE ART',
            'subject_code' => 'CCA',
            'class_category' => 'JSS'
        ]);

         DB::table('subjects')->insert([
            'id' => 26,
            'subject_name' => 'YORUBA',
            'subject_code' => 'YOR',
            'class_category' => 'JSS'
        ]);
         DB::table('subjects')->insert([
            'id' => 27,
            'subject_name' => 'FRENCH',
            'subject_code' => 'FRH',
            'class_category' => 'JSS'
        ]);
    }
}
