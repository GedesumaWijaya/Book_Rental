<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating</title>
</head>
<body>
    <h1>Insert Rating</h1>
    <nav>
        <ul>
            <li><a href="/">Book List</a></li>
            <li><a href="/author">Author List</a></li>
            <li><a href="/rating">Rating Form</a></li>
        </ul>
    </nav>
    <form action="{{route("storing_rating")}}" method="post">
        @csrf
        <label for="author_id">Book Author:</label>
        <select name="author_id" id="author_id">
            @foreach ($see_author as $author)
            <option value="{{$author->id}}">{{$author->author_name}}</option>
                
            @endforeach
        </select>
        <br>
        <label for="book_id">Book  Name:</label>
        <select name="book_id" id="book_id">
            @foreach ($see_book as $book)
            <option value="{{$book->id}}">{{$book->book_name}}</option>
                
            @endforeach
        </select><br>
        <label for="rating">Rating :</label>
        <select name="rating" id="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>

        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>