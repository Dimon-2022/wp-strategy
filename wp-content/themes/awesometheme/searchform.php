<form action="<?php echo home_url();?>" method="GET">
    <label for="search">
        Enter:
        <input type="text" name="s" id="search" placeholder="type your word..." value="<?php echo $_GET['s']; ?>">
    </label>
        <input type="submit" value="Submit">
</form>
