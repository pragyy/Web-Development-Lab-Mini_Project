@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MY SHOWS AND MOVIES</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                        
                            <tr>
                                <th>Movies</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($moviesArray as $user)
                            
                            <tr>
                                <td>{{ $user->movie_name }}</td>
                                <!-- <td><a href="/addShows/{{ $user->id }}">Add</a></td> -->
                            </tr> 
                        @endforeach

                            
                        </tbody>
                    </table>
                    <a href="/addMovie/{{ $user->id }}">Add</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
