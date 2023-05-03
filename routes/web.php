<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

// デフォルトのコメント部分は省略

Route::get('/', [MessagesController::class, 'index']);


// CRUD
// メッセージの個別詳細ページ表示
//Route::get('messages/{id}', [MessagesController::class, 'show']);
// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
//Route::post('messages', [MessagesController::class, 'store']);
// メッセージの更新処理（編集画面を表示するためのものではありません）
//Route::put('messages/{id}', [MessagesController::class, 'update']);
// メッセージを削除
//Route::delete('messages/{id}', [MessagesController::class, 'destroy']);

// index: showの補助ページ
//Route::get('messages', [MessagesController::class, 'index'])->name('massage.index');
// create: 新規作成用のフォームページ
//Route::get('messages/create', [MessagesController::class, 'create'])->name('message.index');
// edit: 更新用のフォームページ
//Route::get('messages/{id}/edit', [MessagesController::class, 'edit'])->name('message.edit');

Route::resource('messages', MessagesController::class);