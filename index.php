<?php
define('SITE_KEY', '6LdQFJsUAAAAAItR0HN5PzXPTsgWL3pZLqJZLpSO');
define('SECRET_KEY', '6LdQFJsUAAAAAFyweW66_X8GoYysjA-2lYBK1EEa');

// teste
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reCaptcha - V3 - Google</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src='https://www.google.com/recaptcha/api.js?render=<?= SITE_KEY ?>'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>


    <style>
        .panel {
            flex: 1;
            background: #ddd;
            justify-content: center;
            padding: 1% 3% 3% 3%;
            border: 1px solid #d1d1d1;
            width: 50%;
            justify: center;
            margin: 0 auto;
            border-radius: 5px;
            width: 90%;

        }

        .center {
            display: flex;
            justify-content: center;
          

        }

        .hr {

            color: white;
            border: 2px solid #fff;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <br />
    <div class="panel">
        <div class="center">
            <img src="https://suporters.com/views/_img/logo-mobile.png" />
        </div>
        <h3 class="center">reCaptcha - V3 - Google</h3>
        <hr class="hr" />
        <form action="post.php" method="POST">
            <input required id="name" placeholder="Nome..." class="form-control" type="text" name="name" /><br />
            <input required id="email" placeholder="E-Mail..." class="form-control" type="text" name="email" /><br />
            <input required id="phone" placeholder="Celular..." class="form-control" type="tel" name="phone" /><br />
            <textarea required id="msg" placeholder="Escreva sua mensagem..." name="msg" class="form-control"></textarea><br />
            <div class="center">
                <input style="width: 50%" class="btn btn-info" type="submit" value="Enviar" />
                &nbsp;&nbsp;&nbsp;
                <input style="width: 50%" class="btn btn-danger" type="reset" value="Limpar" />
            </div>

            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
        </form>

        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('<?= SITE_KEY ?>', {
                        action: 'form'
                    })
                    .then(function(token) {
                        console.log(token);
                        document.getElementById('g-recaptcha-response').value = token;
                    });
            });
        </script>
        
        <!-- Máscara formulário celular -->
        <script>
            $('input[type=tel]').mask("(99) 99999-999?9");
        </script>
        <!-- Máscara formulário celular -->


    </div>
    <br />
    <div class="center bold">SUPORTERS.COM</div>
</body>

</html> 