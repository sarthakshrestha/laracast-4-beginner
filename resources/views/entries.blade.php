@extends('layout')

@section('banner')
    <h1>Entries made by Zeus</h1>
@endsection


@section('content')
    @foreach ($entries as $entry)
        <article>
            <h1>
                <a href="/entries/{{ $entry->slug }}">
                    {{ $entry->title }}
                </a>
            </h1>
            <h2>{{ $entry->excerpt }}</h2>
        </article>
    @endforeachÏ
@endsection
