@extends("template.layout", ["current" => "cadastro"])
@section("body")
    <div class="row-fluid">
        <div class="card card-cadastro">
            <div class="card-header">
                <h3 class="panel-title text-center">Acessar área Admistrativa</h3>
            </div>
            <div class="card-body">
                <form action="/action_page.php">
                    <div class="form-group">
                      <label for="email">Email: </label>
                      <input type="email" class="form-control" placeholder="Entre com email" id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Senha: </label>
                      <input type="password" class="form-control" placeholder="Entre com nome" id="pwd">
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Lembre-me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                  </form>
            </div>
        </div>
    </div>
@endsection("body")