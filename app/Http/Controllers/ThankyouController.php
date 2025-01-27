<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ty_post;
use App\Models\Thankyou;

class ThankyouController extends Controller
{
    //
    function index()
    {
        $tables = Ty_post::all();
        // dd($tables);
        return view('ty.ty',compact('tables'));
        
    }

    function create()
    {
        return view('ty.ty_create');
    }

    function store(Request $request)
{
    // バリデーション
    $validated = $request->validate([
        'date' => 'required|date',
        'thankyous' => 'required|array',
        'thankyous.*' => 'nullable|string|max:255', // 配列内の各値をチェック
    ]);

    // Ty_post の作成と保存
    $post = new Ty_post;
    $post->created_at = $request->date;
    $post->user_id = auth()->id(); // ログイン中のユーザーIDを設定（適宜変更）
    $post->save();

    // Thank you の保存
    foreach ($request->thankyous as $thankyou) {
        if (!empty($thankyou)) { // 空欄を除外
            $point = new Thankyou;
            $point->ty_post_id = $post->id;
            $point->tankyou = $thankyou;
            $point->save();
        }
    }

    return redirect()->route('ty.index')->with('success', '投稿が保存されました');
}
}
