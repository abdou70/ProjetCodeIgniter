<?php namespace App\Controllers;

class Test extends BaseController
{
	public function fall()
	{
		$data['client'] = "marem fall";
		return view('test/test',$data);
	}

	//--------------------------------------------------------------------

}
