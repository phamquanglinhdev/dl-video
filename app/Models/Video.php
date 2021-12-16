<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * @var mixed
     */

    public function removeSpace(){
        return str_replace("%nbsp;","",$this->content);
    }
    public function Category(){
        return $this->belongsTo(Category::class,"category_id","id");
    }
    public function authenticate(){
        $isAccess = false;
        if(backpack_user()->role==0){
            return true;
        }
        $users = $this->Category()->first()->Users()->get();
        if($users->first()==null){
            $isAccess=true;
        }else{
            if(backpack_auth()->check()){
                foreach ($users as $user){
                    if($user->id === backpack_user()->id){
                        $isAccess = true;
                    }
                }
            }
        }
       return $isAccess;
    }
}
