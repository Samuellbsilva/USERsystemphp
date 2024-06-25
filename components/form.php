<form>
  <div class="space-y-12 p-8">
  
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
             
              <input type="text" name="username" id="Yourname" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Your name">
              
            </div>
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900 mt-5">Email</label>
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300  focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
             
           
             <input type="email" name="username" id="Yourname" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="youremail@provedor.com">
             
           </div>
           <label for="username" class="block text-sm font-medium leading-6 text-gray-900 mt-5">CPF</label>
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300  focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
             
           
             <input type="text" name="username" id="Yourname" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="123456789-10">
             
           </div>
           <label for="username" class="block text-sm font-medium leading-6 text-gray-900 mt-5">Sexo</label>
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300  focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
             
           
            <label>
            <input type="checkbox" name="sex" value="male">
             Male
            </label>
          
        
             
           </div>
           <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300  focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
             
           
             <label>
             <input type="checkbox" name="sex" value="Female">
             Female
             </label>
           
         
              
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
        </div>

        <button class="bg-green-300 w-50 justify-center text-center" type="submit">Gravar</button>
        <button class="bg-green-300 w-50 justify-center text-center" type="submit">Voltar</button>

</form>