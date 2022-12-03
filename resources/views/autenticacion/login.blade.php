<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/imagenes/naranja.png">
    <link href="/css/estilos.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="cuerpo">
    <div class="container w-75 bg-color mt-5 rounded shadow">
        <div class="row ">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                
            </div>
            <div class="col bg-white p-3 ps-5 pe-5 rounded-end">
                <div class="text-end">
                    <img class="devesoft" src="/imagenes/devesoft.png" alt="logo">
                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>
                
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('login') }}">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" autocomplete="off"/>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password"/>
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input">
                        <label for="connected" class="form-check-label" name="connected">Mantenerme conectado</label>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes cuenta? <a href="#">Registrate</a></span><br>
                        <span><a href="#">Recuperar contraseña</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>