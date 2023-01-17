<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center my-4">Treni previsti per oggi</h1>

    <div class=" d-flex justify-content-center">

        <table class="table table-dark text-center">
            <thead class="text-danger">
                <tr>

                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">In Orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($trains as $item)
                    <tr>

                        <td>{{ $item->Azienda }}</td>
                        <td>{{ $item->Stazione_di_partenza }}</td>
                        <td>{{ $item->Stazione_di_arrivo }}</td>
                        <td>{{ $item->Orario_di_partenza }}</td>
                        <td>{{ $item->Orario_di_arrivo }}</td>
                        <td>{{ $item->In_orario }}</td>
                        <td>{{ $item->Cancellato }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    @foreach ($trains as $train)
        <div></div>

    @endforeach
</body>
</html>
