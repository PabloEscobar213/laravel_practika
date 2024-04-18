<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Профиль</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding: 20px;
    }
    .profile-card {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      a{
        margin-top: 10px;
      }
    }
    .profile-picture {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="profile-card text-center">
        <img src="https://sun9-3.userapi.com/impf/Mi5TSiZwnOSX4IKLonQorGj5cERFyt_2jN1OaQ/ts2NuX2IZlQ.jpg?size=960x1280&quality=96&sign=a0073cf81ea61390b3ab2964c2678e2f&c_uniq_tag=Ghv21jvOG2C-UQWu9AROT2eiAWaAUZAEDbMiFX_iIPE&type=album" alt="Profile Picture" class="profile-picture">
        <h2>{{$users->id_name}}</h2>
        <p>{{$users->id_email}}</p>
        <p>{{$users->id_city}}</p>
        <a href="#" class="btn btn-primary">Изменить профиль</a><br>
        <a href="#" class="btn btn-primary">Каталог</a><br>
        <a href="#" class="btn btn-primary">Мои заказы</a>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
