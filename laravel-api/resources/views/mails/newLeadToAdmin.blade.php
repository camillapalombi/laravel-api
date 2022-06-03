<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>

        <h1>Sei stato contattato.</h1>
        <h2>Ecco i dati:</h2>
        <div>Nome:</div> <span>{{ $lead->name }}</span>
        <div>Email:</div> <span>{{ $lead->email }}</span>
        <div>Message:</div> <span>{{ $lead->message }}</span>

    </main>

</body>
</html>