<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс главной страницы
 */
class Controller_Index extends Controller_Base {

    public $template = 'index/v_base';        // Базовый шаблон

    public function  before() {
        parent::before();

        // Виджеты
        $menu = Widget::load('menu');
        $news = Widget::load('news');
        $login = Widget::load('login');
        $cart = Widget::load('cart');
        $topmenu = Widget::load('topmenu');

        // Вывод в шаблон
        $this->template->styles[] = 'media/css/style.css';
        $this->template->cart = $cart;
        $this->template->top_menu = $topmenu;
        $this->template->block_left = array($menu, $login);
        $this->template->block_right = array($news);
    }
}