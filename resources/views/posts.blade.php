<h1>
    Facades : {{$globalName}}
    <br/>
    Page Name : {{$pageName}}
    <br/>
    @if($pageName == "index")
        <a href="{{route('blog')}}"> 블로그로 </a>   <br/>
        <a href="{{route('page')}}"> 페이지로 </a>
    @elseif($pageName == "blog")
        <a href="{{route('index')}}"> 홈으로 </a>   <br/>
        <a href="{{route('page')}}"> 페이지로 </a>
    @else
        <a href="{{route('index')}}"> 홈으로 </a>   <br/>
        <a href="{{route('blog')}}"> 블로그로 </a>
    @endif

</h1>
