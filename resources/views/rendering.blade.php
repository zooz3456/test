<h1>소속을 선택해주세요</h1>
@foreach($divisions as $division)
    <a href="{{route('department.list', ['divisionId' => $division->id])}}">
        <h3>{{$division->title}}</h3>
    </a>
@endforeach
