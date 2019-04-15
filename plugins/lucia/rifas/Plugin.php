<?php namespace Lucia\Rifas;

use Backend;
use System\Classes\PluginBase;

/**
 * Rifas Plugin Information File
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
            'name'        => 'Rifas',
            'description' => 'No description provided yet...',
            'author'      => 'Lucia',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Lucia\Rifas\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'lucia.rifas.some_permission' => [
                'tab' => 'Rifas',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'rifas' => [
                'label'       => 'Rifas',
                'url'         => Backend::url('lucia/rifas/number'),
                'icon'        => 'icon-address-book',
                'permissions' => ['lucia.rifas.*'],
                'order'       => 500,
            ],
        ];
    }
}
