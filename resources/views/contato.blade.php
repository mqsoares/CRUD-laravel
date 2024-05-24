<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Contato</h1>
    <form method='POST' action='/contato'>
        {{ csrf_field() }}
        Nome: <input type='text'  name='nome' />
        Email: <input type='text' name='email' />
        <input type='submit' value='enviar' />
    </form>
</body>
</html>
