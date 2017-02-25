<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('username', '=', '1')->count()) {
            $user = User::where('username', '=', '1')->first();
        } else {
            $usuario = new User();
            $usuario->name = "Usuario 1";
            $usuario->username = "1";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }
    }
}
