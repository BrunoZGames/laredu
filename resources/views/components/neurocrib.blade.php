<div class="w-[70%] flex-1 m-auto py-8 ">
        <!--
    This example requires some changes to your config:
    
    ```
    // tailwind.config.js
    module.exports = {
        // ...
        plugins: [
        // ...
        require('@tailwindcss/forms'),
        ],
    }
    ```
    -->
    <form class="bg-white rounded-2xl shadow-xl p-8">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-8">
                <h2 class="text-3xl  font-semibold leading-7 text-gray-900">NeuroCrib</h2>
            
            </div>
    
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Diseña tu NeuroCrib</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Diseña el siguiente NeuroCrib, escoge la categoría el juego y elige a quien va destinado.</p>
        
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                
                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Categoría</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Atención Selectiva</option>
                            <option>Atención Sostenida</option>
                            <option>Atención Alternante</option>
                            <option>Atención Dividida</option>
                        </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Juego</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Atención Selectiva 1</option>
                            <option>Atención Sostenida 1</option>
                            <option>Atención Alternante 1</option>
                            <option>Atención Dividida 1</option>
                            <option>Atención Selectiva 2</option>
                            <option>Atención Sostenida 2</option>
                            <option>Atención Alternante 2</option>
                            <option>Atención Dividida 2</option>
                        </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Curso</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>1ESO</option>
                            <option>2ESO</option>
                            <option>3ESO</option>
                            <option>4ESO</option>
                            <option>1Bachillerato</option>
                            <option>2Bachillerato</option>
                        </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Grupo</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                        </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Alumno</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Todos</option>
                            <option>Alumno 1</option>
                            <option>Alumno 2</option>
                            <option>Alumno 3</option>

                        </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Dificultad</legend>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Elige la dificultad.</p>
                            <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-red-500">
                                <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Baja</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-red-500">
                                <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Media</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-red-500">
                                <label for="push-nothing" class="block text-sm font-medium leading-6 text-gray-900">Alta</label>
                            </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-span-full">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Comentarios</label>
                        <div class="mt-2">
                        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Los comentarios solo los puede ver el administrador.</p>
                    </div>

                </div>
            </div>
    
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
        <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Enviar</button>
        </div>
    </form>
    
</div>