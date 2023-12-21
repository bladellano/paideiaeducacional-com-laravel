<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #7f9c9752;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Olá, sou o(a) {{ $data['name'] }}!</h1>

        <p><b>E-mail:</b> {{ $data['email'] }}</p>
        <p><b>Whatsapp:</b> {{ $data['whatsapp'] }}</p>
        <p><b>Assunto:</b> {{ $data['subject'] }}</p>
        <p><b>Mensagem:</b> {{ $data['message'] }}</p>

        <p>Atenciosamente,</p>
        <p>{{ $data['name'] }} 😘</p>
    </div>
</body>

</html>