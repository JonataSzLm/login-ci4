<!-- https://youtu.be/hJU5PPZrOPQ -->

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça o login no sistema</title>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    </head>
    <body class="text-center">
    
        <main class="form-signin w-100 m-auto">
            <form action="<?= base_url('login/signIn') ?>" method="post">
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                <div class="form-floating">
                <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Nome de Usuario">
                <label for="inputName">Nome</label>
                </div>
                <div class="form-floating">
                <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Sua Senha">
                <label for="inputPassword">Senha</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            </form>
            <?php $msg = session()->getFlashdata('msg')?>
            <?php if (!empty($msg)) : ?>
                <div class="alert alert-danger">
                    <?php echo $msg ?>
                </div>
            <?php endif; ?>
            <p>Clique <?php echo anchor('home', 'aqui') ?> para ir para tela inicial.</p>
        </main>

    </body>
</html>
