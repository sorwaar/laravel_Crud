<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class CreateController extends Controller
{
   public function home()
   {

            $articles = Article::all();
            return view('home', ['articles' => $articles]);
   }


   public function add(Request $request )
	{

		$this->validate($request,[
			'name'  =>  'required',
			'email' =>  'required'
		]);

		$articles = new Article;
		$articles->name  = $request->input('name');
		$articles->email = $request->input('email');
		$articles->save();


		return redirect('/')->with('info','Data Saved Successfully !!');





	}

	public function update($id)
	{
		 $articles = Article::find($id);
         return view('update', ['articles' => $articles]);

	}

	public function edit(Request $request,$id)
	{
		 $this->validate($request,[
			'name'  =>  'required',
			'email' =>  'required'
		]);

		 $data = array(

		 	'name'  => $request->input('name'),
		 	'email' => $request->input('email')

		 );

		Article::where('id', $id)
		->update($data);


		return redirect('/')->with('info','Data Updated Successfully !!');

	}

	public function delete(Request $request,$id)
	{

		Article::where('id', $id)
		->delete($id);


		return redirect('/')->with('info','data Deleted Successfully !!');

	}

} 

	