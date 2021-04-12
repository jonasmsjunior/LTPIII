<h1> Comentarios</h1>

@foreach($posts as $post)
    <p><b>{{$post->title}}</b><p>
    <p>{{$post->content}}<p>
@endforeach