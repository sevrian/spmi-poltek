<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $table = "post";

   protected $guarded = [];


   public function dokumen()
   {
      return $this->belongsTo('App\Models\Dokumen');
   }

   public function tahun()
   {
      return $this->belongsTo('App\Models\Tahun');
   }

   public function kriteria()
   {
      return $this->belongsTo('App\Models\Kriteria');
   }
   public function user()
   {
      return $this->belongsTo('App\User');
   }
}
