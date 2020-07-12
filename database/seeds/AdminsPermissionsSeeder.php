<?php

use Illuminate\Database\Seeder;

class AdminsPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->insertSuperAdminPermission(1, 100,[66, 67,68]);

        $this->insertSuperAdminPermission(2, 100);

        
    }

    private function insertSuperAdminPermission($super_admin_id, $super_admin_permissions, $super_admin_disallow_permission = []){
        for ($i=1; $i <= $super_admin_permissions; $i++) {
            if(!in_array($i, $super_admin_disallow_permission)){
                DB::table('super_admin_permission')->insert([
                    'super_admin_id' => $super_admin_id,
                    'permission_id' => $i
                ]);
            }
        }

    }
}
