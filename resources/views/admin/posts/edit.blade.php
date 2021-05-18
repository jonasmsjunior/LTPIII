<h1>Alterar Postagem {{ $post->title }}</h1>

@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @method("put")
    @csrf
    <input type="text" name="title" id="title" value="{{ $post->title }}">
    <textarea name="content" id="content" cols="25" rows="5">{{ $post->content }}
    </textarea>
    <button type="submit">Enviar</button> 
</form>