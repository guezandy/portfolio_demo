<?php namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Entity;
use App\Contact;
use App\About;
use App\Home;
use App\Skill;
use App\Quote;
use App\SkillSlider;
use App\PortfolioCategory;
use App\PortfolioPiece;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	public function home() {
		$user = User::find(1);
		$entity = Entity::where('user_id', $user->id)->firstOrFail();
		$home = Home::where('user_id', $user->id)->firstOrFail();
		$portfolio_category = PortfolioCategory::where('user_id', $user->id)->get();
		$portfolio_piece = PortfolioPiece::where('user_id', $user->id)->get();
		return view('index')->with('user', $user)->with('entity', $entity)->with('home', $home)
							->with('portfolio_category', $portfolio_category)->with('portfolio_piece', $portfolio_piece);
	}

	public function about()
	{
		$user = User::find(1);
		$entity = Entity::where('user_id', $user->id)->firstOrFail();
		$about = About::where('user_id', $user->id)->firstOrFail();
		$quote = Quote::where('user_id', $user->id)->get();
		$quote_count = $quote->count();
		$skill = Skill::where('user_id', $user->id)->get();
		$skill_count = $skill->count();
		$skill_slider = SkillSlider::where('user_id', $user->id)->get();
		$skill_slider_count = $skill_slider->count();
		return view('about')->with('user', $user)->with('entity', $entity)->with('about', $about)
						->with('skill', $skill)->with('skill_count', $skill_count)
						->with('quote', $quote)->with('quote_count', $quote_count)
						->with('skill_slider', $skill_slider)->with('skill_slider_count', $skill_slider_count);
	}

	public function contact() {
		$user = User::find(1);
		$entity = Entity::where('user_id', $user->id)->firstOrFail();
		$contact = Contact::where('user_id', $user->id)->firstOrFail();
		return view('contact')->with('user', $user)->with('entity', $entity)->with('contact', $contact);
	}

	public function showPortfolioPiece() {
		$user = User::find(1);
		//$entity = Entity::where('user_id', $user->id)->firstOrFail();
		//$portfolio_piece = PortfolioPiece::find($id);
		//return view('piece')->with('user', $user)->with('entity', $entity)->with('portfolio_piece', $portfolio_piece);
		return view('piece');
	}
}
