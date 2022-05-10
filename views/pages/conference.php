
       <table cellpadding="0" cellspacing="0" align="center" width="560" border="0" class="video">
        <tr>
            <td align="center">
                <div class="news-title"><?=$page_data['title'];?></div>
                <!--<div class="iframe"><?//=$page_data['code'];?></div> -->
              
              
              <h3 style="text-align: center";>Онлайн-конференция по информатике</h3>
<div class="line"></div>
<div class="iv-embed" style="margin:0 auto;padding:0;border:0;width:642px;"><div class="iv-v" style="display:block;margin:0;padding:1px;border:0;background:#000;"><iframe class="iv-i" style="display:block;margin:0;padding:0;border:0;" src="https://open.ivideon.com/embed/v2/?server=100-Ih4Hpu5enGkwlvO0TDi2lo&amp;camera=0&amp;width=&amp;height=&amp;lang=ru" width="640" height="491" frameborder="0" allowfullscreen></iframe></div><div class="iv-b" style="display:block;margin:0;padding:0;border:0;"><div style="float:right;text-align:right;padding:0 0 10px;line-height:10px;"><a class="iv-a" style="font:10px Verdana,sans-serif;color:inherit;opacity:.6;" href="https://www.ivideon.com/" target="_blank">Powered by Ivideon</a></div><div style="clear:both;height:0;overflow:hidden;">&nbsp;</div><script src="https://open.ivideon.com/embed/v2/embedded.js"></script></div></div>
              
              
              
              
              
              
                <div class="date"><?//=lang('posted');?><!--: --> <?//=$page_data['date'];?> <!--/ --> <?//=$page_data['time'];?></div>
                
            </td>
        </tr>
    </table>
    <div class="line"></div>
    
    <?if(!empty($comments)){?>
    
        <h3 align="center"><?=lang('comments');?>:</h3>
        
        <?foreach($comments as $item):?>
        <table cellpadding="0" cellspacing="0" border="0" align="center" class="comment">
            <tr>
                <td>
                    <div><span class="comment-author"><?=$item['author'];?> <?=lang('says');?>:</span> <?=$item['text'];?></div>
                    <div class="comment-date"><?=$item['date'];?> / <?=$item['time'];?></div>
                </td>
            </tr>
        </table>
        <?endforeach;?>             
    <?}?>
    
        <h3 align="center"><?=lang('post_comment');?>:</h3>
        <!--<div class="error" align="center"><?//=$info;?></div> -->
    
       <div id="comment-form">  
        <form method="post" action="index.php?view=<?=$view;?>&t=<?=$page_data['title_url'];?>" class="comment-form">
            <label><?=lang('name');?>:</label><br />
            <input type="text" name="author" /><br />
            <label><?=lang('text');?>:</label><br />
            <textarea name="text"></textarea><br />
            <input type="hidden" name="note_id" value="<?=$page_data['title_url'];?>" />
            <input type="hidden" name="section" value="<?=$view;?>" />
            <label><?=lang('captcha');?>:</label><br />
            <input name="captcha" value="<?=captcha();?>" readonly="readonly" size="5" class="captcha"  /><input name="captcha2" value="" size="5" maxlength="5" /><br />
            <input type="submit" name="send" value="<?=lang('send');?>" class="reg-btn" />
        </form>
        </div>
    
    

<!--
<br>
<a href="views/pages/chat.php">Сайт </a>
-->
