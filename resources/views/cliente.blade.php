<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="csrf_token" content="{{ csrf_token() }}" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão de Clientes - Novo Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>

    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">

                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            <strong>Cadastro de Clientes</strong>
                            <div class="text-right">
                                <a href="/novocliente" class="btn btn-primary btn-sm">&plus;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped table-hover table-sm table-ordered">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Endereço</th>
                                    <th>Email</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($clientes as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->nome }}</td>
                                        <td>{{ $c->idade }}</td>
                                        <td>{{ $c->endereco }}</td>
                                        <td>{{ $c->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
