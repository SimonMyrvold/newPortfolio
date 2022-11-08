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
    {{ $tags }}
@endforeach