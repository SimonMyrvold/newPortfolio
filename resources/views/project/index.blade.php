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

<h1>about</h1>

hej

@foreach ($abouts as $about)

@foreach ($about->Certificates as $certificates)
    
    {{ $certificates->certificate_name }}

@endforeach

<br>

@foreach ($about->Contacts as $contacts)
    
    {{ $contacts->contact_name }}

@endforeach

@endforeach



{{-- <h1>contact</h1>

@foreach ($contacts as $contact )

<p>{{ $contact->contact_name }}</p>

@endforeach

<h1>certificate</h1>

@foreach ($certificates as $certificate )

<p>{{ $certificate->certificate_name }}</p>

@endforeach

<h1>project</h1>

@foreach ($projects as $project)
    <a href="{{ route('project.show', $project->id) }}">
        {{ $project->project_name }}
    </a>
@endforeach --}}


</body>
</html>