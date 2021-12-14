<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LiberAcademy</title>
</head>
<body>

        <label>Nome: </label>
        <input type="text" name="name" value="{{ $cadastro-> name}}">
        <br><br>
        <label>E-mail: </label>
        <input type="text" name="email" value="{{ $cadastro-> email}}">
        <br><br>
        <label>Senha: </label>
        <input type="text" name="password" value="{{ $cadastro-> password}}">
        <br><br>
        <label>Telefone: </label>
        <input type="text" name="phone" value="{{ $cadastro-> phone}}">
        <br><br>
        <label>Cidade: </label>
        <input type="text" name="cidade" value="{{ $cadastro-> cidade}}">
        <br><br>
    
</body>
</html>