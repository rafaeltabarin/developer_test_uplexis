<!DOCTYPE html>
<html>
    <head>
        <title>Sintegra API</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
       
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Sistema de Login</h1>
                <form method="POST" action="login">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="usuario" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Entrar</button>
                </form>
            </div>
        </div>
    </body>
</html>