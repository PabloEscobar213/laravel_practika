<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Кроссовки Adidas 770</title>
 
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding: 20px;
    }
    .product-details {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 10px;
    }
    .product-image {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }
    
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="product-details">
        <h1 class="text-center">{{$data->id_product}}</h1>
        <img src="{{'<img src="data:image/jpeg;base64,'.base64_encode( $blob ).'"/>' }}" alt="ББ" class="product-image">
        <p class="mt-3">{{$data->id_sell}}</p>
        <p>{{$data->id_product}}</p>
        <button class="btn btn-primary">Добавить в корзину</button><br>
        <button class="btn btn-primary">Назад</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>