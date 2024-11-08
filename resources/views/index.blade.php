<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
@if(Auth::user()->role == 'admin')
    <a href="/admin">Go to AdminPage</a>
@endif
<h1>Написать сообщение</h1>
<form action="/message" method="POST">
    @csrf
    <div>
        <label for="message">Сообщение</label>
        <input type="text" name="message" placeholder="Введите сообщение" value="{{old('message')}}" required>
    </div>
    <button type="submit">Отправить</button>
</form>

<h1>Все сообщения</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Сообщение</th>
    </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->message }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
