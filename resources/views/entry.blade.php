@extends('components.entrylayout')

@section('entry')
    <article>
        <h1>{{ $entry->title }}</h1>
        <div>
            <p>
                {{ $entry->body }}
            </p>
        </div>
        <h3><a href="/entries">Return back</a></h3>
    </article>
@endsection
