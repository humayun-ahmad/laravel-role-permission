<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //me
        $user = User::where('email', 'humayunraj789@gmail.com')->first();
        if(is_null($user))
        
        {
            $user = new User();
            $user->name = "Humayun Ahmad Rajib";
            $user->email = "humayunraj789@gmail.com";
            $user->password = Hash::make('123456789');
            $user->save();
        
        }
        
    }
}
