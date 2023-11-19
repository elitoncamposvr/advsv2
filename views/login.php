<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Entrar no Sistema</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">

    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/login.css" />
</head>

<body class="bg-slate-300">
    <div class="w-full h-screen flex justify-center items-center">
        <form method="post">
            <div class="w-96 min-h-min flex flex-col bg-white rounded-md shadow-md p-4">
                <h1 class="font-semibold w-full txt-lg text-center mt-3 mb-5">Entre com seus dados</h1>
                <?php if (isset($error) && !empty($error)) : ?>
                    <div class="warning"><?php echo $error; ?></div>
                <?php endif; ?>
                <div class="w-full mb-5">
                    <input type="text" name="email" id="email" placeholder="E-mail" class="inputs" required autofocus>
                </div>
                <div class="w-full mb-5">
                    <input type="password" name="password" id="password" placeholder="Senha" class="inputs" required>
                </div>
                <div class="w-full mb-5">
                    <button type="submit" class="w-full bg-slate-700 rounded-md p-3 text-white">Entrar</button>
                </div>
                <p class="text-center text-sm">Sistema Desenvolvido por <a target="_blank" href="https://7upweb.com.br/">7UpWeb</a></p>
            </div>
        </form>
    </div>
</body>

</html>