<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<form action="{{route('register')}}" method="POST">
    @csrf
    <div>
        <label for="name">Имя</label>
        <input type="text" name="name" placeholder="Введите имя" value="{{old('name')}}" required>
    </div>
    <div>
        <label for="email">Почта</label>
        <input type="text" name="email" placeholder="Введите почту" value="{{old('email')}}" required>
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
    </div>
    <div>
        <label for="confirm_password">Подтвердите пароль</label>
        <input type="password" name="confirm_password" placeholder="Подтвердите пароль" required>
    </div>
    <button type="submit">Регистрация</button>
    <a href="{{route('login')}}">Или вход</a>
</form>

</body>
</html>
