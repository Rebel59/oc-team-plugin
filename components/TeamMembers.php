<?php namespace Rebel59\Team\Components;

use Cms\Classes\ComponentBase;
use Rebel59\Team\Models\Member;


class TeamMembers extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'rebel59::la',
            'description' => 'Shows all Team members'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->_loadAssets();
        $this->_prepareVars();
    }

    protected function _loadAssets(){

    }

    protected function _prepareVars(){
        $this->team = $this->page['team'] = $this->_loadTeam();
    }

    protected function _loadTeam(){
        $team = Member::isPublished()->get();

        return $team;
    }
}
