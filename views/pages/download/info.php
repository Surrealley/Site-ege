<?
if(isset($title) && check_data($view,$page_data['title_url'],$lang))
{?>
    <table cellpadding="0" cellspacing="0" align="center" width="560" border="0" class="video">
        <tr>
            <td align="center">
                <div class="news-title"><?=$page_data['title'];?></div>
                <div class="iframe"><?=$page_data['code'];?></div>
                <div class="date"><?=lang('posted');?>: <?=$page_data['date'];?> / <?=$page_data['time'];?></div>
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
foreach($video as $item):?>
<table cellpadding="0" cellspacing="0" align="center" width="560" border="0" class="video">
        <tr>
            <td align="center">
                <div class="news-title"><a href="index.php?view=video&t=<?=$item['title_url'];?>"><?=$item['title'];?></a></div>
                <div class="iframe"><?=$item['code'];?></div>
            </td>
        </tr>
</table>
<div class="line"></div>
<?endforeach;}?>
<h3 style="text-align: center";>Материалы для подготовки к ЕГЭ по информатике </h3>
<h4 style="text-align: center; color: red";>1. Информация </h4>

<ul class="list2a">
      <li><a href="views/pages/download/ege4.doc" style="color: black">Кодирование и декодирование данных</a></li>
      <li><a href="views/pages/download/ege7.doc" style="color: black">Кодирование графической информации</a></li>
      <li><a href="views/pages/download/ege7-2.doc" style="color: black">Кодирование звуковой информации</a></li>
      <li><a href="views/pages/download/ege7-v.doc" style="color: black">Скорость передачи информации</a></li>
      <li><a href="views/pages/download/ege8.doc" style="color: black">Кодирование, комбинаторика</a></li>
      <li><a href="views/pages/download/ege11.doc" style="color: black">Вычисление количества информации</a></li>
</ul>
<br />
<h4 style="text-align: center; color: red";>2. Системы счисления </h4>
<ul class="list2a">
      <li><a href="views/pages/download/ege14.doc" style="color: black">Позиционные системы счисления</a></li>      
</ul>
<br />
<h4 style="text-align: center; color: red";>3. Логика </h4>
<ul class="list2a">
      <li><a href="views/pages/download/ege2.doc" style="color: black">Составление таблицы истинности логической функции</a></li>
     <li><a href="views/pages/download/tabist.zip" style="color: black">Программа-тренажёр для решения задач 2 (таблицы истинности)</a></li> 
     <li><a href="views/pages/download/ege15.doc" style="color: black">Анализ истинности логического выражения</a></li> 
  
  
</ul>

