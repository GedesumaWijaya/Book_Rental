<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Book List</h1>
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
                <th>Book Name</th>
                <th>Category Name</th>
                <th>Author Name</th>
                <th>Average Rating</th>
                <th>Voter</th>
            </tr>
        </thead>
        <tbody>
            @php
                $counter =  1;

            @endphp
            @foreach ($info_book as $book)
            <tr>
                <td>{{$counter++}}</td>
                <td>{{$book['book']->book_name}}</td>
                <td>{{$book['book']->category_name}}</td>
                {{-- <td>{{$book['book']->author_id}}</td> --}}
                <td>{{$book['author_name']}}</td>
                <td>{{$book['average_Rating']}}</td>
                <td>{{$book['voter']}}</td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
    
</body>
</html>