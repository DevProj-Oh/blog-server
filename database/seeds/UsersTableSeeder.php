<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.VAB7DfNiVq.G9ANi7/ZRO1JniWeZFOl20zCnLMVEyiuAulkLiUT2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-01-01 15:34:36',
                'updated_at' => '2020-01-01 15:34:36',
            ),
        ));
        
        
    }
}