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
        [<a href='/posts/create'>create</a>]
        <div class="posts">
            @foreach($posts as $post)
            <a href="/posts/{{ $post->id }}">
                <div class="post">
                    <div class="post-text">
                        <h2 class="title">{{ $post->title }}</h2>
                        <p class="body">{{ $post->body }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </main>
</body>