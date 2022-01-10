<!DOCTYPE HTML>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <title>BlogBlogBlog</title>
</head>
<body>
    <header>
        <h1>BlogBlogBlog</h1>
    </header>
    <main>
        <div class="posts">
            <div class="post">
                <div class="post-text">
                    <h2 class="title">{{ $post->title }}</h2>
                    <p class="body">{{ $post->body }}</p>
                    <p class="updated_at">{{ $post->updated_at }}</p>
                    <p class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <a href="/">戻る</a>
    </footer>
</body>