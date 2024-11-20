<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("portfolio")->insert([
            "name" => "Fauzy Madani",
            "school" => "SMK Negeri 1 Garut",
            "major" => "Rekayasa Perangkat Lunak",
            "os" =>
                "Linux debian 6.1.0-27-amd64 #1 SMP PREEMPT_DYNAMIC Debian 6.1.115-1 (2024-11-01) x86_64 GNU/Linux",
            "wm" =>
                "i3wm.stable,now 4.22-2 amd64 improved dynamic tiling window manager",
            "favourite_text_editor" => "kate",
            "favourite_text_editor2" => "emacs",
            "favourite_terminal_text_editor" => "neovim__vim",
            "favourite_terminal_text_editor2" => "nano",
            "favourite_text_editor3" => "zed",
            "shell" => "/bin/bash 5.2.15",
            "package_manager" =>
                "4597 (dpkg), 27 (brew), 23 (flatpak), 20 (snap) ",
        ]);
    }
}
