<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = "profils";

	protected $fillable = ["nama_gereja","alamat_gereja","email_gereja","tlp_gereja","sejarah_gereja","visi_gereja","misi_gereja"];

	// public function pemasukan_rutin()
    // {
    // 	return $this->hasMany(pemasukan_rutin::class);
    // }

	
}
