<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'A New Hope',
            'email' => 'admin@system.com',
            'password'=>bcrypt('admin123'),
            'username'=>'admin',
            'admin_user'=>1
        ]);


    }
}
