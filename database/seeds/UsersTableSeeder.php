<?php

use App\Models\User;
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
        $users = [['name'=>'admin','email'=>'admin@email.com','password'=>bcrypt('123')],
                 ['name'=>'user','email'=>'user@email.com','password'=>bcrypt('123')]];
        
        foreach($users as $user){
            User::create($user);
        }
    }
}
