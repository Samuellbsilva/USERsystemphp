<?php

$id = $_GET['id'];




$sql = "select * from produtos where id = '$id';";

       
include '../components/bancodds/conection.php';

$resultado = $connectionBD->query($sql);

$item = mysqli_fetch_object($resultado);
mysqli_close($connectionBD);


?>





<!doctype html>
<html lang="en">

<head>
    <?php include "../components/header.php"; ?>
</head>

<body>
    


<?php include '../components/nav.php'; ?>
        <div class="row">
        <?php include "../components/list.php"; ?>
            <div class="col-9 dados">
                <h4>Edit Products</h4>
                <form action="edit.php" method="post">

                 <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                 
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"  nome="" value="<?php echo $item->nome; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" name="categoria"
                        placeholder="alimentos"  value="<?php echo $item->categoria; ?>">
                </div>
                <div class="mb-3">
                    <label for="">Preço</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="" name="preco"  value="<?php echo $item->preco; ?>">
                </div>
                
                    
            </div>
            <div class="mb-3">
                
                <button type="submit" class="btn btn-primary">Gravar</button>
                <a href="index.php" type="button" class="btn btn-danger">Voltar</a>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    <?php include '../components/footer.php'; ?>


    <?php include '../components/scripts.php'; ?>

</body>

</html>