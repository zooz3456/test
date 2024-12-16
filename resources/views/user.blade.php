<h1>{{$team->title}}</h1>
<h3>소속인원 리스트</h3>
@foreach($users as $user)
    <div class="bottom-0.5">
        <h3>{{$user->name}}</h3>
        <p>{{$user->email}}</p>
        <p>가입년도 : {{$user->created_at}}</p>
    </div>
@endforeach
