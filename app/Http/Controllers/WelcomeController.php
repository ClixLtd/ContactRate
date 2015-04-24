<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dante.pages.main');
	}

    public function work()
    {
        return view('dante.pages.work');
    }

    public function data()
    {
        return view('dante.pages.data');
    }

    public function leads()
    {
        return view('dante.pages.lead');
    }

    public function terms()
    {
        return view('dante.pages.terms');
    }

}
