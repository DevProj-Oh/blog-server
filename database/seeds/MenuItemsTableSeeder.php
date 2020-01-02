<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => '控制面板',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 15:48:21',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => '媒体',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => 12,
                'order' => 3,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 16:07:55',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => '用户',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => 12,
                'order' => 1,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 16:07:55',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => '角色',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => 12,
                'order' => 2,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 16:07:55',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => '工具',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 16:08:31',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => '菜单',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => '#000000',
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 16:12:07',
                'route' => 'voyager.menus.index',
                'parameters' => 'null',
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => '数据库',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 17:14:06',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => '指南针',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-02 10:37:20',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'bread',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-02 10:37:20',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => '设置',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => 12,
                'order' => 4,
                'created_at' => '2020-01-01 15:48:21',
                'updated_at' => '2020-01-01 16:07:52',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => '分类',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-wallet',
                'color' => NULL,
                'parent_id' => 13,
                'order' => 2,
                'created_at' => '2020-01-01 16:03:57',
                'updated_at' => '2020-01-01 17:14:06',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => '系统',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bolt',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-01-01 16:07:29',
                'updated_at' => '2020-01-01 16:08:31',
                'route' => NULL,
                'parameters' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => '创作',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-beer',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-01-01 16:08:19',
                'updated_at' => '2020-01-01 16:08:30',
                'route' => NULL,
                'parameters' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => '文章',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-markdown',
                'color' => NULL,
                'parent_id' => 13,
                'order' => 1,
                'created_at' => '2020-01-01 17:13:41',
                'updated_at' => '2020-01-01 17:14:06',
                'route' => 'voyager.articles.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => '标签',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tag',
                'color' => NULL,
                'parent_id' => 13,
                'order' => 3,
                'created_at' => '2020-01-02 10:37:04',
                'updated_at' => '2020-01-02 10:37:20',
                'route' => 'voyager.tags.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}