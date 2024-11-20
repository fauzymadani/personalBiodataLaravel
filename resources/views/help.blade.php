<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help - Keybindings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @font-face {
            font-family: 'JetBrains Mono Nerd Font';
            src: url('{{ asset('fonts/JetBrainsMono-NerdFont.ttf') }}') format('truetype');
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'JetBrains Mono Nerd Font', monospace;
            background: linear-gradient(135deg, #1c1c1e, #2a2a2d);
            color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            padding: 0 2rem;
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

        .help-container {
            background: rgba(28, 28, 30, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.6);
            width: 80%;
            max-width: 800px;
            text-align: left;
            position: relative;
        }

        h2 {
            margin-top: 20px;
            font-size: 2rem;
            color: #e67e22;
        }

        pre {
            background-color: #2e2e2e;
            color: #f0f0f0;
            font-family: 'JetBrains Mono Nerd Font', monospace;
            padding: 1rem;
            border-radius: 10px;
            overflow-x: auto;
            margin: 1rem 0;
            font-size: 1rem;
            line-height: 1.5;
            border-left: 5px solid #e67e22;
            border-top: 1px solid white;
        }

        .keybinding-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            font-family: 'JetBrains Mono Nerd Font', monospace;
            background-color: #2e2e2e;
            color: #f0f0f0;
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
            background-color: rgba(230, 126, 34, 0.2);
        }

        footer {
            font-family: 'JetBrains Mono Nerd Font', monospace;
            font-size: 0.8rem;
            color: #aaa;
            background-color: #2e2e2e;
            padding: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #e67e22;
        }

        .guide-bind {
            padding: 0px;
            color: #aaa;
            color: white;
        }

        span {
            color: white;
            background-color: black;
            border-radius: 5px;
            padding: 2px 2px 2px 2px;
            border: 0.5px solid white;
        }

        @media (max-width: 768px) {
                    body {
                        padding: 1rem;
                    }

                    h1 {
                        font-size: 2.5rem;
                    }

                    .help-container {
                        width: 100%;
                        padding: 1.5rem;
                    }

                    h2 {
                        font-size: 1.5rem;
                    }

                    pre {
                        font-size: 0.9rem;
                        padding: 0.8rem;
                    }

                    .keybinding-table {
                        font-size: 0.9rem;
                    }

                    th, td {
                        padding: 0.8rem;
                    }

                    footer {
                        font-size: 0.7rem;
                        padding: 5px;
                    }
                }

                /* Additional media query for very small screens */
                @media (max-width: 480px) {
                    h1 {
                        font-size: 2rem;
                    }

                    .help-container {
                        padding: 1rem;
                    }

                    h2 {
                        font-size: 1.3rem;
                    }

                    pre {
                        font-size: 0.85rem;
                        padding: 0.6rem;
                    }

                    .keybinding-table {
                        font-size: 0.85rem;
                    }

                    th, td {
                        padding: 0.6rem;
                    }

                    footer {
                        font-size: 0.6rem;
                        padding: 3px;
                    }
                }
    </style>
</head>
<body>
    <div class="help-container">
        <h1>Help - Keybindings</h1>

        <h2>Page Keybindings</h2>
        <table class="keybinding-table">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Keybinding</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Go To the start of the page</td>
                    <td><pre>a</pre></td>
                </tr>
                <tr>
                    <td>Go to the end of the page</td>
                    <td><pre>b</pre></td>
                </tr>
                <tr>
                    <td>keybindings guide</td>
                    <td><pre>h</pre></td>
                </tr>
                <tr>
                    <td>Go to the index page</td>
                    <td><pre>q</pre></td>
                </tr>
                <tr>
                    <td>scroll up</td>
                    <td><pre>j</pre></td>
                </tr>
                <tr>
                    <td>scroll down</td>
                    <td><pre>k</pre></td>
                </tr>
                <tr>
                    <td>display my pgp key</td>
                    <td><pre>p</pre></td>
                </tr>
            </tbody>
        </table>

        <h2>Text Editor Specific Keybindings</h2>
        <table class="keybinding-table">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Keybinding</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Open Command Palette</td>
                    <td><pre>Ctrl + Shift + P</pre></td>
                </tr>
                <tr>
                    <td>Split Window</td>
                    <td><pre>Ctrl + \</pre></td>
                </tr>
                <tr>
                    <td>Switch Tab</td>
                    <td><pre>Ctrl + Tab</pre></td>
                </tr>
                <tr>
                    <td>Undo</td>
                    <td><pre>Ctrl + Z</pre></td>
                </tr>
                <tr>
                    <td>Redo</td>
                    <td><pre>Ctrl + Shift + Z</pre></td>
                </tr>
            </tbody>
        </table>

        <footer>
            <p>&copy; 2024 Fauzy. All Rights Reserved. <p class="guide-bind">press <span>q</span> to go back.</p></p>
        </footer>
    </div>
    <script>
        document.addEventListener("keydown", function(event) {
            const key = event.key.toLowerCase();

            if (key === "q") {
                window.location.href = "{{ route('welcome') }}";
            } else if (key === "a") {
                window.scrollTo({ top: 0, behavior: "smooth" });
            } else if (key === "b") {
                window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
            } else if (key === "j") {
                window.scrollBy({ top: -100, behavior: "smooth" });
            } else if (key === "k") {
                window.scrollBy({ top: 100, behavior: "smooth" })
            } else if (key === "p") {
                window.location.href = "{{ route('key') }}";
            }

        });
    </script>
</body>
</html>
