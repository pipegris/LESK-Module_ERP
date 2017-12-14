<?php namespace App\Modules\ERP\Models;

use App\Traits\BaseModelTrait;
use Illuminate\Database\Eloquent\Model;

class RecipeItem extends Model
{
    use BaseModelTrait;

    /**
     * @var string
     */
    protected $table = 'mod_erp_recipe_items';

    /**
     * @var array
     */
    protected $fillable = ['name', 'recipe_id', 'product_id', 'quantity', 'enabled'];

}
