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
        <script type='text/javascript' src='_javascript/jquery.js'></script>
        <?php include "_php/functions.php"; ?>
    </head>
    <body>
        <?php include "_php/header.php";?>
        <div class="main">
            <form>
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
                        <span class="message">Nota:</span>
                    </fieldset>
                </fieldset>
                <input type="submit" class="input-button" value="Calcular"/>
                <input type="reset"  class="input-button" value="Limpar" />
            </form>
        </div>
        <?php include "_php/footer.php"; ?>
    </body>
</html>