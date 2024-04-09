<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Главная страница</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <style>
        .navbar img{
            margin-right: 10px;
        }
        .contact li{
            margin-top: 15px;
        }
    </style>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Информация</h4>
                    <p class="text-muted">
                        Добро пожаловать в наш уникальный магазин модной одежды, где стиль встречается с комфортом! Мы предлагаем вам лучшие тренды сезона, изысканные ткани и непревзойденное качество по доступным ценам. Наши полки увешаны самыми актуальными моделями для всех возрастов и размеров. От повседневных нарядов до вечерних нарядов, мы имеем все, чтобы подчеркнуть ваш индивидуальный стиль. Погрузитесь в мир моды с нами и почувствуйте уверенность в каждом образе</p>
                    </div>
                    <div class="contact col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Наши контакты</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Вконтакте</a></li>
                            <li><a href="#" class="text-white">Телеграм</a></li>
                            <li><a href="#" class="text-white">Инстаграм</a></li>
                            <li><a href="/home" type="button" class="btn btn-outline-light">Войти</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="img/logo.png" alt="Error" width="20%">
                    <strong>Pavelo</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    @yield('main-content')    
    
</body>
</html>