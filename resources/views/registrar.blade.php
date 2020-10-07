<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <form action="/persona/registrar" method="POST">
        @method('POST')
    @csrf
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="">Documento</label>
            <input type="text" name="documento" id="documento" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Nombres</label>
            <input type="text" name="nombres" id="nombres" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>
    </form>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>