<div class="error" align="center"><?=$info;?></div>
<div id="contact-form">
    <form action="index.php?view=contacts" method="post" class="contact-form">
        <label><?=lang('email');?></label><br />
        <input type="text" name="email" value="" /><br /><br />
        <label><?=lang('text');?></label><br />
        <textarea name="text"></textarea><br />
        <label><?=lang('captcha');?></label><br />
        <input type="text" readonly="readonly" name="captcha" value="<?=captcha();?>" size="4" class="captcha" /><input type="text" name="captcha2" size="5" maxlength="5" /><br />
        <input type="submit" name="send" value="<?=lang('send');?>" class="reg-btn" />
    </form>
</div>