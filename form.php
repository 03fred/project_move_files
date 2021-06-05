<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="container-fluid  mt-5 mb-5">
                <div class="card-header text-center">
                    <strong>Aplicação para mover arquivos</strong>
                </div>
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="directory" class="form-label">Diretorio do arquivo</label>
                        <input type="text" name="directory" required="true" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="new_directory" class="form-label">Novo diretorio do arquivo</label>
                        <input type="text" name="new_directory" required="true" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">Nome do arquivo</label>
                        <input type="text" name="file" required="true" class="form-control">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Mover arquivo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>