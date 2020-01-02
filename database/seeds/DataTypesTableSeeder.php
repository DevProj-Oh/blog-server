<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => '用户',
                'display_name_plural' => '用户',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => '菜单',
                'display_name_plural' => '菜单',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => '角色',
                'display_name_plural' => '角色',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => '分类',
                'display_name_plural' => '分类',
                'icon' => 'voyager-wallet',
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-01-01 16:03:57',
                'updated_at' => '2020-01-01 17:51:34',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'articles',
                'slug' => 'articles',
                'display_name_singular' => '文章',
                'display_name_plural' => '文章',
                'icon' => 'voyager-markdown',
                'model_name' => 'App\\Article',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-01-01 17:13:41',
                'updated_at' => '2020-01-02 10:44:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'tags',
                'slug' => 'tags',
                'display_name_singular' => '标签',
                'display_name_plural' => '标签',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\Tag',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-01-02 10:37:04',
                'updated_at' => '2020-01-02 10:37:04',
            ),
        ));
        
        
    }
}