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
        <h2>ブログ編集</h2>
        <form method="POST" action="/posts/{{ $post->id }}">
            @csrf
            @method('PUT')
            <div class="title">
                <h3>タイトル</h3>
                <input type="text" name="post[title]" value="{{ $post->title }}">
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h3>本文</h3>
                <textarea name="post[body]">{{ $post->body }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存">
        </form>
    </main>
    <footer>
        <a href="/">戻る</a>
    </footer>
</body>