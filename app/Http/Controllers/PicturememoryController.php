<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pm_post;

class PicturememoryController extends Controller
{
    //
    function index()
    {
        $tables = Pm_post::all();
        // dd($tables);
        return view('pm.pm',compact('tables'));
        
    }

    function create()
    {
        return view('pm.pm_create');
    }

    // 保存処理
    public function store(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'date' => 'required|date',
            'img' => 'required|file|mimes:jpg,jpeg,png|max:2048', // 画像ファイルのバリデーション
            'comment' => 'nullable|string|max:255',
        ]);

        // ファイルアップロード処理
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filePath = $file->store('posts', 'public'); // 公開ディレクトリに保存
        }

        // データの保存
        $post = new Pm_Post;
        $post->user_id = auth()->id(); // ログイン中のユーザーIDを取得
        $post->img = $filePath ?? null; // 画像のパスを保存
        $post->created_at = $request->date; // 作成日時をリクエストから設定
        $post->comment = $request->comment; // コメント
        $post->save();

        return redirect()->route('pm.index')->with('success', 'データが保存されました！');
    }
}
