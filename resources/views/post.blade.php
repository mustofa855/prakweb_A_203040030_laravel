@extends('layouts.main')

@section('container')
<article>
    {{ $post->title }}
    {!! $post->body !!}
</article>
<a href="/blog">Back to Posts</a>
@endsection

