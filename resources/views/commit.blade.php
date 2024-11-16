<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commit Log</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .commit {
            margin-bottom: 15px;
        }
        .commit strong {
            display: block;
        }
        #diff {
            white-space: pre-wrap;
            background: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
    <script>
        function fetchDiff(hash) {
            fetch(`/commit-log/${hash}/diff`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('diff').textContent = data.diff || 'No diff available.';
                })
                .catch(err => {
                    document.getElementById('diff').textContent = 'Error fetching diff.';
                });
        }
    </script>
</head>
<body>
    <h1>Commit Log</h1>

    @foreach ($commits as $commit)
        <div class="commit">
            <strong>Commit ID:</strong> <a href="#" onclick="fetchDiff('{{ $commit['hash'] }}'); return false;">{{ $commit['hash'] }}</a>
            <strong>Author:</strong> {{ $commit['author'] }}
            <strong>Date:</strong> {{ $commit['date'] }}
            <strong>Message:</strong> {{ $commit['message'] }}
        </div>
    @endforeach

    <h2>Diff</h2>
    <div id="diff">Select a commit ID to view its diff.</div>
</body>
</html>
