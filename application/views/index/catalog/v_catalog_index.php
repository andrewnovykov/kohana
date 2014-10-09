<div class="catalog">
    <br/>
<?foreach($categories as $cat):?>
    <?=html::anchor('catalog/cat/'. $cat->id . '', "<h4>$cat->title</h4>")?><br/>
<?endforeach?>

</div>