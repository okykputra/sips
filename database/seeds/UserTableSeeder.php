<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->is_admin = '1';
        $user->save();
    }
}
