<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Talwind</title>
</head>
<body>
    <div>
    <nav class="flex items-center justify-between flex-wrap bg-green-200 p-6">
            <div class="flex items-center flex-wrap text-write mr-6">
                <img src="https://www.gobiernoabierto.ec/wp-content/uploads/2020/01/Logo-Esquel-color.png" alt="logo" class="fill-current h-100 w-100 mr-2" width="250" height="250">
            </div>
            <div class="block lg:hidden">
                <button id='boton' class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div id='menu' class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class=" px-4 py-2 text-white rounded hover:text-green-100
    hover:bg-white text-xl font-semibold">
                        Cursos
                    </a>
                </div>
        </nav>
        <!--======= Fin de Navegacion =========-->
        <!--======= Inicio header=========-->
        <header class="bg-white shadow">
            <div class="py-6 px-4 sm:px-6 lg:items-center ">
            <h1  class="text-3xl font-bold text-green-300">Cursos Recibidos</h1>
            
            </div>
        </header>     
                <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right">
                    <ul>
                        <li>
                            <lavel >Nombre del usruario : </lavel>
                            <imput>Alisson Chavez</imput>
                        </li>
                        <li>
                            <lavel>Número de Cedula : </lavel>
                            <imput>1755731542</imput>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        
        <div class="mb-80 container py-10 2xl:p-30 xl:p-20">
            <table class="border-collapse border border-green-200">
                <thead class="text-left border-collapse border border-green-200 bg-green-200">
                    <tr>
                        <th class="p-3 w-1/2 ">Cursos</th>
                        <th class="p-3 w-1/4 ">Horas Realizadas</th>
                        <th class="p-3 w-1/4 ">Descarga</th>
                    </tr>
                </thead>
                <tbody class="border-collapse border border-green-200 ">
                    <tr class="border-collapse border border-green-200 ">
                        <td class="p-3">Intro to CSS</td>
                        <td class="p-3">Adam</td>
                        <td class="p-3">858</td>
                    </tr>
                    <tr>
                        <td class="p-3">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                        <td class="p-3">Adam</td>
                        <td class="p-3">112</td>
                    </tr>
                        <tr class="border-collapse border border-green-200 ">
                        <td class="p-3">Intro to JavaScript</td>
                        <td class="p-3">Chris</td>
                        <td class="p-3">1,280</td>
                    </tr>
                        <tr class="border-collapse border border-green-200 ">
                        <td class="p-3">Intro to JavaScript</td>
                        <td class="p-3">Alisson</td>
                        <td class="p-3">Proceso</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--======= footer =========-->
        <footer class="p-0 xl:mx-10 lg:mx-5 md:mx-0">
            <ul class="p-0 py-2 border border-t-2 border-green-200 border-b-0 border-l-0 border-r-0 grid grid-cols-1 md:grid-cols-2 gap-x-0 gap-y-0 md:gap-y-0">
                <li class="xl:py-0 lg:py-0 md:py-5 sm:py-5 py-2 text-center"><a href="#">Contactos</a></li>
                <li class="xl:py-0 lg:py-0 md:py-5 sm:py-5 py-2 text-center"><a href="#">Redes sociales</a></li>
            </ul>
        </footer>

    </div>

</body>
</html>