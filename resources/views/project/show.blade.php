<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>


    <h1>
        {{ $project->id }}
        {{ $project->project_picture }}
        {{ $project->project_name }}
        {{ $project->project_description }}
        {{ $project->github }}
        {{ $project->created_at }}
        {{ $project->updated_at }}
        </h1>
        
        <br>
        
        
        @foreach ($project->tags as $tags)
            {{ $tags->tag_name }}
        @endforeach

        
</body>
</html>