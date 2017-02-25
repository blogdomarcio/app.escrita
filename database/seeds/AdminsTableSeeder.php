<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Admin::where('username','=','marcio')->count()){
            $user = Admin::where('username','=','marcio')->first();
        }else {
            $usuario = new Admin();
            $usuario->name = "Marcio ADMIN";
            $usuario->username = "marcio";
            $usuario->password = bcrypt("123456");
            $usuario->save();
        }
    }
}
