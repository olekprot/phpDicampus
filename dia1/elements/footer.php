<nav>
    <ul>
    <?php 
        foreach ($politicas as $key => $value) {
           echo "<li><a href='{$value}'>{$key}</a><li>";
        }
    ?>
    </ul>
</nav>

