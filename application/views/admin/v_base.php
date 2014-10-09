<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?=$site_name?> | <?=$page_title?></title>
    <meta content="text/html; charset=utf8" http-equiv="content-type">
    
    <?foreach ($styles as $file_style):?>
        <?=html::style($file_style)?>
    <?endforeach?>
    <?foreach ($scripts as $file_script):?>
        <?=html::script($file_script)?>
    <?endforeach?>
</head>

<body>
<div id="conteiner">
<div id="header"><h2>Панель администратора</h2>
    

    <div class="menu_admin"><?=$menu_admin?></div>
    
</div>

    <div id="content">
        <div id="content_list">
        <!-- Центральный блок-->
            <? if (isset($block_center)):?>
                <td>
                    <h2><?=$page_title?></h2>
                    <div id="status"><?=$submenu?></div>
                    <? foreach ($block_center as $cblock):?>
                        <?=$cblock?>
                    <?endforeach?>
                </td>
            <?endif?>
            <!-- /Центральный блок-->
           </div> 
    </div>
    </div>

</body>