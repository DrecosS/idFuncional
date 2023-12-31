<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-cadastro.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form class="form" action="enviar.php" method="POST">
            <div class="foto">
                <label for="foto">Imagem: </label>
                <input name="fotoagente" type="file">
            </div>
        <div class="conteudo">
            <div class="nome">
                <label for="nome">Nome:</label><br>
                <input name="nome" type="text" id="nome">
            </div>
            <div class="matricula">
                <label for="matricula">Matrícula: </label><br>
                <input name="matricula" type="number" maxlength="7" id="matricula">
            </div>
            <div class="dtnascimento">
                <label for="dtNascimento">Nascimento: </label><br>
                <input name="dtNascimento" type="date" id="dtNascimento">
            </div>
            <div class="filiacao">
                <label for="mae">Mãe: </label><br>
                <input name="mae" type="text" id="mae"><br>
                <label for="pai">Pai: </label><br>
                <input name="pai" type="text" id="pai">
            </div>
            <div class="naturalidade">
                <label for="naturalidade">Naturalidade: </label><br>
                <input name="naturalidade" type="text">
            </div>
            <div class="validade">
                <label for="dtvalidade">Data de Validade: </label><br>
                <input name="dtvalidade" type="date" id="dtvalidade">
            </div>
            <div class="expedida">
                <label for="dtexpedida">Data de Expedição: </label><br>
                <input name="dtexpedida" type="date" id="dtexpedida">
            </div>
            <div class="tpoSanguineo">
                <label for="tpoSang">Tipo Sanguíneo: </label><br>
                <input name="tpoSang" id="tpoSang" type="text" maxlength="2">
            </div>
            <div class="btn_salvar">
                <input name="submit" type="submit" value="Salvar" id="submit">
            </div>      
    </div>
    </form>
    </div>
</body>
</html>