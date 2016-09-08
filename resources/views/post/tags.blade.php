<p><i class="fa fa-tags" aria-hidden="true"></i> Categorias</p>
@foreach ($tags as $tag)
    <div class="checkbox">
        <label>
            <input
                type="checkbox"
                name="tags[]"
                form="form"
                value="{{ $tag->id }}"
                @if (isset($tags_id))
                    @foreach ($tags_id as $id)
                        @if ($id == $tag->id)
                            checked="true"
                        @endif
                    @endforeach
                @endif>
            {{ $tag->name }}
        </label>
    </div>
@endforeach

<p><i class="fa fa-rss" aria-hidden="true"></i> Estado</p>
<div class="checkbox">
    <label id="text">
        <input
            type="checkbox"
            id="estado"
            name="published"
            @if (isset($post->published) && $post->published == TRUE)
                checked="true"
            @endif
            form="form">
        Publicar
    </label>
</div>
