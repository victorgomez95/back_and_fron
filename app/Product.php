<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Product extends Model
{
  protected $table = "products";
  protected $fillable = ['name','description','price','picture','type_id'];

  /*Method to save picture with attached seconds in the name of the uploaded file
  to avoid overwriting because of files with same name*/
  /*
    public function setpictureAttribute($picture){
      //Si la picture existe
      if(! empty($picture)){
            //Concatenate the seconds to the file name
            $name = Carbon::now()->second.$picture->getClientOriginalName();
            //Asigned the name of the picture
            $this->attributes['picture'] = $name;
            //Storing the picture
            \Storage::disk('local')->put($name, \File::get($picture));
        }
      if ($picture == "") {
        $name = "fashion.jpg";
        $this->attributes['picture'] = $name;
      }
    }*/
}
