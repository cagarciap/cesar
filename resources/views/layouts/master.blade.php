

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
    <div class="backdrop"></div>
    <div class="modal">
        <h1 class="modal__title">Estás segura?</h1>
        <div class="modal__actions">

                
                    <form method="POST" action="{{ route('planes.save') }}">
                        @csrf
                        <div class="disable-input">
                            <input type="text" id="name" name="name" value="a">
                            <input type="text" id="status" name="status" value="active">
                            <input type="number" id="value" name="value" value="">
                        </div>
                        <input type="submit" value="Si!" class="modal__action" />
                        <button class="modal__action modal__action--negative" type="button">No!</button>
                    </form>
        </div>
    </div>

    <main>
        <section id="key-features">
            <h1 class="section-title">Solo puedes elegir una opción!</h1>
            <ul class="key-feature__list">
                <li class="key-feature">
                    <div class="key-feature__image">
                        <img src="{{ asset('fresa.svg') }}">
                    </div>
                    <div>
                      @if($data["check"] == "true")
                        <button onclick=clickaction(this) class="button" disabled="" id="1">Elegir</button>
                      @else
                        <button onclick=clickaction(this) class="button" id="1">Elegir</button>
                      @endif
                    </div>
                </li>
                <li class="key-feature">
                    <div class="key-feature__image">
                        <img src="{{ asset('reproductor-de-video.svg') }}">
                    </div>
                    <div>
                      @if($data["check"] == "true")
                        <button onclick=clickaction(this) class="button" disabled="" id="2">Elegir</button>
                      @else
                        <button onclick=clickaction(this) class="button" id="2">Elegir</button>
                      @endif
                    </div>
                </li>
                <li class="key-feature">
                    <div class="key-feature__image">
                        <img src="{{ asset('ciudad.svg') }}">
                    </div>
                    <div>
                      @if($data["check"] == "true")
                        <button onclick=clickaction(this) class="button" disabled="" id="3">Elegir</button>
                      @else
                        <button onclick=clickaction(this) class="button" id="3">Elegir</button>
                      @endif
                    </div>
                </li>
                <li class="key-feature">
                    <div class="key-feature__image">
                        <img src="{{ asset('taza-de-cafe.svg') }}">
                    </div>
                    <div>
                      @if($data["check"] == "true")
                        <button onclick=clickaction(this) class="button" disabled="" id="4">Elegir</button>
                      @else
                        <button onclick=clickaction(this) class="button" id="4">Elegir</button>
                      @endif
                    </div>
                </li>
            </ul>
        </section>
    </main>
    
</body>
<script type="text/javascript">
    var backdrop = document.querySelector(".backdrop");
var modal = document.querySelector(".modal");
var modalNoButton = document.querySelector(".modal__action--negative");
var selectPlanButtons = document.querySelectorAll(".key-feature button");
var idSelected = 0;

function clickaction(b){
  if (b.id=="1"){
    idSelected = 1;
  }
  if (b.id=="2"){
    idSelected = 2;
  }
  if (b.id=="3"){
    idSelected = 3;
  }
  if (b.id=="4"){
    idSelected = 4;
  }
  console.log(idSelected);
  var inputNombre = document.getElementById("value");
    inputNombre.value = idSelected;
}

for (var i = 0; i < selectPlanButtons.length; i++) {
  selectPlanButtons[i].addEventListener("click", function() {
    modal.classList.add("open");
    backdrop.style.display = "block";
    setTimeout(function() {
      backdrop.classList.add("open");
    }, 10);
  });
}

backdrop.addEventListener("click", function() {
  mobileNav.classList.remove("open");
  closeModal();
});

if (modalNoButton) {
  modalNoButton.addEventListener("click", closeModal);
}

function closeModal() {
  if (modal) {
    modal.classList.remove("open");
  }
  backdrop.classList.remove("open");
  setTimeout(function() {
    backdrop.style.display = "none";
  }, 200);
}
</script>

</html>