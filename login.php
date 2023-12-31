<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Iniciar Sesión</title>
</head>
<body>

<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-one-third">
                <div class="box">
                    <h1 class="title has-text-centered">Iniciar Sesión</h1>

                    <form action="procesar_login.php" method="post">
                        <div class="field">
                            <label class="label">Usuario</label>
                            <div class="control">
                                <input class="input" type="text" name="usuario" placeholder="Nombre de usuario" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Contraseña</label>
                            <div class="control">
                                <input class="input" type="password" name="clave" placeholder="Contraseña" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-text-centered">
                                <button class="button is-primary" type="submit">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
