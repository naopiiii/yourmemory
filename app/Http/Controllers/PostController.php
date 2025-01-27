<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gp_post;
use App\Models\Goodpoint;

class PostController extends Controller
{
    //
    function index()
    {
        $tables = Gp_post::all();
        // dd($tables);
        return view('gp.gp',compact('tables'));
        
    }

    function create()
    {
        return view('gp.gp_create');
    }

    function store(Request $request)
{
    // バリデーション
    $validated = $request->validate([
        'date' => 'required|date',
        'goodpoints' => 'required|array',
        'goodpoints.*' => 'nullable|string|max:255', // 配列内の各値をチェック
    ]);

    // Gp_post の作成と保存
    $post = new Gp_post;
    $post->created_at = $request->date;
    $post->user_id = auth()->id(); // ログイン中のユーザーIDを設定（適宜変更）
    $post->save();

    // Goodpoint の保存
    foreach ($request->goodpoints as $goodpoint) {
        if (!empty($goodpoint)) { // 空欄を除外
            $point = new Goodpoint;
            $point->gp_post_id = $post->id;
            $point->goodpoint = $goodpoint;
            $point->save();
        }
    }

    return redirect()->route('gp.index')->with('success', '投稿が保存されました');
}

}
