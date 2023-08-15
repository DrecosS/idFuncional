<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-incial.css">
    
</head>
<body>
    <div class="container">
        <header>
            <form action="funcional.php" name="pesquisa" method="post">
            <div class="logo">
                <img src="img/Teste logo2.png" alt="">
            </div>
            <div class="box">
                <label for=""><b>Insira o número da matrícula do Agente:</b></label><br>
                <input class="btmatricula" type="text" name="matricula" onkeydown="if(this.value.lengh==7) return false;"><br>
                <input class="btn-consulta" id="btn-consulta" type="submit" value="Consultar">
            </div>
            </form>
        </header>
    </div>
</body>
</html>