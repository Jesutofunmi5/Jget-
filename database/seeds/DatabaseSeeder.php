<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    //Truncate tables to avoid duplicacy
      // DB::table('states')->truncate();
      // DB::table('lgas')->truncate();
      // DB::table('classes')->truncate();
      // DB::table('class_arms')->truncate();
      // DB::table('subjects')->truncate();
      // //DB::table('admin_permission')->truncate();
      // //DB::table('admins')->truncate();
      DB::table('super_admins')->truncate();
      DB::table('super_admin_permission')->truncate();
      DB::table('permissions')->truncate();
      // DB::table('unity_schools')->truncate();
      // DB::table('ondo_lgas')->truncate();




  	  // $this->call(Lgas_1_TableSeeder::class);
  	  // $this->call(Lgas_2_TableSeeder::class);
  	  // $this->call(Lgas_3_TableSeeder::class);
  	  // $this->call(Lgas_4_TableSeeder::class);
     //  $this->call(StatesTableSeeder::class);
     //  $this->call(ClassesTableSeeder::class);
     //  $this->call(ClassArmsTableSeeder::class);
     // $this->call(SubjectsTableSeeder::class);
     $this->call(AdminTableSeeder::class);
     $this->call(PermissionsSeeder::class);
     $this->call(AdminsPermissionsSeeder::class);
     // $this->call(UnitySchoolSeeder::class);
      // $this->call(OndoLGAsSeeder::class);
    }
}
