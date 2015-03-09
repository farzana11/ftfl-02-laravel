<?php namespace App\Http\Controllers;
use App\Catagories;
use Input;
use Redirect;
use App\Portfolios;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PortfoliosController extends Controller {


    protected $rules =
        [		'title' => ['required', 'min:3'],
            'description' => ['required'],
            'status' => ['required'],
        ];
    public function index(Catagories $catagories)
    {
        return view('portfolios.index', compact('catagories'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create(Catagories $catagories)
    {
        return view('portfolios.create', compact('catagories'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(Catagories $catagories, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = Input::all();
        $input['catagories_id'] = $catagories->id;
        Portfolios::create( $input );

        return Redirect::route('catagories.show', $catagories->title)->with('Portfolio created.');
    }

    public function show(Catagories $catagories, Portfolios $portfolios)
    {
        return view('portfolios.show', compact('catagories', 'portfolios'));
    }


    public function edit(Catagories $catagories, Portfolios $portfolios)
    {
        return view('portfolios.edit', compact('catagories', 'portfolios'));
    }

    public function update(Catagories $catagories, Portfolios $portfolios)
    {


        $input = array_except(Input::all(), '_method');
        #var_dump($input); die();
        $portfolios->update($input);

        return Redirect::route('catagories.portfolios.show', [$catagories->title, $portfolios->title])->with('message', 'Portfolio updated.');
    }


	public function destroy(Catagories $catagories, Portfolios $portfolios)
    {
        $portfolios->delete();

        return Redirect::route('catagories.show', $catagories->title)->with('message', 'Portfolio deleted.');
    }

}
