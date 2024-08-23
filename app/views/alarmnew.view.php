<h1>New Alarm page</h1>

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
        <label for="title">
            Title:
        </label>
        <input type="text" name="title" id="title">
        <label for="summary">
            Summary:
        </label>
        <input type="text" name="summary" id="summary">
        <label for="end_date">
            Date:
        </label>
        <input type="datetime" name="end_date" id="end_date">
        <input type="submit" value="Create alarm">
    </form>
</div>