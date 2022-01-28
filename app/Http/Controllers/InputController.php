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
        $image = $request->file('image');
        if($image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $image_name = $name_gen.'.'.$img_ext;
            $up_location = public_path('assets/image/');
            $image->move($up_location,$image_name);

            input::insert([
                'inputs'=>$request->nama,
                'inputs'=>$request->tlp,
                'inputs'=>$request->alamat,
                'inputs'=>$request->keterangan
            ]);
        }else{

        }
        // $nameFile = time().' '.$request->file('profile')->getClientOriginalName();
        // //bikin data baru
        // $input = Input::create([
        //     'nama' => $request->nama,
        //     'tlp' => $request->tlp,
        //     'profile' => $nameFile,
        //     'alamat' => $request->alamat,
        //     'keterangan' => $request->keterangan
        // ]);

        //untuk foto
        // $request->file('profile')->storeAs('profile', $request->file('profile')->getClientOriginalName()
        $request->file('profile')->move(public_path().'/image/profile',$nameFile);
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $inputs = Input::all();
        return view('show')->with('inputs', $inputs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
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
