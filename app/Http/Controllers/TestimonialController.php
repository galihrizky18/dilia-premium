<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{


    public function createTesti(Request $request){
        $validateData = $request->validate([
            'komen' => 'required',
        ]);

        $userCurrent = Auth::user();
        $user = Pelanggan::where('id_pelanggan', $userCurrent->id_user)->first();

        $testi = new Testimonial();
        $testi->id_user = $userCurrent->id_user;
        $testi->first_name = $user->first_name;
        $testi->last_name = $user->last_name;
        $testi->noHp = $user->noHp;
        $testi->komentar = $validateData['komen'];
        $testi->save();

        return redirect()->back()->with('success', 'Testimonial telah ditambahkan');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
