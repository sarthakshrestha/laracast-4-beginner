<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Entry
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
//        return cache()->rememberForever('entries.all', function () {
            return collect(File::files(resource_path("entries")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Entry(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                ))
                ->sortByDesc('date');

    }
    public static function find($slug)
    {
        // Find the slug that matches the one which is requested
        static::all()->firstWhere('slug', $slug);

    }

    public static function findOrFail($slug)
    {
        // Find the slug that matches the one which is requested
        $post = static::find($slug);
        if(! $post){
            throw new ModelNotFoundException();
        }
        return $post;
    }
}
