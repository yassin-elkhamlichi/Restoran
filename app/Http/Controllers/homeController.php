<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\chef;
use App\Models\table;
use Illuminate\Http\Request;
use App\Models\Contact;

class homeController extends Controller
{

    public function service() {
        return view('service.index');
    }
    public function menu() {
        return view('menu.index');
    }
    public function booking() {
        return view('booking.index');
    }
    public function contact() {
        return view('contact.index');
    }
    public function team() {
        $chef=chef::all();
        return view('team.index',compact('chef'));
    }
    public function about() {
        return view('about.index');
    }
    public function testimentail() {
        return view('testimentail.index');
    }
    public function login() {
        return view('auth.login');
    }
    public function register() {
        return view('auth.register');
    }
    public function tableDetalils($id)
    {
        $table = table::find($id);
        return view('home.tableDetails',compact('table'));
    }
    public function add_booking(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'datetime'=>'required',
            'NP'=>'required',
        ]);

        $Date = $request->datetime;
        $email = $request->email;
        $name = $request->name;
        $NP = $request->NP;
        $isBooked = Booking::where('table_id',$id)
            ->where('date','>=',$Date)
            ->where('email','>=',$email)
            ->where('name','>=',$name)
            ->where('guests','>=',$NP)->exists();
        if ($isBooked){
            return redirect()->back()->with('message','Table is already Booked please try differnt date');
        }
        else
        {

            $data = new Booking();
            $data ->table_id=$id;
            $data->name=$request->name;
            $data->email=$request->email;
            $data->date=$request->datetime;
            $data->guests=$request->NP;
            $data->save();
            return redirect()->back()->with('message','Table Booked Successfully');
        }
    }
    public  function add_contact(Request $request)
    {
        $contact = new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->back()->with('message','message send seccessfully');
    }


}
