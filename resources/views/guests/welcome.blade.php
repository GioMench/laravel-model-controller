@extends('layouts.app')

@section('content')

<div class="container">
   
    @forelse ($movies as $movie )
        <h2>
            {{$movie->title}}
        </h2>
    @empty
        <p>sorry,movie not found!</p>
        
    @endforelse

</div>

@endsection