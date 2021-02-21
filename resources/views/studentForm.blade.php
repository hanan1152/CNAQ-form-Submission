@extends('layout')

@section('content')


<div class=container>
    <div class="row">
    <div class="col-lg-8">
    
 @if ($errors->any())
   <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif

    <h1> Contact us </h1>
    <p> Please use to contact us </p>
    <form method="POST" action="{{route('studentFormSubmission')}}">
    @csrf
    <div class="form-group">
        <label for="id">Student-id</label>
        <input type="text" class="form-control" name="id" id="id">

    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">

    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject">

    </div>

    <div class="form-group">
        <label for="feedback">feedback</label>
        <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="col-lg-4">
    <aside>
        <h1> Slide bar </h1>
        <p> This is our side bar </p>
        <p> It may include a map or something here </p>
    </aside>
</div>
</div>
</div>

@endsection
