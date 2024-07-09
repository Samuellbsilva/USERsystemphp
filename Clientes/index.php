<?php 

    include '../components/bancodds/conection.php';
    $sql = " select * from clientes";

    $resultado = $connectionBD->query($sql);
    mysqli_close($connectionBD);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../components/header.php'; ?>

</head>

<body class="flex flex-col w-screen h-screen">

    <?php include '../components/nav.php'; ?>

    <main class="flex w-full flex-col pb-20 justify-center align-center text-center ">


<div class="flex flex-col justify-center align-center text-center">

    <?php include "../components/list.php"?>

    <div class="flex flex-col bg-gradient-to-r from-slate-50 to-slate-100 p-10 p-20">
        <p class="text-center text-3xl pb-5">Usuarios </p>
        <div class="flex justify-end pb-5 hover:font-bold">
            <button class="bg-gray-200 hover:bg-gray-500 w-25 px-3 py-1 rounded-xl mr-5"><a href="adicionar.php"
                    class="text-center btn btn-primary material-symbols-outlined">
                    add
                </a></button>
        </div>
        <table class="border-collapse  w-50">
            <thead class="bg-gray-300">
                <tr>
                    <th class=" px-10 ">ID</th>
                    <th class=" px-10 ">NOME</th>
                    <th class=" px-10 ">EMAIL</th>
                    <th class=" px-10 ">AÇÕES</th>
                </tr>
            </thead>
            <tbody class="text-center">

                <?php while($item = mysqli_fetch_object($resultado)) { ?>
                <tr>
                    <td class=" "> <?php echo $item->id; ?> </td>
                    <td class=" "> <?php echo $item->username; ?> </td>
                    <td class=" "> <?php echo $item->email; ?> </td>
                    <td> <a href="edit.php?id=<?php echo $item->id; ?>"
                                class="text-center btn btn-primary material-symbols-outlined">
                                edit </a>
                            </a>
                            <a href="#" onclick="confirmDelete(<?php echo $item->id; ?>);" 
                            class="text-center btn btn-primary material-symbols-outlined">Delete</a>
                             
                          
                             
                    </td>

                </tr>
                <?php  } ?>

               


            </tbody>
        </table>
    </div>




</div>


</main>
   

    <?php include '../components/footer.php'; ?>


    <?php include '../components/scripts.php'; ?>

<script>
function confirmDelete(id) {

    if(confirm("Tem certeza?"+ id)) window.location = "del.php?id=" + id;
     
    


}
</script>

</body>

</html>