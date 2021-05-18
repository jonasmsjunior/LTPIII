<h1>Post detalhado</h1>
<p>titulo: {{ $post->title }}</p>
<p>conteudo: {{ $post->content }}</p>
<p>criacao: {{ $post->created_at }}</p>
<p>alteracao: {{ $post->updated_at }}</p>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button>
    </form>