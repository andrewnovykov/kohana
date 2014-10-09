<p><div class="contact">

<br/>

<?=Form::open('page/contacts')?>
<table width="100%" border="0">
    <tr>
        <td><?=Form::label('name', 'Ваше Имя')?>:</td>
        <td><?=Form::input('name', null, array('size' => '30'))?></td>
    </tr>
    <tr>
        <td><?=Form::label('email', 'Ваш E-mail')?>:</td>
        <td><?=Form::input('email', null, array('size' => '30'))?></td>
    </tr>
     <tr>
         <td valign="top"><?=Form::label('text', 'Сообщение')?>:</td>
        <td><?=Form::textarea('text')?></td>
        </tr>
    <tr>
        <td colspan="2"><?=$captcha?></td>
        </tr>
        <tr>
        <td width="15%">Текст с изображения</td>
        <td width="85%"><input type="text" name="captcha" /></td>
        </tr>

       
    
    <tr>
        <td colspan="2" align="center"><?=Form::submit('send', 'Отправить')?></td>
    </tr>
    
</table>

<?=Form::close()?>




</div>
