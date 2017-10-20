<?php namespace Rebel59\Team;

use Backend;
use System\Classes\PluginBase;

/**
 * team Plugin Information File
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
            'name'        => 'rebel59.team::lang.plugin.name',
            'description' => 'rebel59.team::lang.plugin.description',
            'author'      => 'rebel59',
            'icon'        => 'icon-users'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Rebel59\Team\Components\TeamMembers' => 'teamMembers',
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
            'rebel59.team.some_permission' => [
                'tab' => 'team',
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
            'team' => [
                'label'       => 'rebel59.team::lang.plugin.name',
                'url'         => Backend::url('rebel59/team/members'),
                'icon'        => 'icon-users',
                'permissions' => ['rebel59.team.*'],
                'order'       => 500,
            ],
        ];
    }
}
