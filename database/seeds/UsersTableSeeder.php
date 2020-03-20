<?php

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
        $users = factory(User::class, 3)->make();

        User::insert($users->makeVisible('password','remember_token')->toArray());

        $user = User::find(1);

        $user->name = "萌萌哒";
        $user->email = "1141029401@qq.com";
        $user->save();
    }

}
