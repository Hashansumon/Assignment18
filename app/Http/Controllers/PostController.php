<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        // $post = DB::table('posts')
        // ->select('excerpt','description')
        // ->get();
        // return $post;


        // $post = DB::table('posts')
        // ->where('id',2)
        // ->first();
        // return $post;

        // $post = DB::table('posts')
        // ->where('id',2)
        // ->value('description');
        // return $post;

        // $post = DB::table('posts')
        // ->pluck('title');
        // return $post;


       /* DB::table('posts')->insert([
            'title' => 'X',
            'slug' => 'X',
            'excerpt' => 'excerpt',
            'description' => 'description',
            'is_published' => true,
            'min_to_read' => 2,
        ]);
        $lastInsertedId = DB::getPdo()->lastInsertId();
        $newRecord = DB::table('posts')->where('id', $lastInsertedId)->first();
        return ($newRecord);*/


       /* $data = DB::table('posts')
    ->where('id', 2)
    ->update([
        'excerpt' => 'intersting',
        'description' => 'This is the best person'
    ]);
    echo "Number of affected rows: " . $data;*/


    // $totalSales = DB::table('orders')->sum('amount');

    // $averageRating = DB::table('reviews')->avg('rating');
    // $highestScore = DB::table('students')->max('score');
    // $lowestPrice = DB::table('products')->min('price');
    // return $totalSales;

    }
}
