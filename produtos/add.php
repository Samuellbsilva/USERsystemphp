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
                <h4>Add Products</h4>
                <form action="add1.php" method="post">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="carne" name="nome">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">categoria</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" name="categoria"
                        placeholder="alimentos">
                </div>
                <div class="mb-3">
                    <label for="">Preço</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="" name="preco">
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