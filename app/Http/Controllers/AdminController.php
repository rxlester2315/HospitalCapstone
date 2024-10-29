<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Events\MessageSent;
use App\Models\Messagess;
use App\Models\ChatSession;
use App\Models\ticket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use App\Models\Appointments;

use App\Models\Employees;

use App\Notifications\TicketResponse;
use App\Notifications\EmailNotification;

use Notification;

class AdminController extends Controller
{
    

    public function view(){

        return view('Admin.home');
    }

   public function usermanage()
{
    // Correct approach using whereIn
    $data = User::whereIn('role_name', ['Normal User', 'Doctor'])->get();

    return view('Admin.usermanage.usermanage', ['data' => $data]);
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
        return redirect()->route('profiles',['id' =>$id])->with('message', 'User updated successfully');
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



// public function getConversations()
//     {
//         // Get distinct users who have messaged the admin
//         $users = Message::select('sender_id')
//                         ->distinct()
//                         ->where('receiver_id', 21) // Admin ID
//                         ->get();

//         return response()->json($users);
//     }


    




//     public function getUserMessages($userId)
//     {
//         // Get messages between admin and a specific user
//         $messages = Message::where(function ($query) use ($userId) {
//             $query->where('sender_id', $userId)
//                   ->orWhere('receiver_id', $userId);
//         })->get();

//         return response()->json($messages);
//     }


// public function replyToUser(Request $request, $userId)
// {
//     $message = $request->input('message');
//     $senderId = auth()->user()->id;

//     $message = Message::create([
//         'sender_id' => auth()->id(),
//         'receiver_id' => $userId,
//         'message' => $request->message,
//     ]);

//     // Broadcast event with 3 parameters
//     broadcast(new GuessMessage($message, $senderId, $userId))->toOthers();
//     \Log::info('Message broadcasted: ', ['message' => $message]);


//     return response()->json($message);
// }




// public function listChats()
// {
//     // Fetch all chat sessions with users
//     $chatSessions = ChatSession::with('user')->get();
    
//     // Pass only chatSessions when no specific chat is selected
//     return view('Admin.home', compact('chatSessions'));
// }

// public function viewChat($sessionId)
// {
//     // Fetch all chat sessions for the sidebar
//     $chatSessions = ChatSession::with('user')->get();
    
//     // Fetch the specific chat session using the session ID
//     $chatSession = ChatSession::findOrFail($sessionId);
    
//     // Pass both the chat sessions and the specific chat session to the view
//     return view('Admin.home', compact('chatSessions', 'chatSession'));
// }







//  public function listChats()
//     {
//         $chatSessions = ChatSession::with('user')->get();
//         return view('Admin.chatss', compact('chatSessions'));
//     }

//     public function viewChat($sessionId)
//     {
//         $chatSession = ChatSession::findOrFail($sessionId);
//         return view('Admin.chatss', compact('chatSessions'));
//     }

//   public function sendMessage(Request $request, $sessionId)
// {
//     $message = Messagess::create([
//         'chat_session_id' => $sessionId,
//         'user_id' => $request->user_id,  // Correctly capture the user_id from the request
//         'message' => $request->message,
//         'from_admin' => true,
//     ]);

//     $adminId = auth()->id();
    
//     // Broadcasting the message to others, passing both adminId and userId
//     broadcast(new MessageSent($message, $adminId, $request->user_id))->toOthers();

//     return response()->json(['status' => 'Message sent!']);
// }


//     public function fetchMessages($sessionId)
// {
//     $chatSession = ChatSession::findOrFail($sessionId);
//     $messages = $chatSession->messages()->get();
//     $userId = $chatSession->user_id;

//     return response()->json(['messages' => $messages, 'user_id' => $userId]);
// }


public function addstaf(){

    return view('Admin.add-doctor');
}

public function add_doctors(Request $request){

    $employees=new employees;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorsimage',$imagename);
        $employees->image=$imagename;


        $employees->name=$request->name;
        $employees->specialty=$request->specialty;
        $employees->phone=$request->number;
        $employees->room=$request->room;
        $employees->department=$request->dep;


        $employees->save();

return redirect()->back()->with('message','Doctor Added Successfully');
}
   




public function ticketing() {
    // Fetch only tickets that are open and not marked as 'not fixed'
    $datas = ticket::where('status', 'open')
                   ->where(function($query) {
                       $query->where('frmadmin', '!=', 'not fixed')
                             ->orWhereNull('frmadmin');
                   })
                   ->get();

    // Count all tickets regardless of the frmadmin value
    $numopen = ticket::where('status', 'open')->count();
    $numclose = ticket::where('status', 'Close')->count();
    $numsolved = ticket::where('status', 'Solved')->count();

    $activityLogss = DB::table('user_activity_logs')->count();

    return view('Admin.list-ticket', compact('datas', 'numopen', 'numclose', 'numsolved', 'activityLogss'));
}



public function numclosetix(){
      $numclose= ticket::where('status','Close')->get();

      return view('Admin.number-closetix',compact('numclose'));

}

public function numsolvetix(){
      $numcsolve= ticket::where('status','Solved')->get();
      return view('Admin.number-solvetix',compact('numcsolve'));

}






     public function showResolveFormz($id)
{
    $dataz = ticket::find($id);

    if (!$dataz) {
        return redirect()->back()->with('error', 'Ticket not found.');
    }

    return view('Admin.response-ticket', compact('dataz'));
}



public function resolve_tix(Request $request, $id)
{
    $dataz = ticket::find($id);

    if (!$dataz) {
        return redirect()->back()->with('error', 'Ticket not found.');
    }

    $dataz->status = $request->status;
    $dataz->reply = $request->reply;
    $dataz->save();

Notification::route('mail', $dataz->email)->notify(new TicketResponse($dataz));

    return redirect()->back()->with('message','Message Ticket Sent Successfully');
}



     public function resolve_form($id)
{
    $dataz = ticket::find($id);

    if (!$dataz) {
        return redirect()->back()->with('error', 'Ticket not found.');
    }

    return view('Admin.response-ticket', compact('dataz'));
}

public function close_ticket($id) {
    $ticket = Ticket::find($id);

    if ($ticket) {
        $ticket->status = 'Close';
        $ticket->save();
    } else {
        // Handle the case where the ticket is not found
        return response()->json(['error' => 'Ticket not found'], 404);
    }

    return redirect()->back()->with('message', 'Ticket closed successfully!');
}

public function solve_ticket($id){
    $ticket = Ticket::find($id);

  if ($ticket) {
        $ticket->status = 'Solved';
        $ticket->save();
    } else {
        // Handle the case where the ticket is not found
        return response()->json(['error' => 'Ticket not found'], 404);
    }

    return redirect()->back()->with('message', 'Ticket Solve successfully!');
}




public function user_logins(){

        $activityLog = DB::table('activity_logs')->get();
        return view('Admin.usermanage.userlogins',compact('activityLog'));
}



public function changepw(){

    $data = User::whereIn('role_name', ['Normal User', 'Doctor', 'Nurse', 'Guests', 'Front Desk'])->get();

    return view('Admin.usermanage.changepwview-user', compact('data'));
}



public function updatepw($id) { // Accept the user ID as a parameter

    $selectuser = User::find($id);
    
    if (!$selectuser) {
        return redirect()->back()->with('error', 'User not found.');
    }

    return view('Admin.usermanage.changepassword', compact('selectuser'));
}



public function updatepw_request(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'password' => 'required|min:8|confirmed', // 'confirmed' checks for 'password_confirmation'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $selectuser = User::findOrFail($id);
    $selectuser->password = Hash::make($request->password); // Hash the new password
    $selectuser->save();

    return redirect()->route('pass.change', $id)->with('message', 'Password updated successfully');
}







     public function create() {
        return view('Admin.inventory.create');
    }


    public function prodStore(Request $request){
        
          $rules = [
             'ProductName' => 'required|min:3',
            'Status' => 'required',
            'UnitOrders' => 'required|numeric',
            'UnitStock' => 'required|numeric'            
        ];
       $validator = Validator::make($request->all(),$rules);


             if ($validator->fails()) {
            return redirect()->route('Admin.inventory.create')->withInput()->withErrors($validator);
        }

        $product = new Product();
        $product->ProductName = $request->ProductName;
        $product->Status = $request->Status;
        $product->UnitOrders = $request->UnitOrders;
        $product->UnitStock = $request->UnitStock;
        $product->save();


            if ($request->imagez != "") {
            $imagez = $request->imagez;
            $ext = $imagez->getClientOriginalExtension();
            $imageName = time().'.'.$ext;
            $imagez->move(public_path('uploads/products'),$imageName);
            $product->imagez = $imageName;
            $product->save();


        




            }
                    return redirect()->route('Product.view')->with('message','Product added successfully.');






    }



     public function index(){

    $products = Product::orderBy('created_at')->get();
      return view('Admin.inventory.edit-view',['products' => $products]);

         if ($request->imagez != "") {
            $rules['image'] = 'image';
        }

    }


      public function edit($id) {
        $product = Product::findOrFail($id);
        return view('Admin.inventory.edit-product',[
            'product' => $product
        ]);

      }


      public function update($id, Request $request) {

        $product = Product::findOrFail($id);

         $rules = [
             'ProductName' => 'required|min:3',
            'Status' => 'required|min:3',
            'UnitOrders' => 'required|numeric' ,
            'UnitStock' => 'required|numeric'            
        ];

     

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('Product.edit',$product->id)->withInput()->withErrors($validator);
        }

        // here we will update product
        $product->ProductName = $request->ProductName;
        $product->Status = $request->Status;
        $product->UnitOrders = $request->UnitOrders;
        $product->UnitStock = $request->UnitStock;
        $product->save();

        if ($request->imagez != "") {

            // delete old image
            File::delete(public_path('uploads/products/'.$product->imagez));

            // here we will store image
            $imagez = $request->imagez;
            $ext = $imagez->getClientOriginalExtension();
            $imageName = time().'.'.$ext; // Unique image name

            // Save image to products directory
            $imagez->move(public_path('uploads/products'),$imageName);

            // Save image name in database
            $product->imagez = $imageName;
            $product->save();
        }        

        return redirect()->route('product.edit.view')->with('message','Product updated successfully.');
    }



        



  public function destroy($id) {
        $product = Product::findOrFail($id);

       // delete image
       File::delete(public_path('uploads/products/'.$product->image));

       // delete product from database
       $product->delete();
        return redirect()->back();


    }

    public function view_list(){

      
     $products = Product::orderBy('created_at')->get();

    return view('Admin.inventory.view-product',['products' => $products]);
}




  public function delete($id){

        $product=Product::find($id);
         File::delete(public_path('uploads/products/'.$product->image));

        $product->delete();

      return redirect()->back();




    }

public function send_password($id) {
    // Retrieve the user by ID
    $users = User::find($id);

    // Check if user exists
    if (!$users) {
        return redirect()->back()->with('error', 'User not found.');
    }

    // Pass the user data to the view
    return view('Admin.usermanage.sendpw-email', compact('users'));
}

public function password_send(Request $request, $id) {
    $users = User::find($id);

    // Check if user exists
    if (!$users) {
        return redirect()->back()->with('error', 'User not found.');
    }

    $details = [
        'greeting'    => $request->greeting,
        'body'        => $request->body,
        'action_text' => $request->action_text,
        'action_url'  => $request->action_url,
        'endline'     => $request->endline
    ];

    // Sending email notification
    Notification::send($users, new EmailNotification($details));

    return redirect()->back()->with('message', 'Email sent successfully.');
}



public function sendtosuper($id) {
    $sendtix = ticket::find($id);

    if ($sendtix) {
        $sendtix->frmadmin = 'not fixed';
        $sendtix->save();
    } else {
        // Handle the case where the ticket is not found, if necessary
    }
    return redirect()->back()->with('message','Ticket Has been send to Super Admin');
}



public function submitted_appoinment(){

    $approveappoint = Appointments::where('status','Approved')->get();


    return view('Admin.appointment-list-sub',compact('approveappoint'));

}










  



  


 

 
  

}