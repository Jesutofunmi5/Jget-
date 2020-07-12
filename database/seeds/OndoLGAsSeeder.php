<?php

use Illuminate\Database\Seeder;

class OndoLGAsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('ondo_lgas')->insert([
            'name' => 'Akoko North East',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Akoko North West ',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Akoko South East',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Akoko South West',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Akure North ',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Akure South',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Ese-Odo ',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Idanre',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Ifedore ',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Ilaje ',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Ile-Oluji/Okeigbo',
            'state_id' => '28'
        ]);

        DB::table('ondo_lgas')->insert([
            'name' => 'Irele ',
            'state_id' => '28'
        ]);

        DB::table('ondo_lgas')->insert([
            'name' => 'Odigbo ',
            'state_id' => '28'
        ]);

        DB::table('ondo_lgas')->insert([
            'name' => 'Okitipupa ',
            'state_id' => '28'
        ]);

        DB::table('ondo_lgas')->insert([
            'name' => 'Ondo East  ',
            'state_id' => '28'
        ]);

        DB::table('ondo_lgas')->insert([
            'name' => 'Ondo West',
            'state_id' => '28'
        ]);

        DB::table('ondo_lgas')->insert([
            'name' => 'Ose',
            'state_id' => '28'
        ]);

         DB::table('ondo_lgas')->insert([
            'name' => 'Owo',
            'state_id' => '28'
        ]);
    }
}
