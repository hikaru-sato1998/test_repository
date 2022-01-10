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
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button id="delete" type="submit">削除</button>
            </form>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </main>
    <script language="javascript" type="text/javascript">
        document.getElementById("delete").onclick = function(){
            if(window.confirm("投稿を削除します。よろしいですか？")){
                return true;
            }else{
                return false;
            }
        }
    </script>
</body>