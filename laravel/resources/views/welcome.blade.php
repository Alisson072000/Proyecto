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
        <header class="w-full px-6 bg-green-200 py-3 flex flex-wrap">
            <p class="text-white text-4xl italic font-bold">Esquel</p>
            <a class="text-3xl px-14 text-white font-sans" href="#">cursos</a>
        </header>

        <header  class="w-screen px-6 bg-green py-6" >
            <!--======= Logo =========-->
            <div class="container mx-auto max-w-7xl md:flex justify-between items-center bg-OliveDrab">
                <a href="#" class=" py-6 w-full text-center md:text-left md:w-auto text-gray-600 no-underline  flex justify-center items-center ">
                <img src="../img/logoEsquel.png">
                </a>
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
        <header>
            <p class="container xl:pl-20 lg:text-left text-center text-5xl font-bold px-8 mt-10">Cursos Recibidos</p>
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
                <li class="xl:py-0 lg:py-0 md:py-5 sm:py-5 py-2 text-center"><a href="#">contactos</a></li>
                <li class="xl:py-0 lg:py-0 md:py-5 sm:py-5 py-2 text-center"><a href="#">redes sociales</a></li>
            </ul>
        </footer>

    </div>

</body>
</html>
