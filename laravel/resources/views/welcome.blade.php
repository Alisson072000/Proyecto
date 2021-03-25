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
<header class="w-full px-6 bg-green-200 py-0 flex flex-wrap">
<p class="text-base text-white text-4xl italic font-bold">Esquel</p>
    </header>

<header  class="w-screen px-6 bg-green py-6 " >
      <!--======= Logo =========-->
      <div class="container mx-auto max-w-4xl md:flex justify-between items-center bg-OliveDrab">
        <a href="#"
          class=" py-6 w-full text-center md:text-left md:w-auto text-gray-600 no-underline  flex justify-center items-center ">
          <img src="img/logoEsquel.png">
        </a>
       
        <div class="w-full md:w-auto mb-6 md:mb-0 text-center md:text-right ">
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
    <p class="text-left md:text-center text-5xl font-bold">Cursos Recibidos</p>
    </header>

<div class=" container pt-6 ">
<table class="border-collapse border border-green-200 ">
  <thead class="border-collapse border border-green-200 bg-green-200 ">
    <tr>
      <th class="w-1/2 ">Cursos</th>
      <th class="w-1/4 ">Horas Realizadas</th>
      <th class="w-1/4 ">Descarga</th>
    </tr>
  </thead>
  <tbody class="border-collapse border border-green-200 ">
    <tr class="border-collapse border border-green-200 ">
      <td>Intro to CSS</td>
      <td>Adam</td>
      <td>858</td>
      
    </tr>
    <tr>
      <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
      <td>Adam</td>
      <td>112</td>
    </tr>
    <tr class="border-collapse border border-green-200 ">
      <td>Intro to JavaScript</td>
      <td>Chris</td>
      <td>1,280</td>
    </tr>
    <tr class="border-collapse border border-green-200 ">
      <td>Intro to JavaScript</td>
      <td>Chris</td>
      <td>1,280</td>
    </tr>
  </tbody>
</table>
</div>

</div> 
</body>
</html>