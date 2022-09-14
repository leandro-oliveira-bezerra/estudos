<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="conteiner-fluid">
<div class=" row justify-content-center h-100 bg-white">
    <div class="d-flex justify-content-center col-xl-4 col-md-6 col-sm-8 col-xs-10 w-50  no-padding">
        <!-- Begin Form -->
        <div class="w-75 m-auto">
            <div class="d-flex justify-content-center logo-centered">
                <a href="http://gir.eco.br">
                    <img src="img/logo-icon.png" width="140" height="141" alt="logo">
                </a>
            </div>
            <h3 class="text-center">Acessar</h3>
            
                <form  class="form-group row justify-content-center" action="{{ route('login') }}" method="post">
                    
                    <div class="w-100 form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" autocomplete="true" value="" required>
                    </div>
                    <div class="w-100 form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div  style="background-color:#7eba65; width:95%;" class=" btn btn-lg border-0 btn-block btn btn-success btn-square border-radius-4 text-center mt-3">
                        <button style="color:white ;"  type="submit" role="button" class="btn">
                            Entrar
                        </button>
                        <div class="form-group row justify-content-center"></div>
                </form>
            </div>
            <p class="text-center mt-3 mb-3">ou</p>

            <div class=" ">
                <a style="width:100%;" href="{{ url('register') }}" class="w-75 btn btn btn-primary">Cadastrar-se</a>
            </div>

            <div class="d-flex justify-content-center mt-3 ">
                <a href="{{ url('reset') }}">Esqueceu sua senha ?</a>
            </div>
        </div>
        <!-- End Form -->
        
    </div>
    <div class="row justify-content-center w-100 mb-10">
                <div class="col-md-6">
                    <div class="mt-5 text-center">
                        <a>siga-nos no
                        </a>
                    </div>
                </div>
            </div>
</div>
</div>
