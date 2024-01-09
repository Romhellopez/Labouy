<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function hotel()
   {

    // $data = array("hotel" => DB::table('hotels')->orderBy('user_id', 'asc')->paginate(10));

    // return view('admin.admin', $data);

    $hotel = Hotel::orderBy('user_id', 'asc')->get();
    return view('admin.admin', compact('hotel'));
   }
     public function create(){
            return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $validated= $request->validate([
            'user_id' => ['required'],
            'Hotel'=>  ['required'],
            'Rooms' => ['required'],
            'Price' => ['required'],
            'Availability' =>['required'],
            'Reservation' => ['required'],
            'Payment' => ['required'],
         
         ]);

        //  Hotel::create($request->all());

        // return redirect('admin.create')->with('success', 'created successfully.');
         

   
          Hotel::create($validated);

          return redirect('/dashboard/hotel')->with('success', 'New Record was successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Hotel::find($id);
        // dd($data);

        return view('admin.edit', ['hotel' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
   {
        // dd($request);
         $request->validate([
            'Hotel' => 'required',
            'Rooms' => 'required',
            'Price' => 'required',
            'Availability' => 'required',
            'Reservation' => 'required',
            'Payment' => 'required', 
         ]);

         $hotel = Hotel::findOrFail($id);
         $hotel->update($request->all());

         return redirect('/dashboard/hotel')->with('message', 'Post updated successfully.');

        //  $hotel = Hotel::find($id);
        //  $hotel->update($request->all());

        //  return redirect('admin.edit')->with('message', 'Record Succesfully updated!');
   }

    /**
     * Remove the specified resource from storage.
     */


     public function destroy($id)
     {
      
        Hotel::where('id', $id)->delete();
        return redirect('/dashboard/hotel')->with(['message'=> 'Successfully deleted!!']);
     
        // dd($request);
    }
    
    /**** FOR OTHER PAGES HERE!! *******************************/ 
    public function edit($id)
    {
        $hotel = Hotel::find($id);

        return view('admin.edit', compact('hotel'));
    }

    public function income()
    {
        return view('admin.income');
    }

    public function payment()
    {
        return view('admin.payment');
    }
    public function reservation()
    {
        return view('admin.reservation');
    }
    public function cancel()
    {
        return view('admin.cancel');
    }
   
     public function usersData()
     {
        return view('admin.userData');
     }
    
     
}
