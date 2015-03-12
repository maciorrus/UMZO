<form method="post" action="index.php?step=3">
    <fieldset> 
        <legend><?php echo $lang['database_configuration']; ?>:</legend>
        <?php echo $lang['host_name']; ?>:<br/>
        <input type="text" name="host_name" value="<?php echo $_SESSION['host_name']; ?>"><br/>
        <?php echo $lang['db_name']; ?>:<br/>
        <input type="text" name="db_name" value="<?php echo $_SESSION['db_name']; ?>"><br/>
        <?php echo $lang['db_user']; ?>:<br/>
        <input type="text" name="db_user" value="<?php echo $_SESSION['db_user']; ?>"><br/>
        <?php echo $lang['db_pass']; ?>:<br/>
        <input type="password" name="db_pass" value="<?php echo $_SESSION['db_pass']; ?>"><br/>    
        Prefix:<br/>
        <input type="text" name="db_prefix" value="<?php echo $_SESSION['db_prefix']; ?>"><br/>    
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