<div id="main__form-auth" class="uk-padding uk-position-fixed uk-position-center">
    <?php if (strpos($_SERVER['PATH_INFO'], "register")): ?>
        <h2>Register</h2>
    <?php else: ?>
        <h2>Login</h2>
    <?php endif;?>
    <form action="<?=$requestUrl?>" method="post">
        <input type="hidden" name="_csrfToken" value="<?=$_SESSION['CSRF_TOKEN']?>">
        <input type="text" name="email" value="<?=$email ?? ''?>" placeholder="Email" class="uk-input">
        <input type="password" name="password" placeholder="Password" class="uk-input">
        <input type="submit" value="Submit" class="uk-button uk-button-default uk-width-1-1">
    </form>
</div>