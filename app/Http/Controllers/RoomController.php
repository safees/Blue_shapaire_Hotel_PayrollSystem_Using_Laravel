<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create() {
        return view('rooms.rooms');
    }
    

    public function store(Request $request) {


        $request->validate([    
            'RoomNo' => 'required|unique:rooms',
            'RoomName' => 'required',
            'RoomType' => 'required',
            'FloorNo' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:10000'
        ]);
    
        $RoomNo = $request['RoomNo'];
        $RoomName = $request['RoomName'];
        $RoomType = $request['RoomType'];
        $FloorNo = $request['FloorNo'];
        $Price = $request['Price'];
        $Description = $request['Description'];
        $image = $request->file('image')->store('uploads','public');
      //$new_image = time().'.'.$image->getClientOriginalExtension();
      //$image->save(public_path("images").$new_image);

    
        $room = new Room();

        $room->RoomNo = $RoomNo;
        $room->RoomName = $RoomName;
        $room->RoomType = $RoomType;
        $room->FloorNo = $FloorNo;
        $room->Price = $Price;
        $room->Description = $Description;
        $room->image = $image;


        
      
        $room->save(); 
        $data=Room::all();
        //dd($data);

        return view('rooms.rooms')->with('rooms',$data);
       
    }


    

    public function View(){

        $updateData=Room::all();
        //dd($updateData);

        return view('rooms.RoomView')->with('Rupdates',$updateData);
       
    }

    public function Update($id){

        $updateData=Room::find($id);
        return view('rooms.RoomUpdate')->with('UpdateRoom',$updateData);
    }


    public function UpdateRoom(Request $request) {
       
        $request->validate([    
             'RoomNo' => 'required|unique:rooms',
             'RoomName' => 'required',
             'RoomType' => 'required',
             'FloorNo' => 'required',
             'Price' => 'required',
             'Description' => 'required',
             'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:10000'
         ]);
        $id=$request->id;
       $RoomNo = $request->RoomNo;
        $RoomName = $request->RoomName;
        $RoomType = $request->RoomType;
        $FloorNo = $request->FloorNo;
        $Price = $request->Price;
        $Description = $request->Description;
        $image = $request->file('image')->store('uploads','public');

        $data=Room::find($id);
        $data->RoomNo=$RoomNo;
        $data->RoomName=$RoomName;
        $data->RoomType=$RoomType;
        $data->FloorNo=$FloorNo;
        $data->Price=$Price;
        $data->Description=$Description;
        $data->image=$image;

        $data->save();
        $updateRoom=Room::all();
        return view('rooms.RoomView')->with('Rupdates',$updateRoom);

    }}



    /*public function UpdateAsNotAvailable($id){

        $updateData=Room::find($id);
        $updateData->status=0;
        $updateData->save();
        return redirect()->back();
    }

    public function show(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.detail', compact('room'));
    }

    public function edit(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'floor' => 'required',
            'type' => 'required',
            'beds' => 'required'
        ]);

        $room = Room::find($id);
        $room->update($request->all());
        $request->session()->flash('msg', 'Room has been updated');
        return redirect('/rooms');
    }

    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        request()->session()->flash('msg', 'Room has been deleted');
        return redirect('rooms');
    }
}
$RoomNo = $request['RoomNo'];
        $RoomName = $request['RoomName'];
        $RoomType = $request['RoomType'];
        $FloorNo = $request['FloorNo'];
        $Status = $request['Status'];

        $room = new Room();

        $room->RoomNo = $RoomNo;
        $room->RoomName = $RoomName;
        $room->RoomType = $RoomType;
        $room->FloorNo = $FloorNo;
        $room->status = $Status;
        
      
        $room->save();
      
        return "hjkll";

        public function UpdateAsAvailable($id){

        $room=Room::find($id);
        $room->status=1;
        $room->save();
        return redirect()->back();
    }

    public function UpdateAsNotAvailable($id){

        $room=Room::find($id);
        $room->status=0;
        $room->save();
        return redirect()->back();
    }
    */