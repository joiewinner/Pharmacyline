<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Produit extends Model
{
	protected $guarded = [];

	public $fillable = ['nom','notice','prixunit','type','stockdis','image'];
}
?>