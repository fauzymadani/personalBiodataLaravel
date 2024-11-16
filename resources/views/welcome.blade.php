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
        <h1>Portofolio Saya</h1>

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
            </div>

        @else
            <p class="error-message">Data portofolio tidak tersedia.</p>
        @endif
        <footer><p>Manual page Fauzy(1) (press h for help)</p></footer>
    </div>
</body>
</html>
