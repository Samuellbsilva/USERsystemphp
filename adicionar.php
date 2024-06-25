<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Create</title>
   
<link rel="shortcut icon" href="favicon-32x32.png" type="image/x-icon">
</head>
<body class="flex flex-col w-screen h-screen">
    
<nav class="flex flex-row w-full justify-center  bg-gray-300 p-5">
    <div class="flex-col justify-center">

<h1 class="text-center text-3xl">User Create</h1>
</div>
</nav>


<main class="flex w-full flex-col p-20 bg-blue-500 "> 

<div class="flex justify-center p-5">

<h1 class="text-white text-4xl">Seja Bem Vindo:</h1>

</div>

<div class="flex flex-rown ">


<?php include "/xampp/htdocs/USERcreate/components/list.php" ?>

<div class="flex w-3/4 flex-col bg-blue-50 ">
    <p class="text-center ">Lista de usuarios </p>
 <button class="bg-green-300 w-50"><a href="" class="text-center btn btn-primary">Adicionar</a></button>

 <?php include '/xampp/htdocs/USERcreate/components/form.php'; ?>

</div>




</div>


</main>


<footer class="flex justify-center  bg-gray-200 p-5">
<p class="text-center text-2xl">My social networks</p>
</footer>

<script src="https://cdn.tailwindcss.com"></script>

<script src="scripts/script.js"></script>
<link rel="stylesheet" href="styles/style.css">
</body>
</html>