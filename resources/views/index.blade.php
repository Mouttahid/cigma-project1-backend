<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', setting('site.title') )</title>
</head>
<body>
    <h3>Hello World</h3>
    @foreach ($cat as $item)
        <p>{{$item->title}}</p>
    @endforeach
    
    @foreach ($posts as $item)
    <p>{{$item->title}}</p>
<img src="{{ Voyager::image($item->featured_image) }}" alt="" width="250">
@endforeach
</body>
</html>