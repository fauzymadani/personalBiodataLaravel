<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <style>

    @font-face {
    font-family: 'JetBrains Mono Nerd Font';
    src: url('{{ asset('fonts/JetBrainsMono-NerdFont.ttf') }}') format('truetype');
    }

        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'JetBrains Mono Nerd Font', monospace;
            background: linear-gradient(135deg, #1c1c1e, #2a2a2d);
            color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-align: center;
            background: linear-gradient(135deg, #f39c12, #e74c3c);
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
        }

        p {
            font-size: 1rem;
            line-height: 1.8;
            font-family: monospace;
        }

        .portfolio-container {
            background: rgba(28, 28, 30, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.6);
            width: 80%;
            max-width: 700px;
            text-align: left;
            position: relative;
        }

        .portfolio-container strong {
            color: #e67e22;
        }

        .portfolio-container p {
            margin-bottom: 0.8rem;
        }

        .error-message {
            text-align: center;
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.2rem;
        }

        hr {
            border: none;
            border-top: 2px dashed #ccc; /* Dashed or dotted line */
            background: none;
            height: 0;
        }

        img {
            height: 100px;
        }

        .image-row {
            display: inline-block;
        }

        footer {
        font-family: 'JetBrains Mono Nerd Font', monospace;
        font-size: 0.8rem;
        color: #aaa;
        background-color: #2e2e2e;
        padding: 0px;
        text-align: center;
        margin-top: 20px;
        margin-left: 0;
        margin-right: 0;
        margin-bottom: 0;
    }


        .zed-image {
            border-radius: 15px;
        }

        h2 {
            margin-top: 20px;
        }

        pre {
            background-color: #2e2e2e;
            color: #f0f0f0;
            font-family: 'JetBrains Mono Nerd Font', monospace; /* pek siah melong source code urang!! */
            padding: 1rem;
            border-radius: 10px;
            overflow-x: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6); /* lu masih baca code ini?? */
            margin: 1rem 0;
            font-size: 0.95rem;
            line-height: 1.5;
            border-left: 5px solid #e67e22;
        }

        span {
            color: yellow;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
            font-family: 'JetBrains Mono Nerd Font', monospace;
            background-color: #2e2e2e;
            color: #f0f0f0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
            overflow: hidden;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #444;
        }

        th {
            background-color: #e67e22;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        tr:last-child td {
            border-bottom: none;
        }

        a img {
            transition: transform 0.3s ease-in-out;
        }

        a img:hover {
            transform: scale(1.1);
        }

        tr:hover {
            background-color: rgba(230, 126, 34, 0.2);
            transition: background-color 0.3s ease-in-out;
        }

        .skill-bar {
            margin: 10px 0;
        }

        .skill-bar p {
            margin: 5px 0;
        }

        .bar {
            width: 100%;
            height: 20px;
            background-color: #444;
            border-radius: 10px;
            overflow: hidden;
        }

        .fill {
            height: 100%;
            background-color: #e67e22;
            transition: width 0.5s ease-in-out;
        }


        @media (max-width: 768px) {
            .portfolio-container {
                width: 95%;
                padding: 1.5rem;
            }

            h1 {
                font-size: 2.5rem;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="portfolio-container">
        <h1>Biodata Saya</h1>

        @if($portfolio)
            <h2>## General</h2>
            <p><strong>Nama:</strong> {{ $portfolio->name }}</p>
            <p><strong>Sekolah:</strong> {{ $portfolio->school }}</p>
            <p><strong>Jurusan:</strong> {{ $portfolio->major }}</p>
            <hr>
            <h2>## Daily operating system</h2>
            <p><strong>OS:</strong> {{ $portfolio->os }}</p>
            <p><strong>Window Manager:</strong> {{ $portfolio->wm }}</p>
            <hr>
            <h2>## Text editor</h2>
            <p><strong>Favourite text editor(GUI):</strong> {{$portfolio->favourite_text_editor}}</p>
            <p><strong>Favourite text editor(GUI) 2:</strong> {{$portfolio->favourite_text_editor2}}</p>
            <p><strong>Favourite text editor(TUI):</strong> {{$portfolio->favourite_terminal_text_editor}}</p>
            <p><strong>Favourite text editor(TUI) 2:</strong> {{$portfolio->favourite_terminal_text_editor2}}</p>
            <p><strong>Favourite text editor(GUI) 3:</strong> {{$portfolio->favourite_text_editor3}}</p>
            <div class="image-row">
            <a href="https://www.gnu.org/software/emacs/">
            <img src="{{ asset('image/800px-EmacsIcon.svg.png') }}" alt="Emacs Icon">
            </a>
            <a href="https://www.vim.org/">
            <img src="{{ asset('image/800px-Vimlogo.svg.png') }}" alt="Emacs Icon">
            </a>
            <a href="https://neovim.io/">
            <img src="{{ asset('image/Neovim-mark.svg') }}" alt="Emacs Icon">
            </a>
            <a href="https://kate-editor.org/">
            <img src="{{ asset('image/Sc-apps-kate-editor.svg') }}" alt="Emacs Icon">
            </a>
            <a href="https://www.nano-editor.org/">
            <img src="{{ asset('image/Gnu-nano.svg') }}" alt="Emacs Icon">
            </a>
            <a href="https://zed.dev/">
            <img src="{{ asset('image/zed.png') }}" alt="Emacs Icon" class="zed-image">
            </a>
            </div>
        <hr>
        <h2>## Synopsis</h2>
        <p>It's all started when i'm using windows 10, my laptop is a low end specs laptop. and i like coding since in the middle schools.
            one day, i'm bored and just watching a youtube video about why you should move from windows to Linux. and that is inspiring me to switch to linux.
            my first command in linux was <pre>sudo apt update</pre> i love Debian so much than the ohers distro's.</p>
        <h2>my first C project</h2>
        <pre>
// Author: Fauzy Madani
// https://github.com/fauzymadani

#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;time.h&gt;
#include &lt;string.h&gt;

// Store elements for passwords in an array
const char LOWERCASE[] = "abcdefghijklmnopqrstuvwxyz";
const char UPPERCASE[] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
const char DIGITS[] = "0123456789";
const char SYMBOLS[] = "!@#$%^&*()_+-=[]{}|;:,.<>?";

void generate_password(int length, int use_upper, int use_digits, int use_symbols) {
    char charset[100] = "";
    strcat(charset, LOWERCASE);

    if (use_upper) strcat(charset, UPPERCASE);
    if (use_digits) strcat(charset, DIGITS);
    if (use_symbols) strcat(charset, SYMBOLS);

    int charset_size = strlen(charset);

    for (int i = 0; i < length; i++) {
        printf("%c", charset[rand() % charset_size]);
    }
    printf("\n");
}

int main() {
    // Inisialisasi
    srand(time(NULL));

    int length;
    int use_upper, use_digits, use_symbols;

    // Bertanya dulu
    printf("Enter the length of the password: ");
    scanf("%d", &length);

    printf("Use Uppercase letter? (1 = Yes, 0 = No): ");
    scanf("%d", &use_upper);

    printf("Use number?? (1 = Yes, 0 = NoThanks): ");
    scanf("%d", &use_digits);

    printf("Use symbol? (1 = Yes, 0 = Nope): ");
    scanf("%d", &use_symbols);

    printf("The generated password is: ");
    generate_password(length, use_upper, use_digits, use_symbols);

    return 0;
}
        </pre>

        <div class="portfolio-container">
            <h2>## Favourite Tools</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tool</th>
                        <th>Type</th>
                        <th>Usage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Neovim</td>
                        <td>Text Editor (TUI)</td>
                        <td>Coding</td>
                    </tr>
                    <tr>
                        <td>Emacs</td>
                        <td>Text Editor (GUI)</td>
                        <td>Writing</td>
                    </tr>
                    <tr>
                        <td>Zsh</td>
                        <td>Shell</td>
                        <td>Terminal Customization</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h2>### Exploring Programming Language</h2>
        <p>my current skill at programing is
        <pre>
From: 29 October 2024 - To: 15 November 2024

Total Time: 28 hrs 13 mins

PHP              10 hrs 51 mins  █████████▓░░░░░░░░░░░░░░░   38.17 %
conf             4 hrs 35 mins   ████░░░░░░░░░░░░░░░░░░░░░   16.11 %
Lua              4 hrs 17 mins   ███▓░░░░░░░░░░░░░░░░░░░░░   15.11 %
C                3 hrs 27 mins   ███░░░░░░░░░░░░░░░░░░░░░░   12.17 %
Emacs Lisp       1 hr 3 mins     █░░░░░░░░░░░░░░░░░░░░░░░░   03.71 %
HTML             47 mins         ▓░░░░░░░░░░░░░░░░░░░░░░░░   02.77 %
Blade Template   39 mins         ▓░░░░░░░░░░░░░░░░░░░░░░░░   02.34 %
INI              29 mins         ▒░░░░░░░░░░░░░░░░░░░░░░░░   01.74 %
Bash             24 mins         ▒░░░░░░░░░░░░░░░░░░░░░░░░   01.44 %
CSS              17 mins         ▒░░░░░░░░░░░░░░░░░░░░░░░░   01.03 %

<span>this is not my full time, i just installed wakatime plugin in neovim only,
i use zed, nano, vim, and the other IDE</span>
        </pre>
        </p>
        <div class="skill-bar">
            <p>PHP</p>
            <div class="bar">
                <div class="fill" style="width: 38%;"></div>
            </div>
        </div>
        <div class="skill-bar">
            <p>conf</p>
            <div class="bar">
                <div class="fill" style="width: 16%;"></div>
            </div>
        </div>



        @else
            <p class="error-message">The Data Is Not Available, Try Again Later..</p>
        @endif
        <footer><p>Manual page Fauzy(1) (press h for help)</p></footer>
    </div>
</body>
</html>
