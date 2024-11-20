<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextEditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $textEditors = [
            ["type" => "GUI", "name" => "emacs"],
            ["type" => "GUI", "name" => "zed"],
            ["type" => "GUI", "name" => "kate"],
            ["type" => "GUI", "name" => "vscode"],
            ["type" => "TUI", "name" => "tilde"],
            ["type" => "TUI", "name" => "nano"],
            ["type" => "TUI", "name" => "vim"],
            ["type" => "TUI", "name" => "neovim"],
            ["type" => "TUI", "name" => "helix"],
            ["type" => "TUI", "name" => "kakoune"],
            ["type" => "TUI", "name" => "micro"],
        ];

        DB::table("text_editors")->insert($textEditors);
    }
}
