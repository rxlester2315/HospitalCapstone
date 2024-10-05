<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    
    public function index()
    {
        // Redirect based on user role or specific conditions
        $user = Auth::user();

        if ($user->role_name == 'Super Admin') {
            return redirect('/Superad');
            
        } 

            if ($user->role_name == 'Admin') {
            return redirect('/Admin');
            
        } 

              if ($user->role_name == 'Front Desk') {
            return redirect('/Front');
            
        } 

              if ($user->role_name == 'Human Resources') {
            return redirect('/HR');
            
        } 


              if ($user->role_name == 'Normal User') {
            return redirect('/User');
            
        } 


              if ($user->role_name == 'Nurse') {
            return redirect('/Nurse');
            
        } 

        
              if ($user->role_name == 'Doctor') {
            return redirect('/Doc');
            
        } 

                if ($user->role_name == 'Guests') {
            return redirect('/Guests');
            
        } 
        


        return view('/'); // Regular user dashboard
    }

}