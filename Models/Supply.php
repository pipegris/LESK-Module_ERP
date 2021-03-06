<?php namespace App\Modules\Erp\Models;

use App\Traits\BaseModelTrait;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use BaseModelTrait;

    /**
     * @var string
     */
    protected $table = 'mod_erp_supplies';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'enabled'];


}
