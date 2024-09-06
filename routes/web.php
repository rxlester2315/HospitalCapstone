<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SuperAdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;

use App\Events\NewMessage;






Route::get('/', [HomeController::class, 'index']);

Route::get('/unreadcount',function(){
    $count=auth()->user()->getMessageCount();
    return response()->json(['count'=> $count]);
})->name('unreadcount');




Route::get('/create_appointment',[HomeController:: class,'create_view_appoint']);




Route::get('/Admin', [LoginController::class, 'Adminuser']);
Route::get('/HR', [LoginController::class, 'hruser'])->middleware(['auth','hr']);
Route::get('/User', [LoginController::class, 'Normaluser'])->middleware(['auth','user']);
Route::get('/Doc', [LoginController::class, 'Docview'])->middleware(['auth','doc']);
Route::get('/Superad', [LoginController::class, 'sadview'])->middleware(['auth','super'])->name('sadview');



Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logouts', [LoginController::class, 'logouts'])->name('logouts');



Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'storeUser'])->name('register');





// Route::post('/view_ticket',[HrController::class,'list_ticket']);






// Route::post('/tix_reply/{id}',[HrController::class,'tix_reply']);




Route::middleware(['auth'])->group(function () {



Route::controller(HrController::class)->group(function(){
    Route::get('/products','index')->name('Hr.products.index');
    Route::get('Hr/products/create','create')->name('Hr.products.create');
    Route::post('/products','prodStore')->name('Hr.products.store');
    Route::get('/products/{product}/edit','edit')->name('Hr.products.edit');
    Route::put('/products/{product}','update')->name('products.update');
    Route::get('/products/viewlist','view_list')->name('products.viewlist');
    Route::get('/delete/{id}','delete');

});

  Route::get('/add_doctor_view',[HrController:: class,'addview']);
    Route::POST('/upload_doctor',[HrController:: class,'upload']);

  Route::get('/view_tickets',[HrController::class,'list_ticket']);
  Route::get('/send_mail/{id}',[HrController::class,'send_mail']);
  Route::get('/viewappointment',[HrController:: class,'viewappointment']);
  Route::get('/approved/{id}',[HrController::class,'approved']);
  Route::get('/resolve/{id}', [HrController::class, 'showResolveForm'])->name('Hr.tickets.resolve');
  Route::put('/resolve/{id}', [HrController::class, 'resolve_tix'])->name('Hr.tickets.resolve.update');
  Route::post('/mail/{id}',[HrController::class,'mail']);
  Route::get('/attend',[HrController::class,'attendview']);
  Route::get('/dl_excell', [HrController::class, 'export']);

  Route::get('/attendance',[HrController::class,'attendview']);
  Route::get('/docsched',[HrController::class,'schedule_doc']);

  Route::get('/leave-list',[HrController::class,'leavelist']);

    Route::get('/leave_approved/{id}',[HrController::class,'leave_approved']);
      

  Route::get('/leave_canceled/{id}',[HrController::class,'leave_canceled']);

    
















Route::get('getEmployees/{id}', [HomeController::class, 'getEmployees']);
Route::POST('/appointment',[HomeController:: class,'appointments']);
Route::get('/myappointment',[HomeController:: class,'myappointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);
Route::get('/view_doctor_receipt',[HomeController::class,'user_receipt']);
Route::get('/view/{id}',[HomeController::class,'view_info']);
Route::get('/dl_medicine/{id}',[HomeController::class,'dl_medicine']);







Route::get('/listappoint',[DoctorController::class,'listAppointment']);  
Route::get('/send_ticket',[DoctorController::class,'sendticket']);  
Route::post('/send_ticket',[DoctorController::class,'send_ticket']); 

Route::get('/create-receipt/{id}', [DoctorController::class, 'showCreateForm'])->name('show.create');
// Route::post('/save-additional-data/{id}', [DoctorController::class, 'saveAdditionalData'])->name('save.additional.data');

Route::post('/store-receipt', [DoctorController::class, 'receipt_store'])->name('get.store');


 Route::get('/list_receipt',[DoctorController::class,'patient_receipt']);  
  Route::get('/view_receipt/{id}',[DoctorController::class,'view_patient']);
  Route::get('/dl_view/{id}',[DoctorController::class,'dl_view']);

  Route::get('/listsucc',[DoctorController::class,'successPat']);  


  Route::get('/receipt_sent',[DoctorController::class,'list_sent_receipt']);
 Route::get('/doc_sched',[DoctorController::class,'make_sched']);
  Route::post('/doc_sched',[DoctorController::class,'store_sched'])->name('store_sched');


Route::get('/create_leave',[DoctorController::class,'view_leaves']);
Route::post('/create_leave',[DoctorController::class,'leave_store'])->name('leave-store');

Route::get('/doc_profile/{id}',[DoctorController::class,'profile']);
Route::get('/doc_edit/{id}',[DoctorController::class,'edit_doc']);
Route::post('/doc_edit',[DoctorController::class,'edit_store'])->name('profile-store');

Route::get('/doc_profile/{id}',[DoctorController::class,'profile'])->name('profiless');

Route::get('/register_profile',[DoctorController::class,'register_prof']);




Route::get('/Admin',[AdminController::class,'view']);
Route::get('/users_manage',[AdminController::class,'usermanage'])->name('manage');
Route::get('/users_edit/{id}',[AdminController::class,'editmanage'])->name('profiles');
Route::put('/users_edit/{id}',[AdminController::class,'update_manage'])->name('store');

Route::get('/users_edits/{id}', [AdminController::class, 'archive'])->name('archives');

// Route::post('/users_edit',[AdminController::class,'archive_retrieve'])->name('retrieve-user');

// Route::post('/viewonly/{id}', [AdminController::class, 'restoreUserById'])->name('testing');

Route::get('/view_archives', [AdminController::class, 'listarch'])->name('list');
Route::post('/view_archives/{id}', [AdminController::class, 'restoreUserById'])->name('restore');



// Route::post('/chat/send', [ChatController::class, 'send']);










  






});

Route::post('/send-message', [ChatController::class, 'sendMessage']);


// Route::post('/send-message', function (Request $request) {
//     $message = $request->input('message');
//     $user = 'guest'; // For non-authenticated users, use a generic identifier

//     event(new MessageSent($message, $user));

//     return ['status' => 'Message Sent!'];
// });


















// Super Admin

Route::get('/superhome',[SuperAdController::class,'view']);  
Route::get('userManagement', [SuperAdController::class, 'index'])->middleware('auth')->name('userManagement');   
Route::get('user/add/new', [SuperAdController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [SuperAdController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [SuperAdController::class, 'viewDetail']);

Route::post('update', [SuperAdController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [SuperAdController::class, 'delete']);
Route::get('activity/log', [SuperAdController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [SuperAdController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');
Route::get('change/password', [SuperAdController::class, 'changePasswordView']);
Route::post('change/password/db', [SuperAdController::class, 'changePasswordDB']);