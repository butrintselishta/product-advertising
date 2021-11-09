<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            ['al_menu_title' => 'Ballina','en_menu_title' => 'Home', 'parent_id' => 0, 'sort_order' => 0, 'slug' => 'ballina'],
            ['al_menu_title' => 'Produktet','en_menu_title' => 'Products', 'parent_id' => 0, 'sort_order' => 1, 'slug' => 'produktet'],
            ['al_menu_title' => 'Bernadotte','en_menu_title' => 'Bernadotte', 'parent_id' => 2, 'sort_order' => 2, 'slug' => 'bernadotte'],
            ['al_menu_title' => 'Loos','en_menu_title' => 'Loos', 'parent_id' => 2, 'sort_order' => 3, 'slug' => 'loos'],
            ['al_menu_title' => 'Tom','en_menu_title' => 'Tom', 'parent_id' => 2, 'sort_order' => 4, 'slug' => 'tom'],
            ['al_menu_title' => 'Lea','en_menu_title' => 'Lea', 'parent_id' => 2, 'sort_order' => 5, 'slug' => 'lea'],
            ['al_menu_title' => 'T94','en_menu_title' => 'T94', 'parent_id' => 2, 'sort_order' => 6, 'slug' => 't94'],
            ['al_menu_title' => 'Të tjera','en_menu_title' => 'Others', 'parent_id' => 2, 'sort_order' => 7, 'slug' => 'të-tjera'],
            ['al_menu_title' => 'Kontakti','en_menu_title' => 'Contact', 'parent_id' => 0, 'sort_order' => 8, 'slug' => 'kontakti'],
        ];
        foreach ($menus as $menu) {
           Menu::Create($menu);
        }
    }
}
