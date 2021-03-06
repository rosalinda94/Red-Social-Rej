<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(PersonSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PostSeeder::class);
        /*--Con esto creo 10 usuarios y 3 posteos--
        factory(\App\User::class, 10)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(\App\Post::class, 3)->make());
          });*/
        // $this->call(UsersTableSeeder::class);
    }
}
