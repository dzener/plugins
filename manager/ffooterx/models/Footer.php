<?php namespace Manager\Ffooterx\Models;

use Model;

/**
 * Footer Model
 */
class Footer extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'manager_ffooterx_footers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
            'title' => 'required',
            'icon' => 'required',
            'sort_order' => 'required',
            'state' => 'required'
    ];

    /**
     * Validation
     */
    public $rules = [
        'title' => 'required',
        'icon' => 'required',
        'sort_order' => 'required',
        'state' => 'required'
    ];
    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
     
    public $attachMany = [
        'icons' => ['System\Models\File'],
        'file_names' => ['System\Models\File']
    ];
        
    public function  getSortOrderOptions(){
        
        $array =[
             1=>1,
             2=>2,
             3=>3,
             4=>4
        ];
        
        return $array;
    }

    
}