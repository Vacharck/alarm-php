<h1>Create account</h1>

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

        <label for="name">
            Name:
        </label>
        <input type="text" name="name" id="name">

        <label for="">
            Email:
        </label>
        <input type="email" name="email" id="email">

        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">

        <div>
            <label>
                <input name="term" id="term" type="checkbox" value="1">
                Accept terms
            </label>
        </div>

        <input type="submit" value="Create account">
    </form>
</div>