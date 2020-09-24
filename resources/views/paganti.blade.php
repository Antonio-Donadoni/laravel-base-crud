@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container">
      <ul>
        @foreach ($paganti as $pagante)
        <li>{{ $pagante -> name}} {{$pagante -> lastname}}</li>  
        @endforeach
      </ul>

    </div>
</main>


@endsection
