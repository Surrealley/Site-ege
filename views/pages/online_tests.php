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
<h3 style="text-align: center";>Тесты по различным разделам информатики </h3>

<ul class="list2a">
      <li><a href="views/pages/tests/1.html" style="color: black">Таблицы истинности логического выражения.</a></li>
      <li><a href="views/pages/tests/2.html" style="color: black">Поиск информации в базе данных.</a></li>
      <li><a href="views/pages/tests/3.html" style="color: black">Кодирование и декодирование. Условие Фано.</a></li>
      <li><a href="views/pages/tests/4.html" style="color: black">Выполнение и анализ простых алгоритмов.</a></li>
      <li><a href="views/pages/tests/5-1.html" style="color: black">Анализ программ с циклами (Паскаль).</a></li>
      <li><a href="views/pages/tests/5-2.html" style="color: black">Анализ программ с циклами (Python).</a></li>
      <li><a href="views/pages/tests/5-3.html" style="color: black">Анализ программ с циклами (C++).</a></li>
      <li><a href="views/pages/tests/6.html" style="color: black">Кодирование графической информации.</a></li>
      <li><a href="views/pages/tests/6-2.html" style="color: black">Кодирование звуковой информации.</a></li>
      <li><a href="views/pages/tests/6-3.html" style="color: black">Скорость передачи данных.</a></li>
      <li><a href="views/pages/tests/7.html" style="color: black">Комбинаторика, составление слов.</a></li>
      <li><a href="views/pages/tests/7-2.html" style="color: black">Слова в алфавитном порядке.</a></li>
      <li><a href="views/pages/tests/8.html" style="color: black">Вычисление количества информации.</a></li>
      <li><a href="views/pages/tests/9.html" style="color: black">Анализ и выполнение алгоритмов для исполнителя Редактор.</a></li>
      <li><a href="views/pages/tests/10.html" style="color: black">Поиск путей в графе.</a></li>
      <li><a href="views/pages/tests/11.html" style="color: black">Позиционные системы счисления.</a></li>
  <li><a href="views/pages/tests/12.html" style="color: black">Логика и битовые операции.</a></li>
      <li><a href="views/pages/tests/12-2.html" style="color: black">Логика и делители.</a></li>
      <li><a href="views/pages/tests/12-3.html" style="color: black">Логика и множества чисел.</a></li>
      <li><a href="views/pages/tests/12-4.html" style="color: black">Логика и отрезки на числовой оси.</a></li>
      <li><a href="views/pages/tests/12-5.html" style="color: black">Логика и неравенства.</a></li>
      <li><a href="views/pages/tests/12-6.html" style="color: black">Логика и линейное программирование.</a></li>
      <li><a href="views/pages/tests/13.html" style="color: black">Рекурсивные алгоритмы (Паскаль).</a></li>
      <li><a href="views/pages/tests/13-2.html" style="color: black">Рекурсивные алгоритмы (Python).</a></li>
  <li><a href="views/pages/tests/13-3.html" style="color: black">Рекурсивные алгоритмы (C++).</a></li>
      <li><a href="views/pages/tests/14.html" style="color: black">Анализ программы с циклами и ветвлениями (Паскаль).</a></li>
      <li><a href="views/pages/tests/14-2.html" style="color: black">Анализ программы с циклами и ветвлениями (Python).</a></li>
      <li><a href="views/pages/tests/14-3.html" style="color: black">Анализ программы с циклами и ветвлениями (C++).</a></li>
      <li><a href="views/pages/tests/15.html" style="color: black">Динамическое программирование.</a></li>
      
     
</ul>
