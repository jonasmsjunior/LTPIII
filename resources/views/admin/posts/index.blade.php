@if (session('message'))
    <p> {{ session('message') }}</p>
@endif
<h1> Comentarios</h1>
<a href="{{ route('posts.create') }}">ADD</a>

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="filtro">
    <button type="submit">filtar</button>
</form>
@foreach($posts as $post)
    <p><b>{{$post->title}}</b><p>
    <p>{{$post->content}}<p>
    <a href="{{ route('posts.show',$post->id) }}"> visualizar </a>
    <a href="{{ route('posts.edit',$post->id) }}"> alterar </a>

  
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>



    <br>
    --------------------------------------------------------------
@endforeach

@if(isset($filtro))
    {{ $posts->appends($filtro)->links() }}
@else
    {{ $posts->links() }}
@endif

