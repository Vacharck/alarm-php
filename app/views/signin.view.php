<h1>Sign in page</h1>

<div>
    <form method="post">
        <?php if(!empty($errors)):?>
            <div>
                <?php
                    foreach ($errors as $error) {
                        echo $error;
                        echo "</br>";
                    }
                ?>
            </div>
        <?php endif;?>
        
        <label for="email">
            Email:
        </label>
        <input type="email" name="email" id="email">

        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Login">
    </form>
    <a href="<?=ROOT?>/signup">Sign up</a>
</div>