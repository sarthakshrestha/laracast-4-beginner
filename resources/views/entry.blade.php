<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Page</title>
    <link rel="stylesheet" href="css/blog.css">
</head>

<body>
    <article>
        <h1>{{ $entry->title }}</h1>
        <div>
            {{ $entry->body }}
        </div>


    </article>
</body>

</html>
