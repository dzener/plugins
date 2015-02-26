<?php namespace Manager\Ffooterx;



use Backend;
use Controller;
use System\Classes\PluginBase;


/**
 * ffooterx Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Ffooterx',
            'description' => 'Featured footer is a plugin for creating dynamic footers',
            'author'      => 'João Eira',
            'icon'        => 'icon-leaf'
        ];
    }
    
       
    public function registerPermissions()
    {
            return [
                    'manager.ffooterx.access_ffooterx'          => ['label' => 'Manage - Footer', 'tab' => 'ffooterx'],
            ];
    }
    
    /**
     * Register component
     * footer is the name of component
     * Call component like this {% component "footer" %}
     * 
     */
    
    public function registerComponents()
    {
            return [
                    '\Manager\Ffooterx\Components\Footer' => 'footer'
            ];
    }
    /**
     * Register Navigation 
     * 
     * 
     */
   public function registerNavigation()
    {
        return [
            'ffooterx' => [
                'label'       => 'manager.ffooterx::lang.ffooterx.menu_label',
                'url'         => Backend::url('manager/ffooterx/footer'),
                'icon'        => 'icon-tasks',
                'permissions' => ['manager.ffooterx.*'],
                'order'       => 500,

                'sideMenu' => [
                    'footer' => [
                        'label'       => 'manager.ffooterx::lang.ffooterx.footer',
                        'icon'        => 'icon-angle-down',
                        'url'         => Backend::url('manager/ffooterx/footer'),
                        'permissions' => ['manager.ffooterx.access_footer'],
                    ],

                ]

            ]
        ];
    }

}
