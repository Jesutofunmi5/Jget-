<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'permission' => 'View Student',
            'parent_permission' => 'student'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Student',
            'parent_permission' => 'student'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Student',
            'parent_permission' => 'student'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Student',
            'parent_permission' => 'student'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View User',
            'parent_permission' => 'user'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create User',
            'parent_permission' => 'user'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit User',
            'parent_permission' => 'user'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete User',
            'parent_permission' => 'user'
        ]);


        DB::table('permissions')->insert([
            'permission' => 'View Teacher',
            'parent_permission' => 'teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Teacher',
            'parent_permission' => 'teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Teacher',
            'parent_permission' => 'teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Teacher',
            'parent_permission' => 'teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Subject',
            'parent_permission' => 'subject'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Subject',
            'parent_permission' => 'subject'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Subject',
            'parent_permission' => 'subject'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Subject',
            'parent_permission' => 'subject'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Assignment',
            'parent_permission' => 'assignment'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Assignment',
            'parent_permission' => 'assignment'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Assignment',
            'parent_permission' => 'assignment'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Assignment',
            'parent_permission' => 'assignment'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Class',
            'parent_permission' => 'class'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Class',
            'parent_permission' => 'class'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Class',
            'parent_permission' => 'class'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Class',
            'parent_permission' => 'class'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Assign Teacher To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Assign Teacher To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Remove Assign Teacher To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Assign Student To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Assign Student To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Remove Assign Student To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Assign Subject To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Assign Subject To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Remove Assign Subject To Classarm',
            'parent_permission' => 'classarm'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Result',
            'parent_permission' => 'result'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Single Upload Result',
            'parent_permission' => 'result'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Batch Upload Result',
            'parent_permission' => 'result'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Student Result',
            'parent_permission' => 'result'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Student Result',
            'parent_permission' => 'result'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Remarks',
            'parent_permission' => 'remarks'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Single Upload Remarks',
            'parent_permission' => 'remarks'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Batch Upload Remarks',
            'parent_permission' => 'remarks'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Student Remarks',
            'parent_permission' => 'remarks'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Student Remarks',
            'parent_permission' => 'remarks'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Assignment Teacher',
            'parent_permission' => 'assignment_teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Assignment Teacher',
            'parent_permission' => 'assignment_teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit Assignment Teacher',
            'parent_permission' => 'assignment_teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Assignment Teacher',
            'parent_permission' => 'assignment_teacher'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View School House',
            'parent_permission' => 'school_house'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create School House',
            'parent_permission' => 'school_house'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit School House',
            'parent_permission' => 'school_house'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete School House',
            'parent_permission' => 'school_house'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Assign Student To School House',
            'parent_permission' => 'school_house'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Remove Assign Student From School House',
            'parent_permission' => 'school_house'
        ]);

         DB::table('permissions')->insert([
            'permission' => 'View School',
            'parent_permission' => 'school'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create School',
            'parent_permission' => 'school'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit School',
            'parent_permission' => 'school'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete School',
            'parent_permission' => 'school'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View School Admin',
            'parent_permission' => 'school_admin'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create School Admin',
            'parent_permission' => 'school_admin'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Edit School Admin',
            'parent_permission' => 'school_admin'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete School Admin',
            'parent_permission' => 'school_admin'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Scratch Card',
            'parent_permission' => 'scratch_card'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'View Scratch Card',
            'parent_permission' => 'scratch_card'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Delete Scratch Card',
            'parent_permission' => 'scratch_card'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Lock And Release Student Result',
            'parent_permission' => 'result'
            ]);

        DB::table('permissions')->insert([
            'permission' => 'Create Debtor Penalty',
            'parent_permission' => 'debtor'
            ]);

        DB::table('permissions')->insert([
            'permission' => 'View Debtor Penalty',
            'parent_permission' => 'debtor'
            ]);

        DB::table('permissions')->insert([
            'permission' => 'Status Debtor Penalty',
            'parent_permission' => 'debtor'
            ]);

        DB::table('permissions')->insert([
            'permission' => 'View Transfer',
            'parent_permission' => 'transfer'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Signature Transfer',
            'parent_permission' => 'transfer'
        ]);

        DB::table('permissions')->insert([
            'permission' => 'Assign Transfer Student To Class',
            'parent_permission' => 'transfer'
        ]);

    }
}
