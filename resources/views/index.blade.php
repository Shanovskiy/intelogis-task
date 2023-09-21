@extends('layouts.app')

@section('title', 'Delivery')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="https://artkvartal.ru/media/cache/41/d2/41d2fdf293c84012fec40665eb73bcd4.jpg" class="card-img-top" style="width: 300px;height: 225px;" alt="...">
        <div class="card-body">
            <div style="margin-left: 30px;font-size: x-large" id="base_url"><a style="color: green" href="https://www.cdek.ru/ru/">СДЭК</a></div>
            <h5 class="card-title">Быстрая доставка</h5>
            <p class="card-text">Доставку можно оформить до 18:00</p>
            <p>Срок доставки от 1 до 5 дней</p>
            <a href="{{route('fast-order')}}" class="btn btn-primary">Сделать заказ</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5cJOVkSLNn2dKFTKgQsUoKj03WnXwgd8Hug&usqp=CAU" class="card-img-top" style="width: 300px;height: 225px;" alt="...">
        <div class="card-body">
            <div style="margin-left: 30px;font-size: x-large" id="base_url"><a style="color: red" href="https://dostavka.yandex.ru/">Yandex</a></div>
            <h5 class="card-title">Обычная доставка</h5>
            <p class="card-text">Круглосуточный прием заявок</p>
            <p class="card-text">Срок доставки от 7 до 14 дней</p>
            <a href="{{route('default-order')}}" class="btn btn-primary">Сделать заказ</a>
        </div>
    </div>
@endsection
