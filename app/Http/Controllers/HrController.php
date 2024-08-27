<?php
namespace App\Http\Controllers;
use App\Exports\AttendanceExport;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\Employees;
use App\Models\Appointments;
use App\Models\Product;
use App\Models\ticket;
use App\Notifications\TicketResponse;
use DB;
use Illuminate\Support\Carbon;

use App\Models\Attend;



use Notification;

use App\Notifications\EmailNotification;

class HrController extends Controller
{
    
    public function addview(){


        return view('HR.add_doctor');


    }
  public function upload(Request $request){

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



    public function viewappointment(){

       $data=appointments::all();
     return view('Hr.viewappointment',compact('data'));
   

}

public function approved($id){

    $data=appointments::find($id);
    $data->status='Approved';
    $data->save();
    return redirect()->back();

}


public function canceled($id){

    $data=appointments::find($id);
    $data->status='Canceled!!';
   $data->delete();
    return redirect()->back();




}



 public function send_mail($id){

        $data=appointments::find($id);
        return view('Hr.send_mail',compact('data'));
    }


     public function mail(Request $request,$id){

                $data=appointments::find($id);


              $details = [
    'greeting'    => $request->greeting,
    'body'        => $request->body,
    'action_text' => $request->action_text,
    'action_url'  => $request->action_url,
    'endline'     => $request->endline
];


Notification::send($data,new EmailNotification($details));


return redirect()->back();

    }


    public function index(){

    $products = Product::orderBy('created_at')->get();
      return view('Hr.products.list',['products' => $products]);

         if ($request->imagez != "") {
            $rules['image'] = 'image';
        }

    }

     public function create() {
        return view('Hr.products.create');
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
            return redirect()->route('Hr.products.create')->withInput()->withErrors($validator);
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
            return redirect()->route('Hr.products.create')->with('message','Product added successfully.');


        




            }




    }

      public function edit($id) {
        $product = Product::findOrFail($id);
        return view('Hr.products.edit',[
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
            return redirect()->route('Hr.products.edit',$product->id)->withInput()->withErrors($validator);
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

        return redirect()->route('Hr.products.index')->with('success','Product updated successfully.');
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

    return view('Hr.products.viewlist',['products' => $products]);
}




  public function delete($id){

        $product=Product::find($id);
         File::delete(public_path('uploads/products/'.$product->image));

        $product->delete();

      return redirect()->back();




    }


    public function  viewticket(){

        return view ('Hr.view-tickets');
    }

    public  function list_ticket(){

        $datas = ticket::all();
       return view('Hr.ticketss.view-tickets',compact('datas'));
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

    return redirect()->back();
}
    


     public function showResolveForm($id)
{
    $dataz = ticket::find($id);

    if (!$dataz) {
        return redirect()->back()->with('error', 'Ticket not found.');
    }

    return view('Hr.ticketss.resolve', compact('dataz'));
}



public function attendview(Request $request)
{
    $date = $request->input('date');

    if ($date) {
        $formattedDate = Carbon::parse($date)->format('D, M d, Y');
        $attend = Attend::where('date_time', 'LIKE', "%$formattedDate%")->orderBy('id', 'desc')->paginate(10);
    } else {
        $attend = Attend::orderBy('id', 'desc')->paginate(10);
    }

    $todayDate = Carbon::now()->format('l d, Y');

    return view('Hr.Management.attendance', compact('attend', 'todayDate', 'date'));
}



 public function export(Request $request) 
    {
    $date = $request->input('date');

    $attend = Attend::query();

    if ($date) {
        $formattedDate = Carbon::parse($date)->format('D, M d, Y');
        $attend->where('date_time', 'LIKE', "%$formattedDate%");
    }

    $attendData = $attend->orderBy('id', 'desc')->get();

    $filename = 'TodayAttendance.xlsx';

    return Excel::download(new AttendanceExport($attendData), $filename);
    }


  

    









    



     








}