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
use App\Http\Controllers\GuessController;
use App\Http\Controllers\FrontDeskController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;


use App\Events\NewMessage;
use App\Events\GuessMessage;




Route::get('/unreadcount',function(){
    $count=auth()->user()->getMessageCount();
    return response()->json(['count'=> $count]);
})->name('unreadcount');



Route::middleware(['auth'])->group(function () {






//Super Admin Route

Route::get('/superhome',[SuperAdController::class,'index_admin']);  

Route::get('userManagement', [SuperAdController::class, 'index'])->middleware('auth')->name('userManagement');   
Route::get('user/add/new', [SuperAdController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [SuperAdController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [SuperAdController::class, 'viewDetail']);
Route::get('/listarchives/{id}',[SuperAdController::class,'setarchives'])->name('archivead');
Route::post('update', [SuperAdController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [SuperAdController::class, 'delete']);
Route::get('activity/log', [SuperAdController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [SuperAdController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');
Route::get('change/password', [SuperAdController::class, 'changePasswordView']);
Route::post('change/password/db', [SuperAdController::class, 'changePasswordDB']);
Route::get('/restore' , [SuperAdController::class,'listrestore'])->name('archives-restore');
Route::post('/restores/{id}',[SuperAdController:: class,'restoreDeleteAd'])->name('restore-users');

Route::get('userspw/{id}',[SuperAdController::class,'updatepasswordview'])->name('user.reset');  
Route::post('users/{id}/update',[SuperAdController::class,'updatepassword'])->name('users.update-password');

Route::get('inpersonatess',[SuperAdController::class,'inpersonate_view'])->name('listin.personate');  


Route::get('impersonate/{id}', [SuperAdController::class, 'impersonate'])->name('impersonate')->middleware(['auth', 'super']);
Route::get('impersonate/leave', [SuperAdController::class, 'leave'])->name('impersonate.leave')->middleware(['auth', 'super']);

Route::get('updates_system',[SuperAdController::class,'listupdate'])->name('update.list');  
Route::post('updates_system',[SuperAdController::class,'updatestore'])->name('update.storezzz');  

Route::get('Ticket_sendings',[SuperAdController::class,'alltickets'])->name('ticket.sends');  


Route::get('checking_issue/{id}',[SuperAdController::class,'issuetickets'])->name('ticket.sends');  

Route::post('checking_issue/{id}',[SuperAdController::class,'checkingissue'])->name('ticket.storez');  





//Admin

Route::get('/add_doc',[AdminController::class,'addstaf']);
Route::post('/add_doc',[AdminController::class,'add_doctors']);
Route::get('/Admin',[AdminController::class,'view']);
Route::get('/users_manage',[AdminController::class,'usermanage'])->name('manage');
Route::get('/users_edit/{id}',[AdminController::class,'editmanage'])->name('profiles');
Route::put('/users_edit/{id}',[AdminController::class,'update_manage'])->name('store');
Route::get('/view_archives', [AdminController::class, 'listarch'])->name('list');
Route::post('/view_archives/{id}', [AdminController::class, 'restoreUserById'])->name('restore');
Route::get('/users_edits/{id}', [AdminController::class, 'archive'])->name('archives');
Route::get('/tickets', [AdminController::class, 'ticketing'])->name('ticket.view');

Route::put('/resolves{id}', [AdminController::class, 'resolve_tix'])->name('resolve.view');
Route::get('/resolves/{id}', [AdminController::class, 'showResolveFormz'])->name('show.ticketss');
Route::post('/tickets/{id}/close', [AdminController::class, 'close_ticket'])->name('tickets.close');
Route::post('/tickets/{id}/solve', [AdminController::class, 'solve_ticket'])->name('tickets.solved');

Route::post('/mail/{id}',[AdminController::class,'mail']);
Route::get('/userlog',[AdminController::class,'user_logins']);
Route::get('/changepw_user',[AdminController::class,'changepw']);
Route::get('/changepw_userss/{id}',[AdminController::class,'updatepw'])->name('pass.change');
Route::post('/changepw_pws/{id}', [AdminController::class, 'updatepw_request'])->name('changepw.posts');

Route::get('/closetickets',[AdminController::class,'numclosetix']);
Route::get('/solvedtickets',[AdminController::class,'numsolvetix']);
Route::get('/email_password/{id}', [AdminController::class, 'send_password']);
Route::post('/email_password/{id}', [AdminController::class, 'password_send'])->name('password.send.email');

Route::get('/sendtosad/{id}', [AdminController::class, 'sendtosuper']);


Route::get('/appointment_submitteds',[AdminController::class,'submitted_appoinment']);

Route::get('/doctor_scheds',[AdminController::class,'scheddoc']);





Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/products-list', [AdminController::class, 'index'])->name('product.edit.view');
    Route::get('/products', [AdminController::class, 'create'])->name('Product.view');
    Route::post('/products', [AdminController::class, 'prodStore'])->name('Product.store');
    Route::get('/products/{product}/edit', [AdminController::class, 'edit'])->name('Product.edit');
    Route::put('/products/{product}', [AdminController::class, 'update'])->name('Product.Update');
    Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('Product.Delete');
});









  





//Front-DeskController

Route::get('unverified-list',[FrontDeskController::class,'req_unverified']);
Route::get('verify-user/{id}', [FrontDeskController::class, 'verifyUser'])->name('verify.user');


Route::get('patient_appointment',[FrontDeskController::class,'patientview']);
Route::get('patient_list',[FrontDeskController::class,'patient_record']);
Route::get('today_sched', [FrontDeskController::class, 'schedule_today'])->name('today_sched');
Route::get('appointments', [FrontDeskController::class, 'displayData'])->name('appointments'); // Display the appointments
Route::get('today_sched', [FrontDeskController::class, 'sendDataDate'])->name('today_sched'); // Handle the date filtering
Route::get('unverified',[FrontDeskController::class,'unverified'])->name('unverified');
Route::get('verifieduser',[FrontDeskController::class,'verified'])->name('verifieduser');
Route::get('archivedss',[FrontDeskController::class,'listarchived'])->name('archivedss');
Route::get('ticket',[FrontDeskController::class,'viewticket'])->name('ticket');
Route::post('ticket',[FrontDeskController::class,'send_ticketss'])->name('sendticket');
Route::get('chatat', [FrontDeskController::class, 'listChats'])->name('chatat');
Route::get('/admin/chat/{sessionId}', [FrontDeskController::class, 'viewChat']);
Route::post('/admin/chat/{sessionId}/send', [FrontDeskController::class, 'sendMessage']);
Route::get('/admin/chat/{sessionId}/messages', [FrontDeskController::class, 'fetchMessages']);
Route::get('pending_app',[FrontDeskController::class,'list_pend'])->name('archived');
Route::get('display_arrive',[FrontDeskController::class,'display_arrives'])->name('arrives.time');
Route::get('display_arrives',[FrontDeskController::class,'arrive_times_today'])->name('arrives.set.todays');
Route::get('arrive_setime/{id}',[FrontDeskController::class,'arrive_set'])->name('arrive.view.set');
Route::post('arrive_setimes/{id}',[FrontDeskController::class,'subtime_arrive'])->name('submit.time.arrive');

Route::get('arrive_approve', [FrontDeskController::class, 'arriveappoint']);

Route::get('arrive_approves/{id}', [FrontDeskController::class, 'mark_arrive'])->name('arrive.mark');

//Human Resources 


  Route::get('/add_doctor_view',[HrController:: class,'addview']);
  Route::POST('/upload_doctor',[HrController:: class,'upload'])->name('adddoctor');
  Route::get('/view_tickets',[HrController::class,'list_ticket']);
  Route::get('/send_mail/{id}',[HrController::class,'send_mail']);
  Route::get('/viewappointment',[HrController:: class,'viewappointment']);
  Route::get('/approved/{id}',[HrController::class,'approved']);
Route::delete('/canceled/{id}', [HrController::class, 'canceled'])->name('appointment.canceled');

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

    Route::get('/products/viewlist',[HrController::class,'view_list'])->name('products.viewlist')->middleware(['auth','hr']);

  Route::get('/schedule_approved/{id}',[HrController::class,'sched_accept']);
  Route::get('/schedule_rejected/{id}',[HrController::class,'sched_reject']);


Route::get('/chart-data', [HrController::class, 'charttable']);

Route::get('/message_patients/{id}', [HrController::class, 'checkmessage']);

Route::get('/send_tickets_hr', [HrController::class, 'sendtickets']);
Route::post('/send_tickets_hrs', [HrController::class, 'sendtixss'])->name('hr.ticket.store');






  //Doctor Route

  Route::get('/listappoint',[DoctorController::class,'listAppointment']);  
Route::get('/send_ticket',[DoctorController::class,'sendticket']);  
Route::post('/send_ticket',[DoctorController::class,'send_ticket']); 
Route::get('/create-receipt/{id}', [DoctorController::class, 'showCreateForm'])->name('show.create');
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
Route::get('/todayappointsz',[DoctorController::class,'todayappointments'])->name('zzzzz');
Route::get('/todayappoints',[DoctorController::class,'todayappointview'])->name('view.date');
Route::get('/doneappoint',[DoctorController::class,'completedappoint'])->name('complete.appoint');
Route::get('/complete-appointment/{id}', [DoctorController::class, 'completeAppointment'])->name('complete.appointment');
Route::get('recordcomplete', [DoctorController::class, 'record_complete']);
Route::get('/changesPasswordDoc',[DoctorController:: class,'change_passwordDoc']);
Route::post('/changesPasswordDoc',[DoctorController:: class,'changepass_storeDoc']);
Route::get('/listrecord',[DoctorController::class,'recordview']);
Route::get('/sendmessage/{id}',[DoctorController::class,'sendmessage'])->name('sendmessage');

Route::post('/sendmessage/{id}', [DoctorController::class, 'sendmessage']);

Route::get('/chatwith_patients',[DoctorController::class,'patientchatview'])->name('sendmessage');





Route::post('/doctor/sendmessage/{id}', [DoctorController::class, 'sendmessage'])->name('doctor.sendmessage');
Route::get('/doctor/chat-history/{appointmentId}', [DoctorController::class, 'loadChatHistory'])->name('doctor.chat.history');




Route::get('/doctor/chat/{id}', [DoctorController::class, 'loadMessages']);
Route::get('/patient/chat', [HomeController::class, 'loadMessages']);

Route::get('removepatient/{id}', [DoctorController::class, 'remove_appointment'])->name('remove.patientss');

Route::get('/submitted_request',[DoctorController::class,'schedule_sub'])->name('submitted.sched');







Route::get('showchat/{id}', [HomeController::class, 'showChat']);















//Nurse 


Route::get('pending',[NurseController::class,'list_pending']);
Route::get('todayappoint',[NurseController::class,'today_appoint'])->name('today');
Route::get('appointtoday',[NurseController::class,'displaylist'])->name('appoint');
Route::get('approve',[NurseController::class,'list_approve']);
Route::get('arrivingtime', [NurseController::class, 'display_arive'])->name('arrivingtime');
Route::get('arrivingstore', [NurseController::class, 'arrive_time'])->name('arrive.store');
Route::get('patienttm/{id}', [NurseController::class, 'patient_time']);
Route::get('patienttm/{id}', [NurseController::class, 'patient_time']);

Route::post('patienttm/{id}', [NurseController::class, 'submittime_arrive'])->name('submit.arrive');
Route::get('recordPatient', [NurseController::class, 'recordPatientView']);

Route::get('viewpatientlist', [NurseController::class, 'patient_listss']);

Route::get('patient_appointments',[NurseController::class,'appointments_list'])->name('appoint.remark');

Route::get('remark_patients/{id}', [NurseController::class, 'remarkpatients']);

Route::post('remark_store', [NurseController::class, 'remark'])->name('remark.store');

Route::get('filter_appointments', [NurseController::class, 'filterAppointments'])->name('filter_appointments');


Route::get('set_assesment', [NurseController::class, 'assessment'])->name('arrives.pat');
Route::get('select_assesment/{id}', [NurseController::class, 'selected_patients']);


Route::post('asses_user', [NurseController::class, 'patientassement'])->name('asses.store');

Route::get('sendticket_nurse', [NurseController::class, 'nurse_ticket'])->name('ticket.nurse');

Route::post('sendticket_nurses', [NurseController::class, 'nurseticket_store'])->name('nurse.storetix');













//Home

Route::get('getEmployees/{id}', [HomeController::class, 'getEmployees']);
Route::POST('/appointment',[HomeController:: class,'appointments'])->name('makeappointments');
Route::get('/myappointment',[HomeController:: class,'myappointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);
Route::get('/view_doctor_receipt',[HomeController::class,'user_receipt']);
Route::get('/view/{id}',[HomeController::class,'view_info']);
Route::get('/dl_medicine/{id}',[HomeController::class,'dl_medicine']);
Route::get('/view_doctor_receipt/{id}',[HomeController::class,'archivereceipt'])->name('archivemed');
Route::post('edit_normal_prof',[HomeController::class,'NormalEditStore'])->name('edit.normal');
Route::get('view_normal_prof',[HomeController::class,'NormalUserProf'])->name('view.normal.prof');
Route::get('view_edit_prof',[HomeController::class,'NormalEditProfView'])->name('view.normal.edit');
Route::post('edit_normal_prof',[HomeController::class,'NormalEditStore'])->name('edit.normal');
Route::get('view_update_normal',[HomeController::class,'updateNormalView'])->name('update.normal');
Route::post('view_update_normal',[HomeController::class,'updateNormal'])->name('update.Store');
Route::get('/create_appointmentsss',[HomeController:: class,'create_view_appoint']);
Route::get('/changesPassword',[HomeController:: class,'change_password']);
Route::post('/changesPassword',[HomeController:: class,'changepass_store']);

Route::get('/appointcreated',[HomeController:: class,'aftersendingapp'])->name('success');

Route::get('/services',[HomeController::class,'displaying_services']);

Route::get('/mydoctor',[HomeController::class,'view_mydoc']);

Route::get('/chatdoc/{id}',[HomeController::class,'chatwithdoctor']);
Route::post('patient/send-message', [HomeController::class, 'patientSendMessage'])->name('patient.sendmessage');

Route::get('/getUserAppointments/{userId}',[HomeController::class,'getUserAppointments']);

Route::get('/nurse_assesment',[HomeController::class,'nurseasses']);














//Guest 

Route::get('view_profile_guest',[GuessController::class,'GuestViewProf'])->name('guest_view');
Route::get('view_update_guest',[GuessController::class,'UpdateGuestProf'])->name('update.view');
Route::post('view_store',[GuessController::class,'registerGuest'])->name('store_view');
Route::post('register_Guest',[GuessController::class,'UpdatestoreGuest'])->name('update.store');
Route::get('chatss', [GuessController::class, 'startChat']);
Route::post('/user/chat/{sessionId}/send', [GuessController::class, 'sendMessage']);
Route::get('/user/chat/{sessionId}/messages', [GuessController::class, 'fetchMessages']);

Route::post('/create', [GuessController::class, 'create_account'])->name('createguess');
Route::get('guessprof',[GuessController::class,'guessproff']);

Route::get('/changesPasswordGuest',[GuessController:: class,'change_passwordGuest']);
Route::post('/changesPasswordGuest',[GuessController:: class,'changepass_storeGuest']);

Route::POST('/Guessappoint',[GuessController:: class,'guestappointments'])->name('guest.appointment');
Route::get('/Guessappoint',[GuessController:: class,'guestappointz']);
Route::get('/create_guest_appointment',[GuessController:: class,'create_appoint_guestz']);
Route::get('/redirect-succes',[GuessController:: class,'succes_message']);

Route::impersonate();


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


});


  //Login
  

Route::get('/Guests', [LoginController::class, 'guview'])->name('Guests')->middleware(['auth','guest']);
Route::get('/Admin', [LoginController::class, 'Adminuser'])->name('adminss')->middleware(['auth','admin']);
Route::get('/HR', [LoginController::class, 'hruser'])->name('hrss')->middleware(['auth','hr']);
Route::get('/User', [LoginController::class, 'Normaluser'])->name('userss')->middleware(['auth','user']);
Route::get('/Doc', [LoginController::class, 'Docview'])->name('docss')->middleware(['auth','doc'])->name('doctors');
Route::get('/Superad', [LoginController::class, 'sadview'])
    ->middleware(['auth', 'super'])
    ->name('sadview');

Route::get('/Front', [LoginController::class, 'frontdeskview'])->name('frontss')->middleware(['auth','front']);
Route::get('/Nurse', [LoginController::class, 'nurseview'])->name('nursses')->middleware(['auth','nurse']);


//Register



Route::post('/registerAccount', [RegisterController::class, 'storeRegister'])->name('register');
Route::get('/registerAccount', [RegisterController::class, 'MainLogin'])->name('registerAccount');

Route::get('/guessaccount', [GuessController::class, 'guessregister']);
Route::post('/guessaccount', [GuessController::class, 'create_account'])->name('createguess');


//dashboard

Route::get('/', function () {
    if (Auth::check()) {
        // User is authenticated, redirect to their dashboard
        return redirect()->action([DashboardController::class, 'index']);
    }

    // User is not authenticated, show the landing page
    return app(HomeController::class)->index();
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');



   Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

   Route::get('/forgotpassword', [ForgotPasswordController::class, 'forgot_pass'])->name('forgotpw');
   Route::post('/forgotpassword', [ForgotPasswordController::class, 'forgetpass_post'])->name('forgotpass');
   Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetpw'])->name('reset');
   Route::post('/reset-password', [ForgotPasswordController::class, 'resetPwpost'])->name('reset.post');

   Route::get('conditionterm',[HomeController::class,'termncondition'])->name('conditioncreated');