<?php

namespace App\Modules\Erp\Database\Seeds;

use App\Modules\Erp\Models\Recipe;
use App\Modules\Erp\Models\RecipeItem;
use App\Modules\Erp\Models\Supply;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ErpDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        ////////////////////////////////////
        // Create basic set of supplies and recipes

        $p = Supply::create(['name' => 'Fósforo', 'description' => 'A', 'enabled' => true]);
        $s = Supply::create(['name' => 'Azufre', 'description' => 'B', 'enabled' => true]);
        $k = Supply::create(['name' => 'Potasio', 'description' => 'C', 'enabled' => true]);

        $mila = Recipe::create([
            'name' => 'Mila',
            'version' => 0,
            'stirring_time' => 45,
            'reaction_time' => 15,
            'reaction_temp' => 25,
            'description' => '',
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $mila->id,
            'supply_id' => $p->id,
            'quantity' => 20,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $mila->id,
            'supply_id' => $s->id,
            'quantity' => 20,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $mila->id,
            'supply_id' => $k->id,
            'quantity' => 20,
            'enabled' => true
        ]);

        $vera = Recipe::create([
            'name' => 'Vera',
            'version' => 0,
            'stirring_time' => 60,
            'reaction_time' => 11,
            'reaction_temp' => 35,
            'description' => '',
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $vera->id,
            'supply_id' => $p->id,
            'quantity' => 10,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $vera->id,
            'supply_id' => $s->id,
            'quantity' => 30,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $vera->id,
            'supply_id' => $k->id,
            'quantity' => 25,
            'enabled' => true
        ]);

        $liva = Recipe::create([
            'name' => 'Liva',
            'version' => 0,
            'stirring_time' => 20,
            'reaction_time' => 10,
            'reaction_temp' => 40,
            'description' => '',
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $liva->id,
            'supply_id' => $p->id,
            'quantity' => 60,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $liva->id,
            'supply_id' => $s->id,
            'quantity' => 10,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $liva->id,
            'supply_id' => $k->id,
            'quantity' => 10,
            'enabled' => true
        ]);

        $vita = Recipe::create([
            'name' => 'Vita',
            'version' => 0,
            'stirring_time' => 35,
            'reaction_time' => 11,
            'reaction_temp' => 35,
            'description' => '',
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $vita->id,
            'supply_id' => $p->id,
            'quantity' => 5,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $vita->id,
            'supply_id' => $s->id,
            'quantity' => 15,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $vita->id,
            'supply_id' => $k->id,
            'quantity' => 35,
            'enabled' => true
        ]);

        $rega = Recipe::create([
            'name' => 'Rega',
            'version' => 0,
            'stirring_time' => 20,
            'reaction_time' => 15,
            'reaction_temp' => 25,
            'description' => '',
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $rega->id,
            'supply_id' => $p->id,
            'quantity' => 55,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $rega->id,
            'supply_id' => $s->id,
            'quantity' => 25,
            'enabled' => true
        ]);
        RecipeItem::create([
            'recipe_id' => $rega->id,
            'supply_id' => $k->id,
            'quantity' => 25,
            'enabled' => true
        ]);

        // $this->call('App\Modules\Erp\Database\Seeds\FoobarTableSeeder');
    }

}
