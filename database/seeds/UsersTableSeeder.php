<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'xmen')->first();
        $userRole = Role::where('name', 'mutant')->first();

        $admin = User::create([
          'name' => 'Admin User',
          'email' => 'admin@xmen.com',
          'password' => Hash::make('password')
        ]);

        $author = User::create([
          'name' => 'Xmen User',
          'email' => 'user@xmen.com',
          'password' => Hash::make('password')
        ]);

        $user = User::create([
          'name' => 'Mutant User',
          'email' => 'user@mutant.com',
          'password' => Hash::make('password')
        ]);



        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
    }

}
