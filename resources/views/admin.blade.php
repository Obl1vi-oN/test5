<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница администратора</title>
</head>
<body>
<h1>Список пользователей</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Email</th>
        <th>Дата регистрации</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<h1>Плохие сообщения</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Email</th>
        <th>Дата регистрации</th>
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

