<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent_id', 'name', 'slug'];

    private $descendants = [];

    private function parent() {

        return $this->hasMany(self::class, 'category_id');
    }

    public function children() {

        return $this->parent()->with('children');
    }

    public function hasChildren(){

        if($this->children->count())  return true;
        return false;
    }

    public function findDescendants(Category $category){    //we get only nested child

        if($category->category_id !== null) {

            $this->descendants[] = $category->name;
        }

        if($category->hasChildren()){
            foreach($category->children as $child){
                $this->findDescendants($child);     //recursive method
            }
        }
    }

    public static function getDescendants(Category $category): array {

        $findDescendant = new self(); //creating obj to use call method statically
        $findDescendant->findDescendants($category);
        return $findDescendant->descendants;
    }

    public static function getParentCategory() {

        $categories = self::all();
        return $categories->filter(function ($category){
            return $category->category_id <= 0 || $category->category_id === null;
        });
    }
}
