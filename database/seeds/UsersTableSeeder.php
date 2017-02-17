<?php

use Illuminate\Database\Seeder;

use App\Role;
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
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_author = Role::where('name', 'Author')->first();

        $user = new User();
        $user->name = 'George Rawlinson';
        $user->email = 'gr@willis-organs.com';
        $user->password = bcrypt('changeme');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Mark Rawlinson';
        $admin->email = 'mr@willis-organs.com';
        $admin->password = bcrypt('changeme');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $author = new User();
        $author->name = 'Philip Cooper';
        $author->email = 'ptc@willis-organs.com';
        $author->password = bcrypt('changeme');
        $author->save();
        $author->roles()->attach($role_author);
    }
}
