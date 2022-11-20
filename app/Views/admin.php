<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <header>
        <div class="heroe">
            <h1>Bem-Vindo, <?php echo session()->name ?></h1>
            <h2>Clique <?php echo anchor('login/signOut', 'aqui') ?> para sair.</h2>
        </div>
    </header>
</body>
</html>
