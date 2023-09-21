@extends('layouts.app')

@section('title', 'Fast-Order')
@section('content')
    <form action="{{route('fast-calculation')}}" method="POST">
        @csrf
            <div style="margin-left: 30px;font-size: x-large" id="base_url"><a style="color: green" href="https://www.cdek.ru/ru/">СДЭК</a></div>
            <h3>Быстрая доставка</h3>
            <div class="mb-3">
                <label for="sourceKladr" class="form-label"> Откуда</label>
                <input type="text" name="sourceKladr" id="sourceKladr" class="form-control" placeholder="Откуда">
            </div>
            <div class="mb-3">
                <label for="targetKladr" class="form-label"> Куда</label>
                <input type="text" name="targetKladr" id="targetKladr" class="form-control" placeholder="Куда">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label"> Вес</label>
                <input type="number" name="weight" id="weight" class="form-control" placeholder="кг">
            </div>

            <button type="submit" class="btn btn-primary">Рассчитать</button>
    </form>
@endsection
