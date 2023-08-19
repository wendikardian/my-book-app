<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Collection</title>
</head>

<body>
    <h1>This is My book library</h1>
    <h2>
        {{$name}}
    </h2>


    <ul>
        @foreach ($book as $item)
        <li>
            <a href="{{route('detail', $item['id'])}}">{{$item['name']}}</a>
        </li>
        @endforeach
    </ul>

    @if (count($book) === 5)
    <p>There are 5 books in the library</p>
    @elseif (count($book) > 5)
    <p>There are more than 5 books in the library</p>
    @endif
</body>

</html>
