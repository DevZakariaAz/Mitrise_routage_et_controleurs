<tr>
    <td><strong>{{ $article['title'] }}</strong></td>
    <td>{{ $article['content'] }}</td>
    <td>
        <!-- Edit Icon -->
        <a class="btn btn-success" href="/dashboard/articles/{{ $article['id'] }}/edit" title="Modifier">
            <i class="fa fa-edit" ></i>
        </a>
        <a class="btn btn-info" href="/dashboard/articles/{{ $article['id'] }}" title="Afficher">
            <i class="fa fa-eye"></i>
        </a>

        <!-- Delete Icon -->
        <form action="/dashboard/articles/{{ $article['id'] }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" title="Supprimer">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    </td>
</tr>
