

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿?</title>
    <link href="{{ asset('css/shared.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <main>
        <section id="key-features">
            <h1 class="section-title">Vamos a desayunar?</h1>
            <ul class="key-feature__list">
                <li class="key-feature">
                    <div class="key-feature__image">
                        <img src="{{ asset('taza-de-cafe.svg') }}">
                    </div>
                    <div class="button-two">
                        <!--<button class="button">Este era el que quería que escogieras</button>-->
                        <a href="{{ route('home.index') }}">Volver</button>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    
</body>
</html>