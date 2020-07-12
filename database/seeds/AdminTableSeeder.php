<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('admins')->insert([
        //     'fullname' => 'Odewale Ifeoluwa',
        //     'email' => 'ifeoluwa.odewale@gmail.com',
        //     'username' => 'schoolAdmin',
        //     'password' => Hash::make('password'),
        //     'school_id' => 1
        // ]);

        DB::table('super_admins')->insert([
            'fullname' => 'Transforming Education',
            'status' => 1,
            'email' => 'info@Transforming.com.ng',
            'username' => 'superAdmin',
            'password' => Hash::make('password')
        ]);

        DB::table('super_admins')->insert([
            'fullname' => 'Balogun Joseph',
            'status' => 1,
            'email' => 'ifeoluwa.odewale@gmail.com',
            'username' => 'sagecoder',
            'password' => Hash::make('password')
        ]);
    }
}
