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
    <table class="table table-dark table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th class='text-primary' scope="col">Azienda</th>
              <th scope="col">Stazione di partenza</th>
              <th class='text-primary' scope="col">Stazione di arrivo</th>
              <th scope="col">Orario di partenza</th>
              <th class='text-primary' scope="col">Orario di arrivo</th>
              <th scope="col">Codice treno</th>
              <th class='text-primary' scope="col">Numero carrozze</th>
              <th scope="col">In orario</th>
              <th class='text-primary' scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <th scope="row">{{$train['id']}}</th>
                <td class='text-primary'>{{$train['azienda']}}</td>
                <td>{{$train['stazione_di_partenza']}}</td>
                <td class='text-primary'>{{$train['stazione_di_arrivo']}}</td>
                <td>{{$train['orario_di_partenza']}}</td>
                <td class='text-primary'>{{$train['orario_di_arrivo']}}</td>
                <td>{{$train['codice_treno']}}</td>
                <td class='text-primary'>{{$train['numero_carrozze']}}</td>
                <td>{{$train['in_orario']}}</td>
                <td class='text-primary'>{{$train['cancellato']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>