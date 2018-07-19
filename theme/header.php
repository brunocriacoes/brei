<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Integral Brei Real Estate</title>
    <link rel="stylesheet" href="<?= THEME ?>disc/css/style.css?<?= uniqid() ?>">
    <link rel="stylesheet" href="<?= THEME ?>disc/css/mobile.css?<?= uniqid() ?>" media="( max-width: 760px )">
    <link rel="shortcut icon" href="<?= THEME ?>disc/logo/ico.png" type="image/x-icon">
    <!-- <meta http-equiv="refresh" content="1"> -->
</head>
<body>

    <header class="header">
        <nav class="container menu">
            <label for="menu-mobile" class="menu-mobile-ico">
                <img src="<?= THEME ?>disc/ico/menu.png" alt="menu">
            </label>
            <img src="<?= THEME ?>disc/logo/logo.png" alt="Integral Fanace">
            <?php GetTheme( 'nav' ) ?>
        </nav>
    </header>

    <input type="checkbox"  id="menu-mobile" hidden>
    <div class="menu-mobile-box">
        <label for="menu-mobile">
            <img src="<?= THEME ?>disc/ico/cancel.png" alt="menu">
        </label>
    </div>
    <div class="menu-mobile">
        <?php GetTheme( 'nav-2' ) ?>
    </div>
    
