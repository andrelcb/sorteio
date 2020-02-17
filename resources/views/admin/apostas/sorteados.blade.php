@extends("template.layout", ["current" => "lista"])
@section("body")
<div class="row-fluid">
    <div class="card card-cadastro">
        <div class="card-header">
            <a href="{{ Route('home') }}" class="btn btn-primary">Voltar</a>
            <h3 class="card-title text-center">Apostas e Ganhadores</h3>
            <button onclick="document.location.href = document.location.href"
            class="btn-refresh btn btn-default" type="submit"><i class="fas fa-sync"></i></button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Nome</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Cep</th>
                            <th class="text-center">Estado</th>
                            <th class="text-center">Cidade</th>
                            <th class="text-center">Rua</th>
                            <th class="text-center">Numero</th>
                            <th class="text-center">Aposta</th>
                            <th class="text-center">Acertos</th>
                            <th class="text-center">Ganhador</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados as $value)
                        @php
                        $corlinha = 'table-danger';
                        $icon = 'times';
                        @endphp
                        @if($value['ganhador'])
                        @php
                        $corlinha = 'table-success';
                        $icon = 'check';
                        @endphp
                        @endif

                        <tr class="{{ $corlinha }}">
                            <td class="text-center">
                                {{ $value['nome'] }}
                            </td>
                            <td class="text-center">
                                {{ $value['email'] }}
                            </td>
                            <td class="text-center">
                                {{ $value['cep'] }}
                            </td>
                            <td class="text-center">
                                {{ $value['estado'] }}
                            </td>
                            <td class="text-center">
                                {{ $value['cidade'] }}
                            </td>
                            <td class="text-center">
                                {{ $value['rua'] }}
                            </td>
                            <td class="text-center">
                                {{ $value['numero'] }}
                            </td>
                            <td class="text-center">
                                {!! $value['aposta'] !!}
                            </td>
                            <td class="text-center">
                                {{ $value['quantidadeDezenasSorteadas'] }}
                            </td>
                            <td class="text-center">
                                <i class="fas fa-{{ $icon }}"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="margin-top: 40px; margin-bottom: 40px;;"" class="card card-default card-cadastro">
        <div class="card-header">
            <h3 class="card-title text-center">Resultado</h3>
        </div>
        <div class="card-body text-center card-resultado">
            {{ $resultado }}
        </div>
    </div>
</div>
@endsection("body")
