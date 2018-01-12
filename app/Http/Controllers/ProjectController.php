<?php

namespace App\Http\Controllers;
// use App\User;
use App\Project;
use App\Client;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //visa alla projekt
        $projects = Project::all();
        //dd($projects->pluck('name'))
        return view('projects.index', ['projects' => $projects]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return views, get a form
        $clients = Client::all();
        return view('projects.create',['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //registration form is resource.create.
//saving the info (submitting the form) is resource.store.
    public function store(Request $request)
    {
        //create model, redirect to route
        // $project = new Project();
        // $project -> name = $request->name;
        // $project -> link = $request->link;
        // $project -> status = $request->status;
        // $project -> save();
        // return redirect() -> route('projects.store');
        // Project::create($request->all());
        $project = new Project();
        $project -> name = $request -> name;
        $project -> link = $request -> link;
        $project -> status = $request ->  status;
        $project -> client_id = $request ->  client_id;
        $project -> type = $request -> type;
        $project -> save();
        return redirect('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view 
        return view('projects.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $project = Project::findOrFail($id);
        // return view('edit',compact('project'));
        
        return view('projects.edit');
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
        // $project = Project::findOrFail($id);
        // $project -> name = $request->name;
        // $project -> link = $request->link;
        // $project -> status = $request->status;
        // $project -> save();
        // return redirect()->route('projects.index');
        return view('projects.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project ->delete();
        return redirect()->route('projects.index');
    }
}
