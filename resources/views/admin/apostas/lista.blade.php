@extends("template.layout", ["current" => "lista"])
@section("body")
    <div class="row-fluid">
        <div class="card card-cadastro">
            <div class="card-header">
                <h3 class="panel-title text-center">Lista de apostas</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Cep</th>
                                <th class="text-center">Rua</th>
                                <th class="text-center">Numero</th>
                                <th class="text-center">Aposta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $key => $result)
                            <tr class="teste">
                                <td class="text-center">
                                    {{ $result['nome'] }}
                                </td>
                                <td class="text-center">
                                    {{ $result['email'] }}
                                </td>
                                <td class="text-center">
                                    {{ $result['cep'] }}
                                </td>
                                <td class="text-center">
                                    {{ $result['rua'] }}
                                </td>
                                <td class="text-center">
                                    {{ $result['numero'] }}
                                </td>
                                <td class="text-center">
                                    {{ $result['aposta'] }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection("body")