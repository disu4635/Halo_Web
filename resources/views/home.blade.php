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
                <p class="text-justify font-light">Jefe Maestro es un supersoldado Spartan-II mejorado genéticamente y entrenado desde una edad temprana para convertirse en la máxima arma de la humanidad. Es reconocible por su armadura verde con visor dorado y su estatura imponente.</p>
            </div>
        </div>
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('jefe_maestro')}}" >
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
                <p class="text-justify font-light">El Inquisidor, o Arbiter, es un título otorgado a un miembro destacado de la especie Sangheili (Elites) en la jerarquía del Covenant. Su apariencia puede variar dependiendo del individuo, pero generalmente llevan una armadura distintiva y ceremonial.</p>
            </div>
        </div>
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('inquisidor')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/inquisidor_home.jpg')}}" alt=""></a>
        </div>
    </section>
    <section class="flex my-5">
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('verdad')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/verdad_home.jpg')}}" alt=""></a>
        </div>
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10" >
                <h1 class="my-4 text-center text-2xl font-medium">Profeta Verdad</h1>
                <p class="text-justify font-light">El Profeta de la Verdad es un miembro de alto rango de la raza alienígena conocida como los Profetas en el Covenant. Su apariencia es la de un ser pequeño y encorvado, con una piel pálida y arrugada. Suele vestir una túnica ceremonial y portar un bastón de mando</p>
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
                <p class="text-justify font-light">El Didacta es una figura prominente de la raza de los Forerunners, una antigua y avanzada civilización alienígena en el universo de Halo. Su apariencia varía dependiendo del medio en el que se presenta, pero generalmente es representado como un ser alto, imponente y de estructura musculosa, con una armadura tecnológica distintiva.</p>
            </div>
        </div>
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('didacta')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/didacta_home.jpg')}}" alt=""></a>
        </div>
    </section>
    <section class="flex my-5">
        <div class="w-1/2 h-80 px-5">
        <a href="{{url('bibliotecaria')}}"><img class=" w-full h-full object-cover" src="{{url('/assets/imagenes/bilbiotecaria_home.webp')}}" alt=""></a>
        </div>
        <div class="w-1/2 flex items-center justify-center">
            <div class="mx-10" >
                <h1 class="my-4 text-center text-2xl font-medium">Bliotecaria</h1>
                <p class="text-justify font-light">La Bibliotecaria es una entidad Forerunner conocida por su sabiduría y su dedicación al conocimiento y preservación de la historia. En su forma física, suele aparecer como una figura femenina alta y esbelta, con una presencia serena y seriedad en su mirada.</p>
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
