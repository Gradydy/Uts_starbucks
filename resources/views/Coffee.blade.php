@extends('layout.main')

@section('Container')
    @foreach ($cards as $card)
    <div class="card mb-4" style="width: 90%;margin-left: 5%;margin-right: 5%;color:rgb(23, 29, 18);">
        <img src="{{ $card['image'] }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $card['title'] }}</h5>
          <p class="card-text">{{ $card['isi'] }}</p>
          <a href="#" class="btn btn-primary" style="float: right;">Buy</a>
        </div>
      </div>
    @endforeach

@endsection
