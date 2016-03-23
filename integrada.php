<!DOCTYPE html>
<html>
    <head>
        <title>Prova Feita | Integrada</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" href="_img/logo.ico" type="image/x-icon" />
        <link rel="stylesheet" href="_css/style.css" media="screen and (color)">
        <link rel="stylesheet" href="_css/mobile.css" media="(max-width: 720px)">
        <script type="text/javascript" src="_javascript/jquery-2.2.1.min.js"></script>
        <script type='text/javascript' src='_javascript/jqueryIntegrada.js'></script>
        <?php include "_php/functions.php"; ?>
        <style type="text/css">
            .green{
                color: #00FFFF;
            }

        </style>
    </head>
    <body>
        <?php include "_php/header.php";?>
        <div class="main">
            <form method="get" action="#">
                <fieldset>
                    <legend><strong>Integrada</strong></legend>
                    <fieldset class="field-border">
                        <legend>Quantidade de Questões</legend>
                        <input type="number" value="" id="number-of-issues"
                        min="0" max="40" placeholder="0" class="input-one"/>
                    </fieldset>
                    <fieldset class="field-border">
                        <legend>Quantidade de Acertos</legend>
                        <input type="number" value="" id="amount-of-hits" 
                        min="0" max="40" placeholder="0" class="input-one"/>
                    </fieldset>
                    <fieldset class="field-border-result">
                        <legend>Resultado</legend>
                        <span id="result"></span></br>
                        <span id="m2"></span>
                        </fieldset>
                    </fieldset>
                <input type="button" class="input-button" value="Calcular" id="calculate"/>
                <input type="button"  class="input-button" value="Limpar" id="clear"/>
            </div>
        </form>
        <?php include "_php/footer.php"; ?>
    </body>
</html>