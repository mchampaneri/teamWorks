<?php

class projectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$id=Auth::user()->id;

		$projects = Project::where('coordinator_id','=',$id)
							->where('status','=',1)->get();

		return $projects;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$manager_id= Auth::user()->id;
		$new_project = new Project();

		$new_project->project_name = Input::get('project_name');
		$new_project->description = Input::get('description');
		$new_project->client = Input::get('client');
		$new_project->coordinator_id = $manager_id;

		$manager = User::find(Auth::user()->id);
		$manager->status='1';

		$manager->save();
		$new_project->save();

		return "New project generated and ready for further progress";

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function current()
	{
		$project_pending = Project::where('status','=',0)
									->where('coordinator_id','=',Auth::user()->id)
									->first();
		return $project_pending;
	}

	public function recruite()
	{
		$user_id = Input::get('user_id');

		$user = User::find($user_id);		
		$user->status = '1';
		$user->save();

		$task = new Task();
		$task->user_id = $user_id;
		$task->type = 0;
		$task->project_id = Input::get('project_id');
		$task->status = 1;
		$task->save();

		
		return  " Process For Recruitemnt completed";
	}
}
