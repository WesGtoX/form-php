<?php   
    $users = @json_decode(file_get_contents('users.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nome completo</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Telefone</th>
        </tr>

        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['nome'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['cpf'] ?></td>
                <td><?= $user['fone'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <br>
    <input type="button" value="Voltar" onClick="history.go(-1)">
</body>
</html>
