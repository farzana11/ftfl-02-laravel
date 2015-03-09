<?php namespace App\Http\Controllers;
use Input;
use Redirect;
use App\Catagories;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CatagoriesController extends Controller {


    protected $rules =
        [		'title' => ['required', 'min:3'],
                'description' => ['required'],	];


    public function index()
    {
        $catagories = Catagories::all();
        return view('catagories.index', compact('catagories'));

    }

	public function create()
	{
        return view('catagories.create');
	}


    public function store(Catagories $catagories , Request $request)
    {
        $this->validate($request, $this->rules);
        $input = Input::all();

        Catagories::create( $input );

        return Redirect::route('catagories.index')->with('message', 'catagories created');
    }

    public function show(Catagories $catagories)
    {
        return view('catagories.show', compact('catagories'));
    }


    public function edit(Catagories $catagories)
    {
        return view('catagories.edit', compact('catagories'));
    }


    public function update(Catagories $catagories)	{

        $input = array_except(Input::all(), '_method');
        $catagories->update($input);

        return Redirect::route('catagories.show', $catagories->title)->with('message', 'catagories updated.');
    }

    public function destroy(Catagories $catagories)
    {
        $catagories->delete();

        return Redirect::route('catagories.index')->with('message', 'catagories deleted.');
    }

}
