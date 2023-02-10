<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>

        <div class="container">
            <div class="row">

                @foreach($trains as $train)

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Azienda: {{$train->azienda}} </h5>
                            <p class="card-text m-0">Stazione di partenza: {{$train->stazione_di_partenza}}.</p>
                            <p class="card-text">Stazione di arrivo: {{$train->stazione_di_arrivo}}.</p>
                            <p class="card-text m-0">Orario di partenza: {{$train->orario_di_partenza}}.</p>
                            <p class="card-text">Orario di arrivo: {{$train->orario_di_arrivo}}.</p>
                            <p class="card-text">Numero carrozze: {{$train->numero_carrozze}}</p>
                            <p class="card-text m-0">
                                @if ($train->in_orario == 0)
                                Treno in orario.
                                @else
                                Treno in ritardo.
                                @endif
                            </p>
                            <p class="card-text">
                                @if ($train->cancellato == 0)
                                Stato treno: ok.
                                @else
                                Stato Treno: treno soppresso.
                                @endif
                            </p>
                            <a href="#" class="btn btn-primary">Acquista Biglietto</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

    </main>

</body>

</html>