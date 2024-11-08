<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>
</head>
<body>
<form action="{{route('login')}}" method="POST">
    @csrf
    <div>
        <label for="email">Почта</label>
        <input type="text" name="email" placeholder="Введите почту" value="{{old('email')}}" required>
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
    </div>
    <button type="submit">Вход</button>
    <a href="{{route('register')}}">Или регистрация</a>
</form>

</body>
</html>
