<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Mh extends Model implements Auditable
{
    use AuditableTrait;

    protected $guarded = [];

    protected $table = 'mh';

    protected $fillable = [
        'codigo',
        'proyecto',
        'documento',
        'adjudicatario',
        'fecha_ins',
        'institucion_acreedora',
        'obs',
        'fecha_reins',

    ];


    protected $dates = [
        'fecha_ins',
        'fecha_reins',

    ];




    public $timestamps = false;

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/mhs/'.$this->getKey());
    }
}
