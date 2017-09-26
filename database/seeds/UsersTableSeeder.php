<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table('users')->insert([
            'id'=>1,
            'name'=>'Teste',
            'email'=>'teste@gmail.com',
            'password'=>'$2y$10$zzVH9lkQg0IER5B097kOCO0wVmeF5QLI0zt71KI9D1XziYG2h04eC',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
		DB::table('users')->insert([
            'id'=>2,
            'name'=>'Teste 2',
            'email'=>'teste2@gmail.com',
            'password'=>'$2y$10$zzVH9lkQg0IER5B097kOCO0wVmeF5QLI0zt71KI9D1XziYG2h04eC',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);
        DB::table('users')->insert([
            'id'=>3,
            'name'=>'Vanessa Souto',
            'email'=>'vanessasoutoc@gmail.com',
            'password'=>'$2y$10$zzVH9lkQg0IER5B097kOCO0wVmeF5QLI0zt71KI9D1XziYG2h04eC',
            'created_at'=>'2017-08-29 00:00:00',
            'updated_at'=>'2017-08-29 00:00:00'
        ]);

    }
}