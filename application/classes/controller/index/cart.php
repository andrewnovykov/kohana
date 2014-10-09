<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Корзина
 */
class Controller_Index_Cart extends Controller_Index {

    public function before()
    {
        parent::before();

        // Выводим в шаблон
        $this->template->block_left = null;
        $this->template->block_right = null;
    }

    public function action_index()
    {
        $products_s = $this->session->get('products');

        if ($products_s != NULL)
        {
            $products = ORM::factory('product');

            foreach($products_s as $id => $count)
            {
                $products->or_where('id', '=', $id);
            }

            $products = $products->find_all();
        }
        else
        {
            $products = NULL;
        }

        $content = View::factory('index/cart/v_cart_index', array(
            'products' => $products,
            'products_s' => $products_s,
            'sum' => 0,
        ));

        // Выводим в шаблон
        $this->template->title = 'Ваша корзина';
        $this->template->page_title = 'Ваша корзина';
        $this->template->block_center = array($content);

    }

    public function action_add()
    {
        // Получить существующие товары из куков
        $products_s = $this->session->get('products');
        $id = $this->request->param('id');

        if (isset($products_s[$id])) {
            $products_s[$id]++;
        }
        else {
            $products_s[$id] = 1;
        }

        $this->session->set('products', $products_s);
        $this->request->redirect('cart');
    }


    public function action_order()
    {
        if (!$this->auth->logged_in()) {
            $this->request->redirect('login');
        }

        $content = View::factory('index/cart/v_cart_order', array(
        ));

        // Выводим в шаблон
        $this->template->title = 'Оформление заказа';
        $this->template->page_title = HTML::anchor('cart', 'Ваша корзина') . ' &rarr; ' . 'Оформление заказа';
        $this->template->block_center = array($content);
    }


}