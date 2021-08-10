@extends('bentley.master.layout')

<div class="jumbotron">
    <div class="container py-4 text-center">
        <h1 class="display-4">CONTATO</h1>
        <hr class="my-4">
        <p class="lead">Nossa equipe está sempre a disposição para ajudar! Entre em contato e retornaremos o mais breve possível.</p>
    </div>
</div>

@section('content')
    <div class="container py-5">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
