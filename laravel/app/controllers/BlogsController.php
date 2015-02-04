<?php

class BlogsController extends \BaseController {

	/**
	 * Display a listing of blogs
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogs = Blog::all();

		return View::make('blogs.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new blog
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('blogs.create');
	}

	/**
	 * Store a newly created blog in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Blog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Blog::create($data);

		return Redirect::route('blogs.index');
	}

	/**
	 * Display the specified blog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::findOrFail($id);

		return View::make('blogs.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified blog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::find($id);

		return View::make('blogs.edit', compact('blog'));
	}

	/**
	 * Update the specified blog in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$blog = Blog::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Blog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$blog->update($data);

		return Redirect::route('blogs.index');
	}

	/**
	 * Remove the specified blog from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Blog::destroy($id);

		return Redirect::route('blogs.index');
	}

}
