<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use validate;

class ContactController extends Controller
{
    public function index()
    {
        $data = array('title'=> 'All Contacts');

        return view('contacts.index',$data,[
            'contacts'=> Contact::latest()->paginate(5)
        ]);
    }
    public function create()
    {
        $data = array('title'=> 'New Contact');
        return view('contacts.create',$data);
    }
    public function store(Request $request)
    {
        
        $contact = new Contact;
        if(isset($request->edit_id) && !empty($request->edit_id)){
            $contact = $contact::find($request->edit_id);
        }
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
       
        $data = array(
            'title'=> 'Edit Contact',
            'edit' => Contact::find($id)->first());
        return view('contacts.create',$data);
        // return view('contacts.edit',['contact'=> $contact]);
    }
    public function update(Request $request,$id)
    {
       
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
