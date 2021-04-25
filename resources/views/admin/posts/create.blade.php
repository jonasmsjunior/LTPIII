<h1>Inserir Postagem </h1>

@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif

<form action="{{ route('posts.store')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="title" id="title" value="{{ old('title') }}">
    <textarea name="content" id="content" cols="25" rows="5">{{ old('content') }}
    </textarea>
    <button type="submit">Enviar</button> 
</form>