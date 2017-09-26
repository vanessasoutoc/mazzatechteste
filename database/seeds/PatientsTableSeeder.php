<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table('patients')->insert([
            'id'=>1,
            'name'=>'Vanessa Souto',
            'cpf'=>'123',
            'birth'=>'1987-02-05',
            'email'=>'vanessasoutoc@gmail.com',
            'cellphone'=>'34 9999-9999',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
		DB::table('patients')->insert([
            'id'=>2,
            'name'=>'Luiza Damasceno',
            'cpf'=>'1234',
            'birth'=>'1949-10-05',
            'cellphone'=>'34 9999-9999',
            'email'=>'luizaddamasceno@gmail.com',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
        DB::table('patients')->insert([
            'id'=>3,
            'name'=>'Carlos José Romão',
            'cpf'=>'12345',
            'birth'=>'1989-10-05',
            'cellphone'=>'34 9999-9999',
            'email'=>'carlosjromao@gmail.com',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
        DB::table('patients')->insert([
            'id'=>4,
            'name'=>'José Roberto Soares',
            'cpf'=>'123456',
            'birth'=>'2001-03-05',
            'email'=>'jrsoares@gmail.com',
            'cellphone'=>'34 9999-9999',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);



    }
}