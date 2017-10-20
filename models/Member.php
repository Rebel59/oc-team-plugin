<?php namespace Rebel59\Team\Models;

use Model;
use Cms\Classes\MediaLibrary;
use Carbon\Carbon;

/**
 * Member Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Sortable;

    public $appends = [
      'photoUrl'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'rebel59_team_members';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $jsonable = [
        'socials'
    ];


    public function getThumbAttribute(){
      $url = MediaLibrary::url($this->photo);
      return "<img src='$url' height='75'/>";
    }

    public function getPhotoUrlAttribute(){
      return MediaLibrary::url($this->photo);
    }

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
            ;
    }

}
