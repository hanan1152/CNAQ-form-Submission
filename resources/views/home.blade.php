<!DOCTYPE html>
<html lang="en">
@extends('layout')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<h1> Home page </h1>
<p> Please search for your grades form the nav bar </p>

@if (session('status'))
 <div class="alert alert-success  text-center">
 {{ session('status') }}
 </div>
@endif
    
</body>
</html>

@endsection