<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Music;
use Input;
use Redirect;
use Response;
use View;

class NccuController extends Controller
{
	public function __construct()
    {
    	//
    }
	//get home page
	public function index(){
		$data=Music::all();
		return view('home.home')->withData($data);
	}

	public function info_1(){
		$count=Music::find(1)->count+1;
		Music::find(1)->update(['count'=>$count]);
		return view('page.info_1');
	}

	public function info_2(){
		$count=Music::find(2)->count+1;
		Music::find(2)->update(['count'=>$count]);
		return view('page.info_2');
	}

	public function info_3(){
		$count=Music::find(3)->count+1;
		Music::find(3)->update(['count'=>$count]);
		return view('page.info_3');
	}

	public function info_4(){
		$count=Music::find(4)->count+1;
		Music::find(4)->update(['count'=>$count]);
		return view('page.info_4');
	}

	public function info_5(){
		$count=Music::find(5)->count+1;
		Music::find(5)->update(['count'=>$count]);
		return view('page.info_5');
	}

	public function info_6(){
		$count=Music::find(6)->count+1;
		Music::find(6)->update(['count'=>$count]);
		return view('page.info_6');
	}

	public function info_7(){
		$count=Music::find(7)->count+1;
		Music::find(7)->update(['count'=>$count]);
		return view('page.info_7');
	}

	public function info_8(){
		$count=Music::find(8)->count+1;
		Music::find(8)->update(['count'=>$count]);
		return view('page.info_8');
	}

	public function info_9(){
		$count=Music::find(9)->count+1;
		Music::find(9)->update(['count'=>$count]);
		return view('page.info_9');
	}

	public function info_10(){
		$count=Music::find(10)->count+1;
		Music::find(10)->update(['count'=>$count]);
		return view('page.info_10');
	}

	public function info_11(){
		$count=Music::find(11)->count+1;
		Music::find(11)->update(['count'=>$count]);
		return view('page.info_11');
	}

	public function info_12(){
		$count=Music::find(12)->count+1;
		Music::find(12)->update(['count'=>$count]);
		return view('page.info_12');
	}

	public function info_13(){
		$count=Music::find(13)->count+1;
		Music::find(13)->update(['count'=>$count]);
		return view('page.info_13');
	}

	public function info_14(){
		$count=Music::find(14)->count+1;
		Music::find(14)->update(['count'=>$count]);
		return view('page.info_14');
	}

	public function info_15(){
		$count=Music::find(15)->count+1;
		Music::find(15)->update(['count'=>$count]);
		return view('page.info_15');
	}

	public function info_16(){
		$count=Music::find(16)->count+1;
		Music::find(16)->update(['count'=>$count]);
		return view('page.info_16');
	}

}
