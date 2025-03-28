<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <!-- link cdn bootstrap - css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- meu css -->
    <link rel="stylesheet" href="css/estilo_index.css">
</head>
<body>

        <div class="container">

            <form action="processa.php" method="POST" class="w-100 cx-forms" style="max-width: 400px; margin-top: 80px; margin-left: 350px;">

                <div class="titulo">
                    <h3>ATIVIDADE DE PHP</h3>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example1" class="form-control" name="email" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example2" class="form-control" name="senha"/>
                    <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                            <label class="form-check-label" for="form2Example34"> Remember-me </label>
                        </div>
                    </div>

                    <div class="col text-end">
                        <!-- Simple link -->
                        <a href="#" class="color">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="text-center">
                    <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in">
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="#" class="color">Register</a></p>
                </div>
            </form>

        </div>

        <!-- link cdn bootstrap - js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>