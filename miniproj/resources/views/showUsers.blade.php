@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Users</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($userArray as $user)
                            
                        <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                        </tr> 
                        @endforeach

                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
