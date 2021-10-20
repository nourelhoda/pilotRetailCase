<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->query('retails') ||!$request->query('retails') =='all' ){

            $messages= Message::all();
            return view('message.index',compact('messages'));
        }
        elseif($request->query('retails')){
          
            $messages = Message::where('retail', $request->query('retails'))->get();
             return view('message.index',compact('messages'));
        }
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $name= $request->query('Name');
        $newsCount = Message::where('retail', '=', $name)->get()->count();
       
        return view('message.create',compact('name','newsCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // dd($request);
        $data = request()->validate([
            'retail' =>'required',
            'image_path'=>'required|mimes:jpg,png,jpeg',
            'headline' =>'required|max:50',
            'body' =>'required|max:100',
        ]);
        $imageName=time().'_'.$request->retail.'.'. $request->image_path->extension();
        $data['image_path'] = $imageName;
        $request->image_path->move(public_path('images'),$imageName);
        $message= Message::create($data);
       return redirect('/messages');
      // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($message)
    {
  
       $result = Message::where('retail', $message)->get();
       return view('message.show',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
