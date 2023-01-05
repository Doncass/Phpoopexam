<?php
namespace  Donat\Phpoopexam\forms;

use Donat\Phpoopexam\views\Submitform ;
?>

<form method="post" action="Submitform.php">
    <input type="number" name="usedKw" placeholder="UsedkW/h">
    <input type="number" name="price" placeholder="Price">
    <hr/>
    <input type="radio" name="Dieninis" > Dieninis
    <input type="radio" name="Naktinis"> Naktinis
    <input type="date" name="data">
    <hr/>
    <input type="submit" name="Skaiciuoti kaina">
</form>
