<?php

use App\Models\Entry;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Event\DocumentParsedEvent;
use Spatie\YamlFrontMatter\YamlFrontMatter;


Route::get('/entries', function () {
    return view('entries', [
        'entries' => Entry::all()
    ]);
});

Route::get('/yaml', function () {
    $document = YamlFrontMatter::parseFile(
        resource_path('entries/first-entry.html')
    );
    ddd($document);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('entries/{entry}', function ($slug) {
    return view('entry', [
        'entry' => Entry::findOrFail($slug)
    ]);
})->where('entry', '[A-z_\-]+');

Route::get('/error', function () {
    return view('errors.404');
});
