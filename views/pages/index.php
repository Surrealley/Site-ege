<table cellpadding="0" cellspacing="0" border="0" class="block" style="margin-right: 30px;">
            <tr>
                <td valign="top">
                    <div class="block-title"><?=lang('news');?></div>
                    <div class="block-text">Для успешной сдачи экзамена по информатике нужно иметь хорошие теоретические знания, основанные на материалах школьной программы, пройденных за годы все обучения. Важное значение имеют и практические навыки – умение писать элементарные программы, решать задачи, находить правильные взаимосвязи. При подготовке важно использовать комплексный подход – изучать теорию, постоянно подкрепляя ее решением практических заданий. В этом разделе вы приобретете серьезные знания для решения задач по ЕГЭ.</div>
                    <div class="block-read" align="center"><a href="index.php?view=news"><?=lang('read');?> &raquo;</a></div>
                </td>
            </tr>
        </table>
        
        <table cellpadding="0" cellspacing="0" border="0" class="block" style="margin-right: 30px;">
            <tr>
                <td valign="top">
                    <div class="block-title"><?=lang('video');?></div>
                    <div class="block-text">На нашем сайте мы собрали массу видеоматериала, который поможет учащемуся быстро и качественно подготовиться к ЕГЭ по информатике. В представленных уроках и лекциях вы сможете ближе познакомиться с принципами создания программ и реализации различных алгоритмов, узнать о новых способах сортировки различных данных и научиться эффективно оперировать их массивами, поймете, как описывать языки программировании, чтобы достичь успешного результата на экзамене.
</div>
                    <div class="block-read" align="center"><a href="index.php?view=video"><?=lang('see');?> &raquo;</a></div>
                </td>
            </tr>
        </table>
        
        <table cellpadding="0" cellspacing="0" border="0" class="block">
            <tr>
                <td valign="top">
                    <div class="block-title"><?=lang('gallery');?></div>
                    <div class="block-text">Лучшей мотивацией учеников при подготовке к ЕГЭ по информатике являются результаты выпускников предыдущих лет, которые смогли подготовиться и сдать данный экзамен на высокий бал. Поэтому мы представляем фотографии наших лучших учеников с их достижениями, связанными с изучением такого увлекательного предмета, как информатика. Мы уверены, что вы сможете не только достичь их результатов, но также и превзойти их. Надеемся, что скоро и ваши фотографии появятся в нашей галерее! Дорогу осилит идущий!</div>
                    <div class="block-read" align="center"><a href="index.php?view=photos"><?=lang('read');?> &raquo;</a></div>
                </td>
            </tr>
        </table>
        
        <div class="clear"></div>

            <table align="center" width="939" cellpadding="0" cellspacing="0" border="0">
                <tr>
                	<td valign="top">
                    
                        <table width="620" cellpadding="0" cellspacing="0" border="0" class="last-news">
                            <tr>
                                <td colspan="2">
                                   <div class="last-news-title"><?=$last_news['title'];?></div> 
                                </td>
                            </tr>
                            <tr>
                                <td width="300">
                                    <img src="userfiles/news/<?=$last_news['img'];?>" alt="" width="300" />
                                </td>
                                <td valign="top">
                                    <div class="last-news-text">
                                        <p><?=str_size($last_news['text'], 400).'...';?></p>
                                    </div>
                                    <div><a href="index.php?view=news&t=<?=$last_news['title_url'];?>"><?=lang('read_more');?> &raquo;</a></div>
                                </td>
                            </tr>
                        </table>
                        
                    </td>
                </tr>
            </table> 