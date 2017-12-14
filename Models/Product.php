<?php namespace App\Modules\ERP\Models;

use App\Traits\BaseModelTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use BaseModelTrait;

    /**
     * @var string
     */
    protected $table = 'mod_erp_products';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'enabled'];


}
