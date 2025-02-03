<nav>
    <ul>
    <?php
        foreach ($dates as $key => $value) {
            echo "<li><a href='{$key}'>{$value}</a><li>";
        }
        ?>
    </ul>
</nav>

