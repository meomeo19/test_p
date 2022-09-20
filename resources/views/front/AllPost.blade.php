<h1>asdsad</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>content</th>
            <th>description</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->name}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->description}}</td>
        </tr>
        @endforeach
</table>
{{ $posts->links() }}
<style>
    .w-5{
        display: none;
    }
</style>