<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use validate;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index',[
            'contacts'=> Contact::latest()->paginate(5)
        ]);
    }
    public function create()
    {
        return view('contacts.create');
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'email' =>'required',
        //     'phone_1' =>'required'|'numeric',
        //     'phone_2' =>'required'|'numeric',
        //     'phone_3' =>'required'|'numeric',
        //     'notes' =>'required'
        // ]);

        $contact = new Contact;
        $contact->firstname=$request->firstname;
        $contact->lastname=$request->lastname;
        $contact->email=$request->email;
        $contact->phone_1=$request->phone_1;
        $contact->phone_2=$request->phone_2;
        $contact->phone_3=$request->phone_3;
        $contact->notes=$request->notes;

        $contact->save();
        return back()->withSuccess('Contact is created');
    }

    public function edit($id)
    {
        $contact = Contact::where('id',$id)->first();
        return view('contacts.edit',['contact'=> $contact]);
        dd($id);
    }
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' =>'required',
            'phone_1' =>'required'|'numeric',
            'phone_2' =>'required'|'numeric',
            'phone_3' =>'required'|'numeric',
            'notes' =>'required'
        ]);
        $contact = Contact::where('id',$id)->first();

        $contact->firstname=$request->firstname;
        $contact->lastname=$request->lastname;
        $contact->email=$request->email;
        $contact->phone_1=$request->phone_1;
        $contact->phone_2=$request->phone_2;
        $contact->phone_3=$request->phone_3;
        $contact->notes=$request->notes;

        $contact->save();
        return back()->withSuccess('Contact is Updated'); 
    }

    public function destroy($id)
    {
        $contact = Contact::where('id',$id)->first();
        $contact->delete();
        return back()->withSuccess('Contact is Deleted');
    }
    public function show($id)
    {
        $contact = Contact::where('id',$id)->first();
        
        return view('contacts.show',['contact'=>$contact]);
    }
}
