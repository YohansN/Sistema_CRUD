<?php
include 'conexao.php';
$buscar_cadastros = "SELECT * FROM clientes";
$query_cadastros = mysqli_query($connection, $buscar_cadastros) or die(mysqli_error($connection));
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Cadastro Clientes - CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Busca os dados para exibição na página -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <!-- Linha com indices de cada coluna -->
                    <th>Id</th>
                    <th>Nome Cliente</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($receber_cadastros = mysqli_fetch_array($query_cadastros))
                {
                    $id = $receber_cadastros['id'];
                    $nome = $receber_cadastros['nome'];
                    $email = $receber_cadastros['email'];
                    $telefone = $receber_cadastros['telefone'];
                ?>
                <tr>
                    <!-- Mostrar na tela: -->
                    <td scope="row"> <?php echo $id; ?> </td>
                    <td> <?php echo $nome; ?> </td>
                    <td> <?php echo $email; ?> </td>
                    <td> <?php echo $telefone; ?> </td>
                    
                    <!-- Editar: -->
                    <td>
                        <form action="editar.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="text" name="nome" value="<?php echo $nome; ?>">
                            <input type="text" name="email" value="<?php echo $email; ?>">
                            <input type="text" name="telefone" value="<?php echo $telefone; ?>">
                            <input type="submit" class="btn btn-light" value="EDITAR">
                        </form>
                    </td>

                    <!-- Deletar: -->
                    <td>
                        <form action="excluir.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" class="btn btn-danger" value="EXCLUIR">
                        </form>
                    </td>

                </tr>
                <?php }; ?>
                
                <tr>
                    <!-- Cadastrar: -->
                    <form action="cadastro.php" method="POST">
                        <td></td>
                        <td> <input type="text" name="nome" placeholder="Nome"> </td>
                        <td> <input type="text" name="email" placeholder="Email"> </td>
                        <td> <input type="text" name="telefone" placeholder="Telefone"> </td>
                        <td> <input type="submit" class="btn btn-primary" value="CADASTRAR"> </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>