<div>
    <table border="1">
        <thead>
            <tr>
                <th>title</th>
                <th>slug</th>
                <th>auteur</th>
                <th>photo</th>
                <th>content</th>
            </tr>
        </thead>

        <tbody>
            @foreach($articles as $article)

            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->slug}}</td>
                <td>{{$article->auteur}}</td>
                <td>{{$article->photo}}</td>
                <td>{{$article->content}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
