<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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
    <div id="container">

	
	
    <div id="header">

        <div class="logo">
            <a href="http://localhost/kohana/index">
            <img border="0" title="" alt="" src="/kohana/media/images/logo.gif">
            </a>
        </div>
        <?=$cart?>
        <h1><?=$site_name?></h1>
        <h3><?=$site_description?></h3>
        
        <?=$top_menu?>
        

        

        

        

    </div>
        
    
        
        
        
            <div id="left">
		
			<!-- левый блок -->
                     <? if (isset($block_left)):?>
                
                        <? foreach ($block_left as $lblock):?>
                        <?=$lblock?>
                    <?endforeach?>
               
                      <?endif?>
                        <!-- /левый блок -->
		
                    
			
                    
			
            </div>
        
        <div id="right">
                
                <!-- Правый блок-->
                 <? if (isset($block_right)):?>
                
                    <? foreach ($block_right as $rblock):?>
                        <?=$rblock?>
                    <?endforeach?>
               
                <?endif?>
                <!-- /Правый блок-->
		
                    
			
            </div>
        
            <div id="content">
			
			<!-- Центральный блок-->
                        <? if (isset($block_center)):?>
                
                        <h2><?=$page_title?></h2>
                    <? foreach ($block_center as $cblock):?>
                        <?=$cblock?>
                    <?endforeach?>
               
                    <?endif?>
                         <!-- /Центральный блок-->
                    <br><br><br><br>
		
		    
			
                    
			
            
        
            
            
            <div id="clear"></div>
        
    </div>
        
        
        
        
    <div id="footer">
        <p style="padding-top:5px">Copyright &copy; 2011 papapin</p>
    </div>

 </div>
	
	
	


</body>
</html>