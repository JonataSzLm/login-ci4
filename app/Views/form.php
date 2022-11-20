<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>
<body>
    <div class="container mt-5">

        <?php echo form_open('admin/store')?>
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($user['name']) ? $user['name'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo isset($user['email']) ? $user['email'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($user['phone']) ? $user['phone'] : '' ?>">
            </div>
            <div class="form-group">
                <label for="photo">Foto:</label>
                <input type="text" name="photo" id="photo" class="form-control" value="<?php echo isset($user['photo']) ? $user['photo'] : '' ?>">
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo isset($user['id']) ? $user['id'] : '' ?>">
            <input type="submit" class="btn btn-primary mt-3">
        <?php echo form_close(); ?>
    </div>
</body>
</html>