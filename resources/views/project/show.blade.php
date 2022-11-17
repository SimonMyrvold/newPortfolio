<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    @vite('resources/css/app.css')
</head>
<body>
     
    <body class="bg-gray-100 font-sans leading-normal tracking-normal">    
        <!--Container-->
        <div class="container w-full md:max-w-3xl mx-auto pt-20">
    
            <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
    
                <!--Title-->
                <div class="font-sans">
                    <p class="text-base md:text-sm text-green-500 font-bold">&lt; <a href="/" class="text-base md:text-sm text-green-500 font-bold no-underline hover:underline">Back to main</a></p>
                            <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">{{ $project->project_name }}</h1>
                            <p class="text-sm md:text-base font-normal text-gray-600"> {{ $project->created_at }}</p>
                </div>
                
                {{ $project->picture }}

                <img src="{{ $picture_link = Str::replace('C:\xampp\\htdocs\portfolio-upgrade\public', '', $project->picture) }}" alt="" width="100%" height="250px">
    
                <p class="py-6">{{ $project->project_description }}</p>
    
    
                <h1 class="py-2 font-sans"><a href="{{ $project->github }}">Github</a></h1>

                @if ($project->demo == 'none')
                
                @else
                <h1 class="py-2 font-sans"><a href="{{ $project->demo }}">Demo</a></h1>
                @endif

    
            </div>
    
            <!--Tags -->
            <div class="text-base md:text-sm text-gray-500 px-4 py-6">
                Tags: @foreach ($project->tags as $tag)
                    {{ $tag->tag_name }}
                    <i class="{{ $tag->picture }} fa-1x"></i>
                @endforeach
            </div>
    </body>
    
</body>
</html>