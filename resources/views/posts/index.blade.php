@extends('layouts.main')

@section('content')

<div class="container">

    <h1>BLOG ARCHIVE</h1>

    @forelse ($posts as $post)

        <article class="mb-5">
            <h2>{{ $post->title }}</h2>

            <h5>{{ $post->created_at->format('d/m/Y')}}</h5>

            <p>{{ $post->body }}</p>

            <a href="#">Read More</a>

        </article>
        
    @empty

    <p>No Posts found. <a href="{{ route('posts.create') }}">Create a new One!</a></p>
        
    @endforelse

</div>
    
    
@endsection