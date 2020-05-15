<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\User;
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
        Admin::create([
            'name' =>'asdf',
            'email'=>'asdf@app.com',
            'password'=>Hash::make('password'),
        ]);

       
    }
}
