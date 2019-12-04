@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add movies</div>

                <div class="card-body">
                    <form method="POST" action="/processMovie">
                        @csrf

                        <div class="form-group row">
                            <label for="movie_name" class="col-md-4 col-form-label text-md-right">Movie Name</label>

                            <div class="col-md-6">
                                <input id="movie_name" type="text" class="form-control" name="movie_name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="display:none;" class="col-md-4 col-form-label text-md-right">User Id</label>

                            <div class="col-md-6">
                                <input id="password" type="hidden" class="form-control" name="user_id" value={{$user_id}} >
                            </div>
                        </div>                    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Movie
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
