@extends('layouts.app')

@section('content')

<div class="text-center">

    <h1>Book Register</h1>
        <form method="post" action="{{url('/books/store')}}" >
    @csrf
        <div class="form-group row">
          <label for="bookName" class="col-md-2 col-form-label">Name of book</label>
          <div class="col-md-5">
            <input type="text"
            class="form-control"
            id="bookName"
            name="name"
            placeholder="the book name">
          </div>
        </div>
        <div class="form-group row">
          <label for="from" class="col-sm-2 col-form-label">From</label>
          <div class="col-sm-5">
            <input type="text"
            class="form-control"
            id="from"
            name="from"
            placeholder="From">
          </div>
        </div>
        <div class="form-group row">
            <label for="author" class="col-md-2 col-form-label">Author</label>
            <div class="col-md-5">
              <input type="text"
              class="form-control"
                id="author"
              name="author"
              placeholder="Name Author">
            </div>
          </div>
          <div class="form-group row">
            <label for="published" class="col-sm-2 col-form-label">Published</label>
            <div class="col-sm-5">
              <input type="text"
              class="form-control"
              id="published"
              name="published"
              placeholder="when was published">
            </div>
          </div>
          <button type="submit" class="btn btn">submit</button>
      </form>

</div>

@endsection
