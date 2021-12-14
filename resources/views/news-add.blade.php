@extends('layouts.template')

@section('title','首頁')
    

@section('css')
    <link rel="stylesheet" href="{{asset('css/list-page.css')}}">
@endsection


@section('main')
<form class="container" action="{{asset('/add-anter')}}" method="POST">
    @csrf
    <h2 class="card-title">新增最新消息</h2>
    <div class="my-4">
        <label for="title" class="form-label">標題</label>
        <input type="text" class="form-control mb-3" id="title" name="title" aria-describedby="basic-addon3">
        <label for="date" class="form-label">日期</label>
        <input type="date" class="form-control mb-3" id="date" name="date" aria-describedby="basic-addon3">
        <label for="content" class="form-label">內容</label>
        <textarea type="text" rows="4" class="form-control mb-3" id="content" name="content" aria-describedby="basic-addon3"></textarea>
        <label for="image_url" class="form-label">圖片</label>
        <textarea type="text" rows="4" class="form-control mb-3" id="image_url" name="image_url" aria-describedby="basic-addon3"></textarea>
    </div>
    <button type="submit" class="btn w-100 px-4 feedback_btn">送出</button>
</form>
@endsection


@section('js')
    
@endsection