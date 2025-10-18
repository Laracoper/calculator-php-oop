<?

require __DIR__ . '/../vendor/autoload.php';
// error_reporting(0);

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
    <link rel="shortcut icon" href="img/Frame-17svg.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Простой калькулятор</h1>
        <div class="calc">
            <form action="" method="post" class="form">
                <input type="number" name="a" placeholder="первое число" class="field">
                <select name="znak" class="field">
                    <option value="">выбрать действие</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
                <input type="number" name="b" placeholder="второе число" class="field">
                <button type="submit" class="btn">посчитать</button>
            </form>
            <div class="result">
                <p>результат: <span class="res"><?= $calculator->calc() ?></span></p>

            </div>
        </div>

    </div>
</body>

</html>