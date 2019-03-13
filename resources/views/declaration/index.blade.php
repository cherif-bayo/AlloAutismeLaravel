@extends('layouts.app')
@section('content')

<div class="box special features sign-in-par">

    <h1> Les différentes Déclaration</h1>
    <ul>
        @foreach ($declarations as $declaration)
            <li>
                <a href="/declarations/{{ $declaration->id }}">
                  {{ $declaration->last_name }}
                </a>
            </li>
            
        @endforeach
    </ul>

</div>

@endsection