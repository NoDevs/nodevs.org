<?php

class BaseController extends Controller {
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if (!is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
		else
		{
			// This will be the default/fallback layout. Overwrite this variable to change the layout.
			$this->layout = View::make('layouts.master');
		}

		// To add a custom stylesheet or script, assign them to $this->layout->customCss or 
		// $this->layout->customJs respectively. 
		// E.g. $this->layout->customCss = HTML::style('assets/css/uniquePageStyle.css');
	}

}
