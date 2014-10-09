<div id="menu">
    
    
    <ul >
                <li>
                <?=HTML::anchor('/main', 'Главная')?>
                </li>
                <li>
                <?=HTML::anchor('/catalog', 'Каталог')?>
                </li>
                <li>
                <?=HTML::anchor('/news', 'Новости')?>
                </li>
                <li>
                <?=HTML::anchor('/articles', 'Статьи')?>
                </li>
                
                
                 <?foreach ($menu as $name => $menu):?>
                 <?if(in_array($select, $menu)):?>
                <li>
                <?=Html::anchor('page/'. $menu[0], $name, array('class' => 'select'))?>
                <?else:?>
                <?=Html::anchor('page/'. $menu[0], $name)?>
                <?endif?>
                
                </li>
                <?endforeach?>
                </ul>
   
    
</div>

        
               