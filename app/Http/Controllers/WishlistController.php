<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wl_post;
use App\Models\Wishlist;


class WishlistController extends Controller
{
    //
    function index()
    {
        $tables = Wl_post::all();
        // dd($tables);
        return view('wl.wl',compact('tables'));
        
    }

    function create()
    {
        return view('wl.wl_create');
    }

    function store(Request $request)
{
    // バリデーション
    $validated = $request->validate([
        'date' => 'required|date',
        'wishlists' => 'required|array',
        'wishlists.*' => 'nullable|string|max:255', // 配列内の各値をチェック
    ]);

    // Wl_post の作成と保存
    $post = new Wl_post;
    $post->created_at = $request->date;
    $post->user_id = auth()->id(); // ログイン中のユーザーIDを設定（適宜変更）
    $post->save();

    // Wishlist の保存
    foreach ($request->wishlists as $wishlist) {
        if (!empty($wishlist)) { // 空欄を除外
            $point = new Wishlist;
            $point->wl_post_id = $post->id;
            $point->wishlist = $wishlist;
            $point->save();
        }
    }

    return redirect()->route('wl.index')->with('success', '投稿が保存されました');
}
}
