<div class="catalog">    
            <h3>~Категории товаров~</h3>
            
            <?foreach($categories as $cat):?>
<?if($select == $cat->id):?>
<?=html::anchor('catalog/cat/' . $cat->id, $cat->title, array('class' => 'select'))?>
<?else:?>
<?=html::anchor('catalog/cat/' . $cat->id, $cat->title)?>
<?endif?>
<?endforeach?>
            <br>
            
            

</div>




