<h1>{{$division->title}}</h1>
<h2>부서를 선택해주세요</h2>
@foreach($departments as $department)
    <a href="{{route('team.list', ['departmentId' => $department->id])}}">
        <h3>{{$department->title}}</h3>
    </a>
@endforeach
