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
            <h2 class="text-3xl  font-semibold leading-7 text-gray-900">Seguimiento de Alumnos</h2>
        
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Alumnado</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Realiza un seguimiento pesonalizado de cada alumno.</p>
    
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-3">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Centro de Estudios</label>
                    <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option disabled>Selecciona el centro de estudios</option>
                        <option>Sagrera</option>
                        <option>Maquinista</option>
                        <option>Maquinista motorsport</option>
                    </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Curso</label>
                    <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option disabled>Selecciona el curso</option>
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
                        <option disabled>Selecciona el grupo</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>D</option>
                    </select>
                    </div>
                </div>

            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Información del Alumno</h2>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-6">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                <div class="mt-2">
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-1/2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Apellido 1</label>
                <div class="mt-2">
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Apellido 2</label>
                <div class="mt-2">
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
                </div>
              </div>
      
              <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
                </div>
              </div>
      
              <div class="sm:col-span-2 ">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                <div class="mt-2">
                  <input type="text" name="city" id="city" autocomplete="tel" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
                </div>
              </div>
      
      
              <div class="sm:col-span-2">
                <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal code</label>
                <div class="mt-2">
                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
                </div>
              </div>
            </div>
          </div>

    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
    <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Buscar</button>
    </div>
</form>

</div>