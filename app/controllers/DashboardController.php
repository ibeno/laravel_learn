<?php

class DashboardController extends BaseController{

	public function showDash(){

		return View::make('dashboard.index');
	}
}