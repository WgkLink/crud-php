<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>

    <?php if ($user) { ?>
        <form method="post" action="index.php?action=edit&id=<?php echo $user['id']; ?>">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>

            <input type="submit" value="Salvar">
        </form>
    <?php } else { ?>
        <p>Usuário não encontrado.</p>
    <?php } ?>
</body>
</html>
