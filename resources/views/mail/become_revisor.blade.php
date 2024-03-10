<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Presto.it'}}</title>
</head>
<body>
    <div>
        <h1>Un utente ha richiesto di lavorare con noi</h1>
        <h2>ecco i suoi dati:</h2>
        <p>Nome: {{$user->name}}</p>
        <p>Nome: {{$user->email}}</p>
        <p>se vuoi renderlo revisore clicca qui:</p>
        <a href="{{route('make.revisor', compact('user'))}}">Rendi revidore</a>
    </div>
</body>
</html>