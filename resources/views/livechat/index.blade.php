@extends('layouts.core')
@section('content')
<section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">

        <div class="card" id="chat2">
          <div class="card-header d-flex justify-content-between align-items-center p-3">
            <h5 class="mb-0">Live Chat</h5>
          </div>
          <div class="card-body" id="data-message" style="position: relative; height: 700px; overflow: scroll;">
            @foreach($history as $chat)
              <div class="d-flex flex-row justify-content-start mb-4">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                  alt="avatar 1" style="width: 45px; height: 100%;">
                <div>
                  <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;"> {{ $chat->message }} </p>
                  <p class="small ms-3 mb-3 rounded-3 text-muted">{{ $chat->name }}</p>
                </div>
              </div>
            @endforeach
            <hr>
            <center><p>History</p></center>
          </div>
          <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
              alt="avatar 3" style="width: 40px; height: 100%;">
            <input type="text" class="form-control form-control-lg" id="message" placeholder="Type message">
            <input type="hidden" id="name" name="name" value="@if(Auth::check()) {{Auth::user()->name}} @else Anonymous (Guest) @endif">
            <button class="btn btn-block btn-primary" id="send" >Send</button>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<script src="{{ url('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(function(){
        const Http = window.axios;
        const Echo = window.Echo;
        const message = $("#message");
        const name    = $("#name");

        $("input, textarea").keyup(function(){
            $(this).removeClass('is-invalid');
        }),

        $('#send').click(function(){
            Http.post("{{route('livechat.post')}}", {
                    'name' : name.val(),
                    'message' : message.val()
                }).then(() => {
                    message.val('');
                });
        });
        Pusher.log = function(msg) {
          console.log(msg);
        };

        var pusher = new Pusher("{{env("PUSHER_KEY")}}")
        let channel = Echo.channel('chat');
        channel.listen('Message', function(data){
            $('#data-message')
            .append(`
            <div class="d-flex flex-row justify-content-start mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div>
                <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">${data.message.message}</p>
                <p class="small ms-3 mb-3 rounded-3 text-muted">${data.message.name}</p>
              </div>
            </div>
            `);
        });
    });
</script>
@endsection