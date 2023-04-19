<?php

namespace App\Http\Controllers;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FriendsController extends Controller
{
    public function friends()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $category = User::find($user_id);
        $friends = $category->friends()->paginate(5);
        

        return view('friends',compact('friends'));
    }
    public function deleteFriend(Request $request){
        Friend::find($request->friend_id)->delete();
        return response()->json([
            'status'=>'success',

        ]);

    }
    public function pagination(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
        $category = User::find($user_id);
        $friends = $category->friends()->paginate(5);
        return view('pagination_friends',compact('friends'))->render();

    }
    public function searchFriend(Request $request){
       
        
        $friends = Friend::where('name', 'like', '%'.$request->search_string.'%')
        ->orWhere('email', 'like', '%'.$request->search_string.'%')
        ->orderBy('id','desc')
        ->paginate(5);

        if($friends->count() >= 1){
            return view('pagination_friends',compact('friends'))->render();

        }else{
            return response()->json([
                'status'=>'nothing_found',
            ]);

        }

    }
}
