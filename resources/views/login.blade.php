<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" http-equiv="X-UA-Compatible" content="{{ csrf_token() }}">
  <title>Авторизация</title>
  <link rel="stylesheet" href="/css/app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body >
  <div class="container w-25">
    <div class="form-block" style="margin-top:40%;">
      <h1>Вход</h1>
      <form method="POST" action="{{ route('user.login') }}">
        @csrf
        @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="email" class="form-label">Ваш Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Пароль</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
          @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" name="sendMe" value="1" class="btn btn-primary">Войти</button>

      </form>
    </div>

  </div>

</body>
</html>
