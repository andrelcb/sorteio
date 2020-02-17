@extends("template.layout", ["current" => "lista"])
@section("body")
<div class="row-fluid">
    <div class="card card-cadastro">
        <div class="card-header">
            <a href="{{ Route('logout') }}">logout</a>
            <h3 class="panel-title text-center">Menu</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <a href="{{ Route('sortear') }}" class="btn btn-success">
                            <div class="card-body">
                                SORTEAR <i class="fas fa-sync"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <a href="{{ Route('lista') }}" class="btn btn-primary">
                            <div class="card-body">
                                APOSTADORES <i class="fas fa-users"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("body")
