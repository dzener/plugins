<?php namespace Manager\Ffooterx\Components;

use Validator;
use Cms\Classes\ComponentBase;
use October\Rain\Support\ValidationException;
use System\Classes\ApplicationException;
use Manager\Ffooterx\Models\Footer as FooterModel;

class Footer extends ComponentBase
{

    public $footer;
    
    public function componentDetails()
    {
        return [
            'name'        => 'Footer Component',
            'description' => 'Display a config Footer'
        ];
    }

    public function defineProperties()
    {
        		return [
			// Footer selection
			'footer' => [
				'title' => 'Footer',
			],
		];
    }
    /**
     * Add default render settings to component
     *
     * @return void
     */
    public function onRun()
    {
        $footer = FooterModel::where('state',1)->orderBy('sort_order', 'asc')->get();

          $this->page['footer'] = $footer;
    }
}