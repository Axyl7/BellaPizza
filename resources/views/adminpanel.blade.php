<html>
<body>
@foreach($basket as $basket)
    <br class="zakz">
        <h1>Адресс:{{$basket->address}}</h1>
        <h2>Номер продукта:{{$basket->product_id}}</h2>
        <h3>Мобильный телефон:{{$basket->phone}}</h3>
        Состояние заказа:{{$basket->status}}</br>
        Дополнительное пояснение:{{$basket->description}}
        <hr size="4" color="#696969">
    </div>
@endforeach
</body>
</html>
