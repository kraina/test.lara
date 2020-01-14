<?php


namespace App\Repositories\Admin;


use App\Repositories\CoreRepository;
use Illuminate\Database\Eloquent\Model;

class MainRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }
    /** Get count of all orders */
    public static function getCountOrders(){
        $orders = \DB::table('orders')
            ->where('status', '0')
            ->get()
            ->count();
        return $orders;
    }
    /** Get count of all users */
    public static function getCountUsers(){
        $users = \DB::table('users')
            ->get()
            ->count();
        return $users;
    }
    /** Get count of all products */
    public static function getCountProducts(){
        $products = \DB::table('products')
            ->get()
            ->count();
        return $products;
    }
    /** Get count of all categories */
    public static function getCountCategories(){
        $categories = \DB::table('categories')
            ->get()
            ->count();
        return $categories;
    }
}
