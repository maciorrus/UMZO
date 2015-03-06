<form method="post" action="index.php?step=2">
    <fieldset> 
        <legend><?php echo $lang['admin_data']; ?>:</legend>
        Login:<br/>
        <input type="text" name="admin_login" value="<?php echo $_SESSION['admin_login']; ?>"><br/>
        <?php echo $lang['password']; ?>:<br/>
        <input type="password" name="admin_pass" value="<?php echo $_SESSION['admin_pass']; ?>"><br/>
        E-mail:<br/>
        <input type="text" name="admin_mail" value="<?php echo $_SESSION['admin_mail']; ?>"><br/>
         <?php echo $lang['first_name']; ?>:<br/>
        <input type="text" name="admin_name" value="<?php echo $_SESSION['admin_name']; ?>"><br/>
         <?php echo $lang['last_name']; ?>:<br/>
        <input type="text" name="admin_last_name" value="<?php echo $_SESSION['admin_last_name']; ?>"><br/>
    </fieldset>
    <input type="submit" value="Next"><br/> 
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