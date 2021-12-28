@extends('layouts.template')

@section('title','產品列表')
    

@section('css')
{{-- <link rel="stlesheet" href="{{asset('css/product-list.css')}}"> --}}
<style>
    .header {
    border-bottom: 1px solid #c8c8c8;
    padding-bottom: 10px;
}

.header>.title {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.header>.title>h2 {
    font-size: 34px;
    font-weight: 600;
    margin-bottom: 20px;
}
.tabs{
    display: flex;
}
.tab{
    padding: 10px 30px;
    border: 1px solid #000;
    border-radius: 5px;
    margin-right: 5px;
    margin-bottom: 5px;
    cursor: pointer;
}

#products {
    margin-top: 50px;
}
.cards > a{
    text-decoration: none;
}
#products .card .img-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
}

#products .card .img-container img {
    max-width: 100%;
    max-height: 100%;
    background-size: cover;
    background-position: center;
}

#products .card-body h3 {
    font-size: 10px;
    color: #989899;
}

#products .card-body a {
    color: #5b5b5c;
    font-size: 22px;
    font-weight: 350;
}

#products .card-body a:hover {
    text-decoration: none;
    color: #52688a;
}

#products .card-body p {
    font-size: 17px;
    color: #5b5b5c;
}
</style>




@endsection


@section('main')
<header class="container header">
    <div class="title">
        <h2>產品列表</h2>
    </div>
    <div class="tabs">
        <div class="tab">紅茶</div>
        <div class="tab">綠茶</div>
        <div class="tab">奶茶</div>
    </div>

</header>
<!-- 商品區 -->
<section id="products">
    <div class="container">
        <div class="row cards">
        @foreach ($products as $product)
        <a href="{{route('product.content',['id'=>$product->id])}}" class="col-12 col-sm-6 col-lg-3">
            <div class="card pb-3 mb-3">
                <div class="card-img-top mb-2 img-container">
                    <img src="{{Storage::url($product->image_url)}}" alt="...">
                </div>
                <div class="card-body p-0 text-center">
                    <h3>活動免運費唷~</h3>
                    <span>{{$product->name}}</span>
                    <p>${{$product->price}}</p>
                </div>
            </div>
        </a>
        @endforeach
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
@endsection


@section('js')
    
@endsection