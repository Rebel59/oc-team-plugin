<?php namespace Rebel59\Team\Components;

use Cms\Classes\ComponentBase;
use Rebel59\Team\Models\Member;


class TeamMembers extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'rebel59.team::lang.components.team_members.name',
            'description' => 'rebel59.team::lang.components.team_members.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'loadAssets' => [
                'title' => 'rebel59.team::lang.components.team_members.load_assets.label',
                'description' => 'rebel59.team::lang.components.team_members.load_assets.description',
                'type' => 'checkbox'
            ]
        ];
    }

    public function onRun(){
        $this->_loadAssets();
        $this->_prepareVars();
    }

    protected function _loadAssets(){
        if ($this->property('loadAssets'))
        {
            $this->addCss('assets/css/team.team_members.css');
        }
    }

    protected function _prepareVars(){
        $this->team = $this->page['team'] = $this->_loadTeam();
    }

    protected function _loadTeam(){
        $team = Member::isPublished()->get();

        return $team;
    }
}
