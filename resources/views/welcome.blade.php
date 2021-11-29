@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 py-5 text-center">
                    <h1 class="fw700">Send secure and encrypted notes that self destruct once they've been read</h1>
                <h5 class="mt-4">Burner Note is a free and open sourced service for sending secure text based notes that are completely erased from existence once they've been read.</h5>
                <h5 class="mt-2 text-muted">We use AES-256-CPC encryption. Read more about that here.</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <form class="" method="post" action="/create-note">
                        @csrf
                        <label>Create your note</label>
                        <div class="input-group mb-3">
                            <textarea rows="5" name="note" class="" placeholder="" id=""></textarea>
                        </div>
                        <label class="">Create an optional password</label>
                        <p class="text-muted npm">Leave blank if you do not require password protection</p>
                        <div class="input-group mb-3">
                            <input type="text" name="password" class="" placeholder="" value="" id="">
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" name="" class="btn btn-dark" placeholder="" value="Save" id="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection