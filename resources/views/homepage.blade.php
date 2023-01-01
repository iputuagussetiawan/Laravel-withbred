<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Practice</title>
    </head>
    <body>
        <h1>Hallow World</h1>
        <p>A Great Number is {{ 2+2 }}</p>
        <p>the current year {{ date('Y') }}</p>
        <a href="/about">Got To About Page</a>
        <p>My Name Is {{ $name }}</p>
        <p>My Cat Name Is {{ $catname }}</p>
        <ul>
            @foreach ($allAnimal as $animal )
            <li>{{ $animal }}</li>
            @endforeach
        </ul>
   </body>
</html>