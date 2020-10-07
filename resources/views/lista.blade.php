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
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>documento</th>
                <th>nombres</th>
                <th>apellidos</th>
            </tr>
        </thead>
        <tbody>
    </table>
    @foreach ($personas as $i)
        <tr>
            <td>{{!! i->id; !!}}</td>
            <td>{{!! i->documento; !!}}</td>
            <td>{{!! i->nombres; !!}}</td>
            <td>{{!! i->apellidos; !!}}</td>
        </tr>
    @endforeach
    </tbody>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>