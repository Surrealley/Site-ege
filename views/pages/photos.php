<script type="text/javascript">
   $(function() {
        $('a[rel=lightbox]').lightBox();
    });
</script>
<table id="gallery" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr>
            <td valign="top">
            <?foreach($photos as $item):?>
                <a href="userfiles/photos/<?=$item['img'];?>" rel="lightbox" ><img src="userfiles/photos/<?=$item['img'];?>" /></a>
            <?endforeach;?>    
            </td>
        </tr>
 </table>