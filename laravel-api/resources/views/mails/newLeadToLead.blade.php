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
        <div>Gentile {{ $lead->name }}, <br>
        La ringraziamo per averci contattato,
        le risponderemo il prima possibile a questo indirizzo mail: {{ $lead->email }}.


        <div>Messaggio originale:</div>
        <p>{{ $lead->message }}</p>

    </main>

</body>
</html>