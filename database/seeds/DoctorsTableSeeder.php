<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table('doctors')->insert([
            'id'=>1,
            'name'=>'Antônio Carlos Damasceno',
            'crm'=>'1234',
            'cellphone'=>'34 9999-9999',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
		DB::table('doctors')->insert([
            'id'=>2,
            'name'=>'Cássia Damasceno',
            'crm'=>'12345',
             'cellphone'=>'34 9999-9999',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
        DB::table('doctors')->insert([
            'id'=>3,
            'name'=>'Angela Maria Barcelos',
            'crm'=>'123456',
             'cellphone'=>'34 9999-9999',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
        DB::table('doctors')->insert([
            'id'=>4,
            'name'=>'José Roberto Soares',
            'crm'=>'1234567',
             'cellphone'=>'34 9999-9999',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);



    }
}