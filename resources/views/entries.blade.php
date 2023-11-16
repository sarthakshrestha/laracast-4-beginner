<x-layout>
    <h1>Entries made by Zeus</h1>
    <h3>dolor sit amet, consectetur adipiscing elit. In semper aliquam sapien commodo sodales. Integer
        odio nulla, gravida sit amet dolor sed, feugiat ornare ipsum. Fusce pharetra luctus ligula, egestas euismod
        neque vehicula eget. Quisque fringilla ligula elementum erat eleifend imperdiet. Aliquam ac rutrum lectus,
        non gravida lorem. Vivamus tempus nibh eu bibendum dapibus.</h3>
    @foreach ($entries as $entry)
        <article>
            <h1>
                <a href="/entries/{{ $entry->slug }}">
                    {{ $entry->title }}
                </a>
            </h1>
            <h2>{{ $entry->excerpt }}</h2>
        </article>
    @endforeach
</x-layout>

