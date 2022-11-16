<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\About;


class projectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('project.index', [
            'projects' => Project::orderBy('id', 'desc')->get(),
            'abouts' => About::orderBy('id', 'desc')->get(),
        ]);  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create([
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'github' => $request->github,
            'demo' => $request->demo,
            'picture' => $this->storeImage($request)
        ]);

        return redirect(route('project.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('project.show', [
            'project' => Project::findOrFail($id),
            'about' => About::findOrFail($id), 
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('project.edit', [
            'project' => Project::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        Project::where('id', $id)->update($request->except(['_token', '_method']));

        return redirect(route('project.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Project::destroy($id);

        return redirect(route('project.index'))->with('message', 'project has been deleted.');
    }

    private function storeImage($request){
        $newImageName = uniqid() . '-' . $request->project_name . '.' .
        $request->picture->extension();

        return $request->picture->move(public_path('pictures'), $newImageName);
    }
}