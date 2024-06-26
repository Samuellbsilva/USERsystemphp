<main class="flex w-full flex-col pb-20 justify-center align-center text-center ">


    <div class="flex flex-col justify-center align-center text-center">

        <?php include "list.php"?>

        <div class="flex flex-col bg-gradient-to-r from-slate-50 to-slate-100 p-10 p-20">
            <p class="text-center text-3xl pb-5">Usuarios </p>
            <div class="flex justify-end pb-5 hover:font-bold">
                <button class="bg-gray-200 hover:bg-gray-500 w-25 px-3 py-1 rounded-xl mr-5"><a href=""
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
                    <tr>
                        <td class=" ">1</td>
                        <td class=" ">GABRIEL</td>
                        <td class=" ">ssss</td>
                        <td> <button class="bg-green-200 hover:bg-green-500 w-25 px-3 py-1 rounded-xl"><a href=""
                                    class="text-center btn btn-primary material-symbols-outlined">
                                    edit </a>
                                </a></button>
                            <button class="bg-red-300 hover:bg-red-500  px-3 py-1 rounded-xl"><a href=""
                                    class="text-center btn btn-primary material-symbols-outlined">
                                    Delete </a></button>
                        </td>
                    </tr>
                    <tr>
                        <td class=" ">2</td>
                        <td class=" ">Columbus</td>
                        <td class=" "> 357</td>
                        <td  class=""> <button class="bg-green-200 hover:bg-green-500 w-25 px-3 py-1 rounded-xl"><a href=""
                                    class="text-center btn btn-primary material-symbols-outlined">
                                    edit </a>
                                </a></button>
                            <button class="bg-red-300 hover:bg-red-500  px-3 py-1 rounded-xl"><a href=""
                                    class="text-center btn btn-primary material-symbols-outlined">
                                    Delete </a></button>
                        </td>
                    </tr>
                    <tr>
                        <td class=" ">3</td>
                        <td class=" ">Detroit</td>
                        <td class=" "> 357</td>
                        <td> <button class="bg-green-200 hover:bg-green-500 w-25 px-3 py-1 rounded-xl"><a href=""
                                    class="text-center btn btn-primary material-symbols-outlined">
                                    edit </a>
                                </a></button>
                            <button class="bg-red-300 hover:bg-red-500  px-3 py-1 rounded-xl"><a href=""
                                    class="text-center btn btn-primary material-symbols-outlined">
                                    Delete </a></button>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>




    </div>


</main>