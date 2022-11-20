<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <script>
        function confirma() {
            if (!confirm('Deseja excluir o registro?')) {
                return false
            }
            return true
        }
    </script>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <header>
        <div class="heroe">
            <h1>Bem-Vindo, <?php echo session()->name ?></h1>
            <h2>Clique <?php echo anchor('login/signOut', 'aqui') ?> para sair.</h2>
        </div>
        <div class="container mt-5">
            <?php echo anchor(base_url('admin/create'), 'Novo Funcionário', ['class' => 'btn btn-success mb-3']) ?>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Foto</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($equipes as $equipe): ?>
                    <tr>
                        <td><?php echo $equipe['id'] ?></td>
                        <td><?php echo $equipe['name'] ?></td>
                        <td><?php echo $equipe['email'] ?></td>
                        <td><?php echo $equipe['phone'] ?></td>
                        <td><?php echo $equipe['photo'] ?></td>
                        <td>
                            <?php echo anchor('admin/edit/'.$equipe['id'], 'Editar')?>
                            <?php echo anchor('admin/delete/'.$equipe['id'], 'Excluir', ['onclick' => 'return confirma()'])?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php echo $pager->links(); ?>
        </div>
    </header>
</body>
</html>
