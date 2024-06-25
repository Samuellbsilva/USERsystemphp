
<main class="flex w-full flex-col p-20 bg-blue-500 "> 

<div class="flex justify-center p-5">

<h1 class="text-white text-4xl">Seja Bem Vindo:</h1>

</div>

<div class="flex flex-rown ">

<?php include "list.php" ?>

<div class="flex w-3/4 flex-col bg-blue-50 ">
    <p class="text-center ">Lista de usuarios </p>
 <button class="bg-green-300 w-50"><a href="" class="text-center btn btn-primary">Adicionar</a></button>
<table class="border-collapse border border-slate-500 w-full">
  <thead class="bg-gray-400">
    <tr>
      <th class="border border-slate-600 p-10">ID</th>
      <th class="border border-slate-600 p-10">NOME</th>
      <th class="border border-slate-600 p-10">EMAIL</th>
      <th class="border border-slate-600 p-10 justify-center">AÇÕES</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr >
      <td class="border border-slate-700 ">1</td>
      <td class="border border-slate-700 ">GABRIEL</td>
      <td class="border border-slate-700 ">ssss</td>
      <td> <button class="bg-green-300">EDITAR</button> <button class="bg-red-300">EXCLUIR</button></td> 
    </tr>
    <tr>
      <td class="border border-slate-700 ">2</td>
      <td class="border border-slate-700 ">Columbus</td>
      <td class="border border-slate-700 "> 357</td>
      <td> <button class="bg-green-300">EDITAR</button> <button class="bg-red-300">EXCLUIR</button></td> 
    </tr>
    <tr>
      <td class="border border-slate-700 ">3</td>
      <td class="border border-slate-700 ">Detroit</td>
      <td class="border border-slate-700 "> 357</td>
      <td> <button class="bg-green-300">EDITAR</button> <button class="bg-red-300">EXCLUIR</button></td> 
    </tr>


  </tbody>
</table>
</div>




</div>


</main>