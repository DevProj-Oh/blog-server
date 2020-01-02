<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-01 16:03:57',
                'updated_at' => '2020-01-01 16:03:57',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-01 16:03:57',
                'updated_at' => '2020-01-01 16:03:57',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-01 16:03:57',
                'updated_at' => '2020-01-01 16:03:57',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-01 16:03:57',
                'updated_at' => '2020-01-01 16:03:57',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-01-01 16:03:57',
                'updated_at' => '2020-01-01 16:03:57',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2020-01-01 17:13:41',
                'updated_at' => '2020-01-01 17:13:41',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2020-01-01 17:13:41',
                'updated_at' => '2020-01-01 17:13:41',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2020-01-01 17:13:41',
                'updated_at' => '2020-01-01 17:13:41',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2020-01-01 17:13:41',
                'updated_at' => '2020-01-01 17:13:41',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2020-01-01 17:13:41',
                'updated_at' => '2020-01-01 17:13:41',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_tags',
                'table_name' => 'tags',
                'created_at' => '2020-01-02 10:37:04',
                'updated_at' => '2020-01-02 10:37:04',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_tags',
                'table_name' => 'tags',
                'created_at' => '2020-01-02 10:37:04',
                'updated_at' => '2020-01-02 10:37:04',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_tags',
                'table_name' => 'tags',
                'created_at' => '2020-01-02 10:37:04',
                'updated_at' => '2020-01-02 10:37:04',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_tags',
                'table_name' => 'tags',
                'created_at' => '2020-01-02 10:37:04',
                'updated_at' => '2020-01-02 10:37:04',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_tags',
                'table_name' => 'tags',
                'created_at' => '2020-01-02 10:37:04',
                'updated_at' => '2020-01-02 10:37:04',
            ),
        ));
        
        
    }
}