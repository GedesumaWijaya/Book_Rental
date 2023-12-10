<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorlist</title>
</head>
<body>
    <h1>Autors List</h1>
    <nav>
        <ul>
            <li><a href="/">Book List</a></li>
            <li><a href="/author">Author List</a></li>
            <li><a href="/rating">Rating Form</a></li>
        </ul>
    </nav>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Author Name</th>
                <th>Voter</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter =  1;

            @endphp
            @foreach ($info_author as $author)
            <tr>
                <td>{{$counter++}}</td>
                <td>{{$author['author']->author_name}}</td>
                <td>{{$author['voter']}}</td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
    
</body>
</html>