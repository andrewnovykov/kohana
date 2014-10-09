<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Виджет "Лучшие товары"
 */
class Controller_Widgets_Topproducts extends Controller_Widgets {
    
    public $template = 'widgets/w_topproducts';

    public function action_index()
    {
        // Получаем список категорий
        $products = ORM::factory('product')->limit(3)->find_all();
        $this->template->products = $products;
    }

}