<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#181a1b] text-[#e8e6e3]">
    <div class="flex items-center justify-center h-screen mb-5">
        <img src="{{url('/assets/imagenes/halo_home.jpg')}}" alt="Imagen" class="w-full h-full object-cover">
    </div>
    <header class="flex m-10 items-center justify-center bg-zinc-900">
        <h1 class="text-2xl font-semibold">UNSC</h1>
    </header>
    <section class="flex my-5">
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10">
                <h1 class="my-4 text-center text-2xl font-medium font-medium">Jefe Maestro Jhon 117</h1>
                <p class="text-justify font-light">Carter es el líder del Equipo Noble y lleva la designación de "Noble 1". Es reconocible por su armadura plateada y su casco distintivo.</p>
            </div>
        </div>
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('noble1')}}" >
            <img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/jhon117_home.jpg')}}" alt="">
        </a>
        </div>
    </section>
    <section class="flex my-5">
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('noble6')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/noble6_home.jpg')}}" alt=""></a>
        </div>
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10" >
                <h1 class="my-4 text-center text-2xl font-medium">Noble 6</h1>
                <p class="text-justify font-light">Noble Seis es un Spartan-III altamente habilidoso y valiente que desafía los obstáculos con determinación y tenacidad. Es un soldado eficiente y letal en el campo de batalla, capaz de adaptarse a diversas situaciones y enfrentar cualquier desafío que se le presente.</p>
            </div>
        </div>
    </section>
    <header class="flex m-10 items-center justify-center bg-zinc-900">
        <h1 class="text-2xl font-semibold">Covenant</h1>
    </header>
    <section class="flex my-5">
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10" >
                <h1 class="my-4 text-center text-2xl font-medium">Inquisidor</h1>
                <p class="text-justify font-light">Jun es el francotirador del Equipo Noble, designado como "Noble 3". Lleva una armadura verde y un casco con una visera alargada.</p>
            </div>
        </div>
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('noble3')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/inquisidor_home.jpg')}}" alt=""></a>
        </div>
    </section>
    <section class="flex my-5">
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('noble4')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/verdad_home.jpg')}}" alt=""></a>
        </div>
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10" >
                <h1 class="my-4 text-center text-2xl font-medium">Profeta Verdad</h1>
                <p class="text-justify font-light">Emile es el especialista en combate cuerpo a cuerpo del Equipo Noble, conocido como "Noble 4". Lleva una armadura negra y un casco con una cuchilla en la visera.</p>
            </div>
        </div>
    </section>
    <header class="flex m-10 items-center justify-center bg-zinc-900">
        <h1 class="text-2xl font-semibold">Prometeos</h1>
    </header>
    <section class="flex my-5">
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10" >
                <h1 class="my-4 text-center text-2xl font-medium">Didacta</h1>
                <p class="text-justify font-light">Jorge es el especialista en demoliciones del Equipo Noble, identificado como "Noble 5". Lleva una armadura plateada y un casco con una visera redonda.</p>
            </div>
        </div>
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('noble5')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/didacta_home.jpg')}}" alt=""></a>
        </div>
    </section>
    <section class="flex my-5">
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('noble6')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/bilbiotecaria_home.webp')}}" alt=""></a>
        </div>
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10" >
                <h1 class="my-4 text-center text-2xl font-medium">Bliotecaria</h1>
                <p class="text-justify font-light">Noble Seis es un Spartan-III altamente habilidoso y valiente que desafía los obstáculos con determinación y tenacidad. Es un soldado eficiente y letal en el campo de batalla, capaz de adaptarse a diversas situaciones y enfrentar cualquier desafío que se le presente.</p>
            </div>
        </div>
    </section>
</body>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            dark: '#181a1b',
          }
        }
      }
    }
  </script>
</html>
