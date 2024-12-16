<h1>{{$department->title}}</h1>
<h2>팀을 선택해주세요</h2>
@foreach($teams as $team)
    <a href="{{route('user.list', ['teamId' => $team->id])}}"><h3>{{$team->title}}</h3></a>
@endforeach
