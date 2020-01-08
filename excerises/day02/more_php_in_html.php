<?php
    $one_more = true;
?>
<!DOCTYPE html>
<html>
<head>
    <title>More PHP in HTML</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>More PHP in HTML</h1>
    <ul>
        <li>One</li>
        <li>Two</li>
        <li>Three</li>
        <?php if ($one_more) { ?>
            <li>Four</li>
        <?php } ?>
        <?php 
        if ($one_more) {
            echo '<li>Five</li>';
        } 
        ?>
        <?= $one_more ? '<li>Six</li>' : '' ?>
    </ul>
        <?php for($i = 0; $i < 10; $i++ ) { ?>
            <li><?= "Value : $i" ?></li>
        <?php } ?>
    <ul>

    </ul>


</body>
</html>