<?php

namespace App\Http\Controllers;

use App\Models\postCount;
use Illuminate\Http\Request;

class PostCountController extends Controller
{
    private int $post_id;

    public function __construct( int $post_id)
    {
        $this->post_id = $post_id;
    }

    final public function postReadCount()
    {
        $post_count = postCount::where('post_id', $this->post_id)->first();
        if($post_count){
            $read_count_data['count'] = $post_count->count + 1;
            $post_count->update($read_count_data);
        }else{
            $this->postStoreCount();
        }
    }

    private function postStoreCount():void
    {
        $read_count_data['post_id'] = $this->post_id;
        $read_count_data['count'] = 1;
        postCount::create($read_count_data);
    }
}
