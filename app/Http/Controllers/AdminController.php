<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    

    public function view(){

        return view('Admin.home');
    }

   public function usermanage()
{
    // Correct approach using whereIn
    $data = User::whereIn('role_name', ['Normal User', 'Doctor'])->get();

    return view('Admin.usermanage', ['data' => $data]);
}

public function editmanage($id){

        $data=User::find($id);

return view('Admin.edit_manage',compact('data'));
}


public function update_manage(Request $request, $id)
{
    // Validate incoming request data
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone_number' => 'required|numeric|digits:11',
        'status' => 'required|in:active,disabled',
    ]);

    // Find the user by ID
    $user = User::find($id);

    // If user is not found, return with an error message
    if (!$user) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Update user fields
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone_number = $request->phone_number;
    $user->status = $request->status;

    // Save the updated user data
    if ($user->save()) {
        return redirect()->route('profiles',['id' =>$id])->with('success', 'User updated successfully');
    } else {
        return redirect()->back()->with('error', 'Failed to update user');
    }
}

public function archive($id){

$data =User::find($id);

$data->delete();
return back()->with('success', 'User has Been in Archived .');

}


public function listarch(){

     // Retrieve all users that have been soft deleted
    $deletedUsers = User::onlyTrashed()->get();
    
    // Pass the deleted users to the view
    return view('Admin.list_archive', ['deletedUsers' => $deletedUsers]);

}


// public function archive_retrieve(Request $request)
// {
//     $request->validate([
//         'user_id' => 'required|integer|exists:users,id',
//     ]);

//     // Retrieve user withTrashed (to include soft-deleted ones)
//     $user = User::withTrashed()->find($request->input('user_id'));

//     // Check if the user is soft-deleted
//     if ($user) {
//         if ($user->trashed()) {
//             // User is soft-deleted
//             return view('Admin.usermanage', ['data' => User::all(), 'user' => $user]);
//         } else {
//             // User exists but is not soft-deleted
//             return back()->with('error', 'User is not soft-deleted.');
//         }
//     } else {
//         // User does not exist (unlikely to reach here due to validation)
//         return back()->with('error', 'User does not exist.');
//     }
// }


public function restoreUserById($id)
{
    $user = User::onlyTrashed()->find($id);

    if ($user) {
        $user->restore();
        return back()->with('success', 'User restored successfully.');
    }

     return redirect()->back();

}





}