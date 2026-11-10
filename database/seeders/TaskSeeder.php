<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * 動作確認用のダミーデータを登録する
     */
    public function run()
    {
      $names = [
    '学校の課題を提出する',
    '部屋の掃除をする',
    '友達に連絡する',
    'ゲームの練習をする',
];

foreach ($names as $name) {
    Task::create([
        'name'   => $name,
        'status' => false,
    ]);
}

Task::create([
    'name'   => '買い物に行く（完了済み）',
    'status' => true,
]);
    }
}