@extends('layouts.layout')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Tên Ngành</h1>
            <p>Hãy Chọn Ngành Phù Hợp Với Bạn Nhé</p>
        </div>
        <div class="row g-4">
            @foreach($data_nganh as $item)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{url('list/'.$item->id_nganh)}}" class="cat-item d-block bg-light text-center rounded p-3">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="{{url('public/assets/img/'.$item->img_nganh)}}" alt="Icon">
                        </div>
                        <h6>{{$item->ten_nganh}}</h6>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div> 
@endsection