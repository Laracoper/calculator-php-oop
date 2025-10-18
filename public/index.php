<?

require __DIR__.'/../vendor/autoload.php';
use App\Calculator;


$calculator = new Calculator();
// print_r($calc->getPost()['znak']);
// echo $calc->getData();
// echo $calc->calc();
// $calculator->res;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Простой калькулятор</h1>
    <form action="" method="post">
        <input type="text" name="a" placeholder="первое число">
        <select name="znak">
            <option value="">выбрать действие</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="text" name="b" placeholder="второе число">
        <button type="submit">посчитать</button>
    </form>
    <div class="result">
        <p>результат: <span class="res"><?= $calculator->calc() ?></span></p>

    </div>
</body>

</html>