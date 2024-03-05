<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title ?? 'Presto.it'}}</title>
</head>

<body>
    <x-nav />

    {{$slot}}

</body>

</html>