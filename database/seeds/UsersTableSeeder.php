<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
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
        //Creamos rol Administrador
        $admin = Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'special' => 'all-access',
        ]);

        //Creamos el usuario Administrador
        User::create([
            'nickname' => 'administrador',
            'email' => 'administrador@admin.com',
            'password' => Hash::make('123123123'),
        ]);

         //Asignamos el Rol Administrador al usuario
         $user = User::where('nickname','administrador') -> first();
         $user->assignRoles('admin');

    }
}
