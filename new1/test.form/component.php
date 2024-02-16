<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$this->includeComponentTemplate();

$title = isset($_POST["title"]) ? $_POST["title"] : '';
$category = isset($_POST["category"]) ? $_POST["category"] : '';
$types = isset($_POST["types"]) ? $_POST["types"] : '';
$expenses = isset($_POST["expenses"]) ? $_POST["expenses"] : '';
$amount = isset($_POST["amount"]) ? $_POST["amount"] : '';
$purpose = isset($_POST["purpose"]) ? $_POST["purpose"] : '';
$notes = isset($_POST["notes"]) ? $_POST["notes"] : '';
$file = isset($_FILES["file"]["name"]) ? $_FILES["file"]["name"] : '';
$comment = isset($_POST["comment"]) ? $_POST["comment"] : '';

$emailTheme = 'Новая заявка';
$emailBody = "
	Название: $title
	Категория: $category
	Вид заявки: $types
	Расходы: $expenses
	Сумма: $amount
	Назначение: $purpose
	Заметки: $notes
	Файл: $file
	Комментарий: $comment
	";


$to = 'forselis@mail.ru';

$mailSent = mail($to, $emailTheme, $emailBody);


if ($mailSent) {
    echo "Заявка отправлена.";
	echo "<br>";
} else {
    echo "Заявка не отправлена";
	echo "<br>";
}



echo "Название - " . $title;
echo "<br>";
echo "Категория - " . $category;
echo "<br>";
echo "Вид заявки - " . $types;
echo "<br>";
echo "Расходы - " . $expenses;
echo "<br>";
echo "Сумма - " . $amount;
echo "<br>";
echo "Назначение - " . $purpose;
echo "<br>";
echo "Заметки - " . $notes;
echo "<br>";
echo "Файл - " . $file;
echo "<br>";
echo "Комментарий - " . $comment;

?>