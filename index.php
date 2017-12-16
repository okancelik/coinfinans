<!doctype html>
<html lang="en">
<head>
    <title>Coin Finans</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" >
    <link rel="stylesheet" href="assets/css/tema.css?v=<?=mt_rand(1,999999)?>" >
</head>
<body>
    <header>
        <div class="ust">
            <div class="logo">
                <a href="#">
                    <img src="assets/gorseller/logo.png" alt="">
                </a>
            </div>
        </div>
        <div class="alt">
            <div class="marketlerButonu">
                <a href="#">
                    <i class="fa fa-reorder"></i> MARKEdTLER
                </a>
            </div>
            <div class="headerCoinler">
                <ul>
                    <?php $coinler = array("COSS", "BCH", "BTC", "ETH", "PAY", "SOG", "PAY", "LTC", "BCH", "BTC", "ETH", "PAY", "SOG", "PAY", "LTC") ?>
                    <?php foreach($coinler as $c): ?>
                        <li>
                            <div class="baslik"><?=$c?></div>
                            <div class="bakiye">
                                0.000 (0.001<i class="fa fa-try"></i>)
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <div class="cuzdanlarButon">
                <a href="#">
                    CÜZDANLAR
                </a>
            </div>
            <div class="temaSecimi">

                <form>
                    <div class="toggle">
                        <input type="checkbox" name="toggleSwitch" id="toggleSwitch" />
                        <label for="toggleSwitch">Activate awesome feature?</label>
                    </div>
                </form>
            </div>
        </div>
    </header>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>