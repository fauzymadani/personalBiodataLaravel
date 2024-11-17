<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            margin-top: 20px;
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
            margin: 10px;
            margin-bottom: 20px;
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

        /* github.com/alfredsaveron/scrollbars/Block */
        ::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar
        {
            width: 9px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb
        {
            background-color: #F90;
            background-image: -webkit-linear-gradient(90deg,
	                                          rgba(255, 255, 255, .2) 25%,
											  transparent 25%,
											  transparent 50%,
											  rgba(255, 255, 255, .2) 50%,
											  rgba(255, 255, 255, .2) 75%,
											  transparent 75%,
											  transparent)
        }

        .map {
            height: 240px;
        }

        .ext-list {
            margin: 10px;
        }

        .debian {
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 50%;
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

            .map {
                height: 200px;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/dracula.css') }}">
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
        <pre><code class="language-c">
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
        </code>
        </pre>
        <p>
        When I’m not immersed in my projects, I find joy in sharing knowledge with peers, contributing to open-source communities, and constantly pushing the boundaries of what technology can achieve. Inspired by the power of collaboration and innovation, I dream of creating impactful digital solutions that make a difference in the lives of others. Whether it’s customizing a Linux distro or perfecting a website design, I embrace every challenge with determination, proving that learning and growing are as limitless as the open-source universe I admire.
        </p>
        <hr>
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
        <pre><code class="language-bash">
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
        </code>
        </pre>
        </p>
        <div class="skill-bar">
            <p>Linux Enthusiast🐧</p>
            <div class="bar">
                <div class="fill" style="width: 100%;"></div>
            </div>
        </div>
        <div class="skill-bar">
            <p>Web Developer 👨‍💻</p>
            <div class="bar">
                <div class="fill" style="width: 95%;"></div>
            </div>
        </div>
        <div class="skill-bar">
            <p>Fighter🥊</p>
            <div class="bar">
                <div class="fill" style="width: 70%;"></div>
            </div>
        </div>
        <div class="skill-bar">
            <p>Student🧑‍🎓</p>
            <div class="bar">
                <div class="fill" style="width: 99%;"></div>
            </div>
        </div>
        <p>i'm <span>Fauzy</span>. that's it, thak you for reading, now you know me</p>
        <hr>
        <h2>## I Live In Indonesia Btw</h2>
        <p>Indonesia,[b] officially the Republic of Indonesia,[c] is a country in Southeast Asia and Oceania, between the Indian and Pacific oceans. It consists of over 17,000 islands, including Sumatra, Java, Sulawesi, and parts of Borneo and New Guinea. Indonesia is the world's largest archipelagic state and the 14th-largest country by area, at 1,904,569 square kilometres (735,358 square miles). With over 280 million people,
            Indonesia is the world's fourth-most-populous country and the most populous Muslim-majority country. Java, the world's most populous island, is home to more than half of the country's population.<br>
            <br>
            <img src="{{ asset('image/indonesia.svg.png') }}" alt="Emacs Icon" class="map"><br>
        Indonesia is a presidential republic with an elected legislature. It has 38 provinces, of which nine have special autonomous status. The country's largest city, Jakarta, is the world's second-most-populous urban area. Indonesia shares land borders with Papua New Guinea, East Timor, and the eastern part of Malaysia, as well as maritime borders with Singapore, Peninsular Malaysia, Vietnam, Thailand, the Philippines, Australia, Palau, and India. Despite its large population and densely populated regions, Indonesia has vast areas of wilderness that support one of the world's highest levels of biodiversity.</p>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Population</th>
                    <th>more than 270 million across 17,000 islands</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Size</td>
                    <td>7.9 million km²</td>
                </tr>
                <tr>
                    <td>Landscapes</td>
                    <td>Mountain, Rice field, Sea</td>
                </tr>
                <tr>
                    <td>Economy</td>
                    <td>Agriculture, mining, farming</td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td>Islam, Christiany, Budhism, Tionghoa(chinese), Hinduism, Catholic</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <h2>## Supported Extension</h2>
        <div class="ext-list">
            <ul>
                <li>*.c</li>
                <li>*.blade.php</li>
                <li>*.php</li>
                <li>*.css</li>
                <li>*.lua</li>
                <li>*.html</li>
                <li>*.js</li>
            </ul>
        </div>
        <hr>
        <h2>## Why Using Linux? ## </h2>
        <div class="debian">
        <img src="{{ asset('image/openlogo.svg') }}" align="center" class="debian-image">
        </div>
        <p>many people have questioned me, "Why are you using Linux? Linux is hard, just use windows!"
            the answer's is i don't have money to go outside, to playing or <span>"nongkrong"</span> with my friends. so i'm
            trying not too many interactions with my friends. using linux is the best choice so i'm having more time
            configuring linux, customizing it, trying window manager, text editor, looking for inspiration for linux themes.
            and since i don't have any girlfriend, my time is fully on linux and programming. (i have interest on unix and freebsd too)</p>
        <hr>
        <h2>## What people say!!</h2>
        <script src="https://utteranc.es/client.js"
                repo="fauzymadani/personalBiodataLaravel"
                issue-term="pathname"
                label="comment"
                theme="github-dark"
                crossorigin="anonymous"
                async>
        </script>

        @else
            <p class="error-message">The Data Is Not Available, Try Again Later..</p>
        @endif
        <footer><p>Manual page Fauzy(1) (press h for help)</p></footer>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            hljs.highlightAll();
        });
    </script>
    <link rel="stylesheet" href="{{ asset('css/dracula.css') }}">

</body>
</html>
