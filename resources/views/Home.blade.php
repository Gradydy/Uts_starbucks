
@extends('layout.main')


@section('Container')
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <label id="lblGreetings"></label>
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Member level <span style="color:{{ $users->member }};">{{ $users->member }}</span></div>
      </div>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Jumlah Star anda adalah <span style="color:{{ $users->member }};">{{ $users->star }} </span></div>
      </div>
    </div>
</div>
<ul class="list-group" style="margin-top:35px;">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat repellendus perspiciatis animi voluptate amet impedit iusto officiis sit provident tenetur recusandae enim nesciunt ad id voluptatem, at odio, in quisquam cum fugiat necessitatibus iure. Et fugiat reprehenderit accusantium rem? Vero voluptatem ipsa similique eius eaque repellat nisi mollitia ducimus at accusantium dolore vitae libero quidem, voluptate suscipit eum labore ab aspernatur molestiae ratione. Non eum quisquam earum ea dicta, deleniti maxime? Tempora, ullam! Repellat quaerat temporibus inventore iste nemo, sunt deserunt quisquam modi, deleniti dolorem eius maiores, sit aspernatur rem alias ipsa fugit doloremque reprehenderit. Architecto consequuntur incidunt similique magnam.</p>
  </ul>
  <a href="/Coffee/{{ $users->id }}" class="btn btn-primary" style="float: right;position:absolute;bottom:10px;right:10px">Coffee</a>
  <script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning ,{{ $users->name }}';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon ,{{ $users->name }}';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening ,{{ $users->name }}';

    document.getElementById('lblGreetings').innerHTML =
        greet;
  </script>
@endsection
