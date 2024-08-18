<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\table;
use App\Models\bookings;
use App\Models\chef;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function home() {
        $chef = chef::all();
        $table  = Table::all();
        return view('home.index', compact('chef','table' ));
    }


    public function index()
    {
      if(Auth::id()){
           $usertype=Auth()->user()->usertype;
           $user=Auth()->user()->name;

            if ($usertype=='user'){
                $table=table::all();
                return view('dashboard')->with('name',$user);
            }
            else if ($usertype=='admin'){
                return view('admin.index')->with('name',$user);
            }
            else{
                return redirect()->back();
            }
        }
    }
public function create_table()
{
    return view('admin.create_table');
}
public function add_table(Request $request)
{
   $data = new table();
   $data->table_titel = $request->tableTitle;
   $data->image = $request->image;
   $data->price = $request->price;
   $data->type_table = $request->Type;
   $data->nombre_per = $request->nombrePer;
   $data->description = $request->description;
   $image=$request->image;;
    $imagename=time().'.'.$image->getClientOriginalName();
    $request->image->move('tablesImg', $imagename);
    $data->image=$imagename;
   $data->save();

   return redirect()->back()->with('message', 'Chef added successfully!');
}
public function view_table(Request $request)
{
    $data = table::all();
   return view('admin.view_table',compact('data'));
}
public function tableDelet($id)
{
    $data = table::find($id);
    $data->delete();
   return redirect()->back();
}
public function tableUpdate($id)
{
    $data = table::find($id);
   return view('admin.update_table',compact('data'));
}


public function editTable(Request $request,$id)
{
    $data = table::find($id);
    $data->table_titel = $request->tableTitle;
    $data->price = $request->price;
    $data->type_table = $request->Type;
    $data->nombre_per = $request->nombrePer;
    $data->description = $request->description;
    $image=$request->image;
    if($image){
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('tablesImg', $imagename);
        $data->image=$imagename;
    }

    $data->save();
   return redirect()->back();
}
public function bookings( )
    {
        $data = Booking::all();
        return view('admin.booking',compact('data'));
    }
 public function BookingDelete($id)
    {
        $data = Booking::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function approve_book($id)
    {
        $booking=Booking::find($id);
       $booking->status='Approve';
       $booking->save();
        return redirect()->back();
    }
    public function rejected_book($id)
    {
        $booking=Booking::find($id);
       $booking->status='Rejected';
       $booking->save();
        return redirect()->back();
    }
    public function all_messages( )
    {
        $data = Contact::all();
        return view('admin.message',compact('data'));
    }
    public function send_email($id )
    {
        $data = Contact::find($id);
        return view('admin.send_email',compact('data'));

    }
    public function mail(Request $request,$id )
    {
        $data = Contact::find($id);
        $details =[
            'greeting'=> $request->greeting,
            'mail_body'=> $request->mail_body,
            'action_text'=> $request->action_text,
            'action_url' => $request->action_url,
            'end_line'=> $request->end_line,
        ];
        $data->notify(new SendEmailNotification($details));
        return redirect()->back();
    }
    public function add_chef()
    {
        return view('admin.add_chef');
    }
    public function create_chef(Request $request)
    {
        $data = new chef();
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->experience = $request->experience;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalName();
            $request->image->move('chefsImg', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message', 'Chef added successfully!');
    }

    public function all_chef(Request $request)
    {
        $data = chef::all();
        return view('admin.all_chefs',compact('data'));
    }
    public function chefDelete($id)
    {
        $data = chef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function chefUpdate($id)
    {
        $data = chef::find($id);
        return view('admin.chefUpdate',compact('data'));
    }


    public function editchef(Request $request, $id)
    {
        $chef = chef::find($id);
        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        $chef->experience = $request->experience;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalName();
            $request->image->move('chefsImg', $imagename);
            $chef->image = $imagename;
        }
        $chef->save();
        return redirect()->back()->with('message', 'Chef update successfully!');
    }


}

