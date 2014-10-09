

<div id="menu_admin">
    <?=Html::anchor('',Html::image('media/images/home.png'))?>
    <?foreach ($menu as $name => $menu):?>
    <?if(in_array($select,$menu)):?>
		
                <?=HTML::anchor('/admin'.$menu[0], $name, array('class'=>'select'))?>
                    <?else:?>
                <?=HTML::anchor('/admin'.$menu[0], $name)?>
                    <?endif?>
                
    <?endforeach?>
	</div>

