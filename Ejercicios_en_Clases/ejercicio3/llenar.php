<form action="sumar.php" method="post">
<?php
    $num = $_POST['num'];
    $n = $num;
    for ($i = 0; $i <= $n; $i++) {
        ?>
        <input type='number' name='valor<?php echo $i?>'><br>
        <?php
    }
    ?>
    <input type="hidden" name="na" value="<?php echo $n?>">
    <input type="submit" value="sumar">
</form>