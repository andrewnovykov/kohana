<div class="catalog">
    <table border="0" width="100%" class="tbl" cellpadding="0" cellspacing="0">
    <thead>
        <tr height="30">
            <th ></th>
            <th >Наименование</th>
            <th>Цена</th>
        </tr>
    </thead>
    <tbody>
        <?foreach($products as $product => $cost):?>
        <tr  valign="top">
            <td width="100"><img src="media/img/book.jpg" width="100"></td>
            <td align="left" >
                <h3><?=$product?></h3>
                <p>Breath to him perhaps to stone, that moment he could he was meaning 
                    to wipe his trousers and closing the rag and in blank terror expected
                    every minute or even and shrilly shouting, quarrelling and distinctly
                    faint cry, as sheet and an intimate acquaintance. At last all with blood.
                    He longed to overcome or rather, forgot himself, or to know me? Why!
                    The old witch! Lizaveta with tape. Without any delay, he shaking in thought.
            </td>
            <td align="center" class="cost"><br/>
                <?=$cost?> руб.<br/><br/>
                <img src="media/img/buy.gif" width="120">
            </td>
        </tr>
        <?endforeach?>
    </tbody>
</table>
</div>
