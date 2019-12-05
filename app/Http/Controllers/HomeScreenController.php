<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Home;

use App\About;

use App\Experience;
use App\Education;
use App\Hireme;
use App\Skill;

class HomeScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homies = Home::all()->toArray();
        return view('portfolio.index', compact('homies'));

    }
    public function getabout(request $request)
    {
        $about = About::all()->toArray();
        return view('portfolio.about', compact('about'));
    }

    public function getexp(request $request)
    {
        $Exp = Experience::all()->toArray();
        return view('portfolio.experience', compact('Exp'));
    }
    public function getportfolio(request $request)
    {
        return view('portfolio.portfolio');
    }
    public function getedu(request $request)
    {
        $Edu = Education::all()->toArray();
        return view('portfolio.education', compact('Edu'));
    }

    public function gethire(request $request)
    {
        $Hire = Hireme::all()->toArray();
        return view('portfolio.hireme', compact('Hire'));
    }

    public function getskills(request $request)
    {
        $Skill = Skill::all()->toArray();
        return view('portfolio.skills', compact('Skill'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($homeid)
    {
        $homies = Home::find($homeid);
        return view('portfolio.edit_home', compact('homies', 'homeid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $homeid)
    {
        $this.validate($request, [
            'name'  =>  'required',
            'bio'  =>  'required'
        ]);

        $homies = Home::find($homeid);
        $homies->name = $request->get('name');
        $homies->bio = $request->get('bio');
        $homies->save();
        return redirect() -> route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
