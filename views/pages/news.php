<?
if(isset($title) && check_data($view,$page_data['title_url'],$lang))
{?>
   <div align="center" class="news-title" style="margin-top: 20px;"><?=$page_data['title'];?></div>
    <div class="news-full-text">
        <?=$page_data['text'];?>
        <div class="date"><?=lang('posted');?>: <?=$page_data['date'];?> / <?=$page_data['time'];?></div>
    </div>
    
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
    <div class="error" align="center"><?=$info;?></div>
    
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
            
<?}
else
{
foreach($news as $item):?>
<table cellpadding="0" cellspacing="0" align="center" width="70%" border="0" class="news">
        <tr>
            <td width="300" valign="top">
                <a href="index.php?view=news&t=<?=$item['title_url'];?>"><img src="userfiles/news/<?=$item['img'];?>" alt="<?=$item['title'];?>" width="300" /></a>
            </td>
            <td valign="top" class="news-text-td">
                <div class="news-title"><a href="index.php?view=news&t=<?=$item['title_url'];?>"><?=$item['title'];?></a></div>
                <?=str_size($item['text'], 450).'...';?>
            </td>
        </tr>
</table>
<div class="line"></div>
<?endforeach;
}?>