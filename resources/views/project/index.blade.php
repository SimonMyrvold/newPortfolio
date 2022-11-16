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

<a href="{{ route('project.create') }}">create</a>

<h1>about</h1>

{{ $abouts }}

<br>



<h1>project</h1>

@foreach ($projects as $project)

    <a href="{{ route('project.show', $project->id) }}">
        {{ $project->project_name }}
    </a>

@endforeach

@foreach ($projects as $project)

<a href="{{ route('project.edit', $project->id) }}" class="block italic text-green-500 border-b-1 border-green-400">Edit</a>

@endforeach

@foreach ($projects as $project)

    <form action="{{ route('project.destroy', $project->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Delete
        </button>
    </form>

@endforeach

</body>
</html>