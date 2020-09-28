<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $newUser = new User();
        $newUser->username='muhyiddin';
        $newUser->name='Ubaidillah Muhyiddin';
        $newUser->password=Hash::make('testing');
        $newUser->save();
    }
}
