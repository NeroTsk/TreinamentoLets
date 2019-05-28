@extends('layouts.app')

@section('content')

<div class="text-center">

    <h1>LETS GROW! Library</h1>
    <h5>Books</h5>
    <table table class="table table-bordered table-hover" id="tableUsers">
        <thead>
        <tr>
            <th>Name</th>
            <th>From</th>
            <th>author</th>
            <th>published</th>
            <th>received</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($book as $book)
            <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->from}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->published}}</td>
                    <td>{{$book->created_at}}
                    <td>
                        <a href='{{url("/books/edit/$book->id")}}' class="btn btn-outline-secondary">edit</a>
                        <a href='{{url("/books/destroy/$book->id")}}' class="btn btn-outline-danger"
                          onclick="return confirm('You have sure?')">delete</a>
                    </td>
                </tr>
            @endforeach
    </table>
    <div class="card-header">
            <a class="btn btn-primary" href="/books/create"> New </a>
    </div>
</div>

@endsection
