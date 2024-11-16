<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitLogController extends Controller
{
    public function show()
    {
        // Mendapatkan log commit dari Git
        $output = [];
        exec('git log --pretty=format:"%H|%an|%ar|%s" --no-pager', $output);

        // Parse log menjadi array
        $commits = array_map(function ($line) {
            [$hash, $author, $date, $message] = explode('|', $line);
            return compact('hash', 'author', 'date', 'message');
        }, $output);

        return view('commit', compact('commits'));
    }

    public function getCommitDiff($hash)
    {
        // Mendapatkan detail perubahan (diff) commit tertentu
        $output = [];
        exec("git show --pretty= --name-only --patch {$hash}", $output);

        return response()->json([
            'hash' => $hash,
            'diff' => implode("\n", $output),
        ]);
    }
}
