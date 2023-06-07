<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>

    <form method="post" action="index.php?action=save">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" value="Salvar">
    </form>

    <h2>Usuários cadastrados:</h2>
    <ul>
        <?php while ($user = $users->fetchArray()) { ?>
            <li>
                <?php echo $user['name']; ?> - <?php echo $user['email']; ?>
                <a href="index.php?action=edit&id=<?php echo $user['id']; ?>">Editar</a>
                <a href="index.php?action=delete&id=<?php echo $user['id']; ?>">Excluir</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
