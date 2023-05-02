<div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-10 mx-auto col-lg-5">

                <!-- <h1 class="pb-3 text-center text-light">Sistema Acadêmico</h1>

                <h3 class="pb-3 text-center fw-bold text-light">Login</h3> -->

                <form class="p-4 p-md-5 border rounded-3 bg-dark" method="post">
                    
                    <h1 class="pb-4 text-center text-light">Sistema Acadêmico</h1>

                    <h3 class="pb-4 text-center fw-bold text-light">Login</h3>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="login" id="inputLogin" placeholder="Login" required>
                        <label for="inputLogin">Login</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="senha" id="inputSenha" placeholder="Senha" required>
                        <label for="inputSenha">Senha</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label class="text-light" for="checkboxLembrar">
                            <input type="checkbox" name="checkboxLembrar" value="lembrar de mim"> Lembrar de mim
                        </label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-lg btn-primary fw-bold" name="acao" type="submit">Entrar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>