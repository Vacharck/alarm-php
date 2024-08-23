<div>
    <h1>
        Logo
    </h1>
    <form method="get">
        <input placeholder="Search..." type="search" name="search" id="search">
        <input type="submit" value="Search">
    </form>
</div>

<div class="Navbar">  
    <div>
        <h2>
            Hello, <?=$username?>
        </h2>
        <?php if(empty($_SESSION["USER"])):?>
            <a href="<?=ROOT?>/signin">
                sign in
            </a>
        <?php else: ?>
            <a href="<?=ROOT?>/signout">
                sign out
            </a>
        <?php endif;?>
        
        <a href="<?=ROOT?>/alarmnew">
            new alarm
        </a>
    </div>
</div>