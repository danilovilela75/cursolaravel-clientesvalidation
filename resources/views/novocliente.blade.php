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
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="/cliente" method="POST">

                            @csrf

                            <div class="form-group">
                                <label for="nome">Nome do cliente</label>
                                <input type="text" name="nome" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" placeholder="Nome Completo">
                                @if ($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nome') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="text" name="idade" id="idade" class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }} " placeholder="Idade do Cliente">
                                @if ($errors->has('idade'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('idade') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" name="endereco" id="endereco" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }} " placeholder="Endereço do cliente">
                                @if ($errors->has('endereco'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('endereco') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " placeholder="Email do Cliente">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <a href="/" class="btn btn-danger btn-sm">Cancelar</a>

                        </form>

                    </div>

                    @if ($errors->any())
                        <div class="card-footer">
                            @foreach ($errors->all() as $e)
                                <!--<div class="alert alert-danger" role="alert">
                                        $e
                                </div>-->
                            @endforeach
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
