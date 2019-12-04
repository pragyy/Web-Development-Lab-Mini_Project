<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
/*use Class App\Http\Controllers\Request;*/
use Illuminate\Http\Request; 
use App\User;
use App\Movies;
use App\Payments;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showUsers()
    {
        $loggedInUser = Auth::user();

        if($loggedInUser->type=="admin")
        {
            //dd("test");
            $user = new User();
            $userArray = $user->all();
            return view('showUsers')->with('userArray',$userArray);
        }
        else
        {
            //dd("test");
            return redirect('home');
        }
        
    }

    public function showPayments(){
      $loggedInUser = Auth::user();
        $accounts = $loggedInUser->payments;
       /* dd($accounts);*/
        $paymentsArray = $accounts->all();
        return view('showPayments')->with('paymentsArray',$paymentsArray);
        
      
     }


    public function showMovies()
    {   $loggedInUser = Auth::user();
        $accounts = $loggedInUser->movies;
        /*dd($accounts);*/
        $moviesArray = $accounts->all();
        return view('showMovies')->with('moviesArray',$moviesArray);
    }
    

    public function processMovie(Request $data)
    {
        $data = $data->all();
        
        $account = new Movies();
        $account->movie_name = $data['movie_name'];
        $account->user_id = $data['user_id'];
        $account->save();

        dd("added successfully");

    }

     public function addMovie($user_id)
    {
        return view('addMovie')->with('user_id',$user_id);
    }
}
