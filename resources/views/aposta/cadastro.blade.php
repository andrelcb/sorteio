@extends("template.layout", ["current" => "cadastro"])
@section("body")
<div class="row-fluid">
    <div class="card card-cadastro">
        <div class="card-header">
            <h3 class="panel-title text-center">Cadastro de aposta</h3>
        </div>
        <div class="card-body">
            <form id="form-cadastro">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">

                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" placeholder="Entre com nome" id="nome" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Entre com email"id="email" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">CEP</label>
                            <input type="text" class="form-control" name="cep" placeholder="Digite seu cep" id="cep" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Estado</label>
                            <input type="ext" class="form-control" name="estado" placeholder="Digite seu estado"
                                id="estado" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">cidade</label>
                            <input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade"
                                id="cidade" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Rua</label>
                            <input type="text" class="form-control" name="rua" placeholder="Digite sua rua" id="rua" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Numero</label>
                            <input type="number" class="form-control" name="numero"
                                placeholder="Digite o numero da sua casa" id="numero" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="pwd">Aposta:</label>
                            <input type="text" class="form-control" name="aposta" minlength="6" maxlength="6"
                                placeholder="Digite sua aposta da loteria" id="aposta" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="salvar btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection("body")
