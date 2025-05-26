<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Перевозчики</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
        <?php
            require_once "Transporter1.php";
            require_once "Transporter2.php";
            try {
                $transporter1 = new Transporter1('Первый перевозчик');
                $transporter2 = new Transporter2('Второй перевозчик');

                $transporters = array($transporter1, $transporter2);
                foreach ($transporters as $transporter) {
                    $transporter->setDeliveryCost(15);
                    $amount = $transporter->getDeliveryCost();
                    $name = $transporter->getName();

                    echo
                    "
                <div class = 'transporter'>
                    <div class='name'>$name</div>
                    <div class='amount'>$amount</div>
                </div>
                ";
                }
            }
            catch (InvalidArgumentException $e) {
                echo $e->getMessage();
            }
        ?>
    </div>
</body>
</html>