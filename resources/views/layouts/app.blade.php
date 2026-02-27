<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Restaurante</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #2c3e50, #4ca1af);
        }

        .container {
            width: 85%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.3);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table thead {
            background-color: #2c3e50;
            color: white;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #27ae60;
            color: white;
        }

        .btn-warning {
            background-color: #f39c12;
            color: white;
        }

        .btn-danger {
            background-color: #c0392b;
            color: white;
        }

        .btn-secondary {
            background-color: #7f8c8d;
            color: white;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .alert-success {
            background-color: #2ecc71;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Sistema de Gestión de Comidas 🍽️</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>