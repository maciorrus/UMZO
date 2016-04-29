<form method="post" action="index.php?step=2">
    <fieldset> 
        <legend><?php echo $lang['site_settings']; ?></legend>
        <?php echo $lang['site_title']; ?>:<br/> 
        <input type="text" name="site_title" value="<?php echo getSValue('site_title'); ?>"><br/>
        <?php echo $lang['default_language']; ?>:<br/>
        <select name="lang">
            <option value="pl"  <?php if(getSValue('lang')=='pl') {
                                    echo 'selected="selected"';} 
                                ?>>Polski</option>
            <option value="en"  <?php if(getSValue('lang')=='en') {
                                    echo 'selected="selected"';} 
                                ?>>English</option>
        </select><br/>
        <?php echo $lang['site_type']; ?>:<br/>
        <select name="site_type">
            <option value="blog"  <?php if(getSValue('site_type')=='blog') {echo 'selected="selected"';} ?>>Blog</option>
        </select><br/>
    </fieldset>
    <input type="submit" value="<?php echo $lang['next']; ?>"><br/>
</form>

<script>

    $('input').keyup(function () {
        var str = "../php/session.php?" + $(this).attr('name') + '=' + $(this).val();
        $.ajax({
            url: str
        });
    });

</script>

<?php
?>