
@extends('layout.main')



@section('Container')

<h1 style="text-align: center;margin-bottom:20px">
    <img src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="Logo" width="70" height="70" class="rounded-circle align-text-mid" >
    {{ $users->name }}
</h1>


<div class="card" style="width: 80%;margin-left:10%;color:black;">
    <div class="card-header"style="text-align: center;">
      History
    </div>
    <ul class="list-group list-group-flush">
        @forelse ($users->transactions as $trans)
        <li class="list-group-item">anda membeli {{ $trans['kopi'] }} pada {{ $trans['pembelian'] }}</li>
        @empty
        <p><li class="list-group-item">Anda belum beli apa apa</li></p>
        @endforelse
    </ul>
  </div>


@endsection
