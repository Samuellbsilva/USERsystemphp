<?php
     include '../components/bancodds/conection.php';
    $sql = "select * from produtos";

    $resultado = $connectionBD->query($sql);

    mysqli_close($connectionBD);
?>

<!doctype html>
<html lang="en">

<head>
    <?php include "../components/header.php"; ?>
</head>

<body>

<?php include '../components/nav.php'; ?>

    <div class="container">
  


        <div class="row">
        <?php include "../components/list.php"?>
        
            <div class="col-9 dados">
                <h4>Client list</h4>
                <a href="add.php" class="btn btn-success mb-3">Adicionar</a>
                <table class="table table-striped">
                    <thead>
                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Product</th>
                            <th scope="col">preço</th>
                            <th scope="col">actions</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                    <?php while($item = mysqli_fetch_object($resultado)){?>
                        <tr>
                            <th scope="row"><?php echo $item->id; ?></th>
                            <td><?php echo $item->nome; ?></td>
                            <td><?php echo $item->categoria; ?></td>
                            <td><?php echo $item->preco; ?></td>
                            <td><a type="button" class="btn btn-outline-info" href="editar.php?id=<?php echo $item->id; ?>"> Edit
                                </a>
                                <a class="btn btn-outline-danger" href="delet.php?id=<?php echo $item->id; ?>">Delete</a>
                            </td>

                        </tr>
                        <?php }?>
                        
                    </tbody>
                </table>

            </div>

        </div>
       
    </div>
    </div>
    </div>

    <?php include '../components/footer.php'; ?>


    <?php include '../components/scripts.php'; ?>

</body>

</html>