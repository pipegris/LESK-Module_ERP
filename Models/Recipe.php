<?php namespace App\Modules\ERP\Models;

use App\Traits\BaseModelTrait;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use BaseModelTrait;

    /**
     * @var string
     */
    protected $table = 'mod_erp_recipes';

    /**
     * @var array
     */
    protected $fillable = ['name', 'version', 'description', 'enabled'];

    public function items()
    {
        return $this->hasMany('App\Modules\ERP\Models\RecipeItem', 'recipe_id');
    }
}
