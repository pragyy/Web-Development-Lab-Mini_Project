 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MY PAYMENTS</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        
                            <tr>
                                <th>Payment method</th>
                                <th>Payment date</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paymentsArray as $user)
                            <tr>
                                    <td>{{ $user->payment_method }}</td>
                                    <td>{{ $user->payment_date}}</td>
                            </tr> 
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
            </div>

            <img src="/paid.jpeg">
        </div>
    </div>
</div>
@endsection
