<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/kredit.css">
    <link rel="icon" size="32x32" href="../img/icon.png">
    <title>CARNEWS</title>
</head>

<body>
    <? require_once "./components/header.php" ?>
    <div class="wrapper">
        <h1 class="h1">Кредитный калькулятор</h1>


        <!-- Форма кредитного калькулятора -->
        <form id="loan-form">
            <label>Сумма кредита:</label>
            <input type="number" id="amount" placeholder="Введите сумму кредита" required>

            <label>Процентная ставка:</label>
            <input type="number" step="0.01" id="interest" placeholder="Введите процентную ставку" required>

            <label>Срок погашения:</label>
            <input type="number" id="years" placeholder="Введите срок погашения в годах" required>

            <input type="submit" value="Рассчитать" />
        </form>

        <!-- Раздел результатов кредитного калькулятора -->
        <div id="results" class="result"></div>

    </div>
    <? require_once "./components/footer.php" ?>
    <script src="../js/script.js"></script>
    <script src="../js/calc.js"></script>
</body>

</html>