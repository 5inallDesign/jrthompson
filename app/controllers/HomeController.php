<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$vw = View::make('home.index');
        $vw->title = "Matt Crandell - J.R. Thopson Project";
        $vw->description = "";
        $vw->active_page = "home";
        return $vw;
	}

	public function postSubmit()
    {
        $validator = Validator::make(
		    Input::all(),
		    array(
		        'first_name' => 'required',
		        'email' => 'required|email|unique:persons',
		        'phone' => 'required|numeric|digits:10',
		    )
		);
        if ($validator->fails())
		{
		    return Response::json(array(
		        'success' => false,
		        'errors' => $validator->messages()->toArray()
		    ));
		} else {
			$person = new Person;
			$person->first_name = Input::get('first_name');
			$person->last_name = Input::get('last_name');
			$person->email = Input::get('email');
			$person->phone = Input::get('phone');
			$person->save();
			return Response::json(array(
		        'success' => true,
		        'data' => Input::all()
		    ));
            /*$data = array(
                'email' => \Input::get('email'),
                'name' => \Input::get('name'),
                'text' => \Input::get('message')
            );
            \Mail::send('emails.contact', $data, function($message)
            {
                $message->from(\Input::get('email'), \Input::get('name'));
                $message->to('matt@5inalldesign.com', 'Matt Crandell');
                $message->replyTo(\Input::get('email'), \Input::get('name'));
                $message->subject('You\'ve Been Contacted from 5inallDesign by '.\Input::get('name').'!');
            });*/
        }
    }

}
