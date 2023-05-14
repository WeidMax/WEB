<form action="" method="GET">

<label for = "textarea">Введите текст</label>
    <textarea rows = "2" name = "textarea"></textarea>
    <input type = "submit" value = "Посчитать">
</form>

<?php
//Пункт А
if (!empty($_GET['textarea'])) {
    $text = $_GET['textarea'];
    echo "Количество слов: ", str_word_count($text, $format = 0), "<br>";
    echo "Количество знаков: ", strlen($text);
}
?>