<div id="top_product">
                 <h3>~Лучние Товары~</h3>

                <?foreach($products as $product) :?>
                 <div class="item" >
<img width="274" height="2" alt="" src="/kohana/media/images/bordtop.gif">
<div>
<img class="items" width="102" height="88" alt="" src="/kohana/media/images/item1.jpg">
<h1><?=$product->title?></h1>
<span>
<strong>Категория товара</strong>
Описание товара
</span>
<p>
<strong>$ 777</strong>
(валюта U.S.)
</p>
<a href="#">
<img width="129" height="20" alt="" src="/kohana/media/images/button1.gif">
</a>
<a href="#">
<img width="127" height="20" alt="" src="/kohana/media/images/button2.gif">
</a>
</div>
<img width="274" height="2" alt="" src="/kohana/media/images/bordbot.gif">
</div>
                <?endforeach?>
</div>


