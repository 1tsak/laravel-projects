<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .post{
            max-width: 600px;
            margin: auto;
            margin-bottom: 25px;
        }
        h1 {
            margin: auto
        }
    </style>

</head>

<body>

    <h1>Welcome</h1>
    <div class="post">
        <a href="/posts/post1"><h2>Post 1</h2></a>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt consequatur accusamus qui non corporis
            eveniet. Nemo, quaerat. Necessitatibus possimus consequatur non voluptatem perferendis nam, repellat ipsam
            nostrum facilis ipsum esse!</p>
    </div>
    <div class="post">
        <a href="/posts/post2"><h2>Post 2</h2></a>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt consequatur accusamus qui non corporis
            eveniet. Nemo, quaerat. Necessitatibus possimus consequatur non voluptatem perferendis nam, repellat ipsam
            nostrum facilis ipsum esse!</p>
    </div>
    <div class="post">
        <a href="/posts/post3"><h2>Post 3</h2></a>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt consequatur accusamus qui non corporis
            eveniet. Nemo, quaerat. Necessitatibus possimus consequatur non voluptatem perferendis nam, repellat ipsam
            nostrum facilis ipsum esse!</p>
    </div>
    <div class="post">
        <a href="/posts/post4"><h2>Post 4</h2></a>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt consequatur accusamus qui non corporis
            eveniet. Nemo, quaerat. Necessitatibus possimus consequatur non voluptatem perferendis nam, repellat ipsam
            nostrum facilis ipsum esse!</p>
    </div>


</body>

</html>
