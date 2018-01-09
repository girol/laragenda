<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Contatos</title>
</head>
<body>
    <h1>Contatos</h1>
    <ul>
    @foreach ($contacts as $contact)
        
        <li><a href="/contacts/{{$contact->id}}">{{ $contact->name }}</a> | telefone: {{ $contact->phone }} </li>

    @endforeach
    </ul>
</body>
</html>