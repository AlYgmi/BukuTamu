<?php

namespace App\Http\Controllers;

use App\Models\Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function input(Request $request)
    {
        $image  = $request->profile;
        $encoded_data = $image;
        $binary_data = base64_decode( $encoded_data );
        $name_gen = hexdec(uniqid());
        $up_location = public_path('/image/profile/');
        $img_name = $up_location.$name_gen.'.'.'jpg';
        $path = 'image/profile/';
        $imageDB = $path.$name_gen.'.jpg'; // BUAT DI INSERT DI DATABASE
       
        $result = file_put_contents( $img_name, $binary_data );
        if (!$result) die("Could not save image!  Check file permissions.");
    // save to server (beware of permissions)
    
        $input = input::create([
            'nama' =>$request->nama,
            'tlp' =>$request->tlp,
            'profile'=>$imageDB,
            'alamat'=>$request->alamat,
            'keterangan'=>$request->keterangan
        ]);
        return redirect()->back()->with('success','berhasil input data');
    }

 
    public function show()
    {
        $inputs = Input::all();
        return view('show',compact('inputs'));
    }

   
    public function update(Request $request)
    {
        $id = $request->id;
        $input = Input::find($id);

        $input->nama = $request->nama;
        // $member->email = $request->email;
        $input->tlp = $request->tlp;
        $input->alamat = $request->alamat;
        $input->keterangan = $request->keterangan;

        // Jika foto profil update
        if ($request->file('profile')) {
            // Hapus foto profil lama
            Storage::delete('/Profile/' . $input->profile);

            // Masukkan foto profil baru
            $request->file('profile')->storeAs(
                'Profile', $request->file('profile')->getClientOriginalName()
            );

            $input->profile = $request->file('profile')->getClientOriginalName();
        }

        $input->save();

        return redirect(route('index'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function updateForm(Request $request)
    {
        $id = $request->id;
        $input = Input::find($id);

        return view('update', compact('input'));
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $input = Input::find($id);
        $input->delete();
        return redirect(route('show'));
    }
}
