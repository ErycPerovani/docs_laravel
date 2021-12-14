<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LiberAcademy</title>
</head>
<body>
    <form action="/cliente/st" method="POST">
    @csrf
        <label>Nome: </label>
        <input type="text" name="name" >
        <br><br>
        <label>E-mail: </label>
        <input type="text" name="email">
        <br><br>
        <label>Senha: </label>
        <input type="text" name="password" >
        <br><br>
        <label>Telefone: </label>
        <input type="text" name="phone">
        <br><br>
        <label>Cidade: </label>
        <input type="text" name="city">
        <br><br>
        <button>Cadastrar</button>
    </form>
    
</body>
</html>