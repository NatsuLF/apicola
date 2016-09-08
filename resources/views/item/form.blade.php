<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Nombre del producto</label>
            <input type="text" id="name" name="name" value="{{ isset($item) ? $item->name : '' }}" class="form-control" autofocus="true" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" name="price" id="price" value="{{ isset($item) ? $item->price : '' }}" class="form-control" required>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="description">Descripción</label>
    <textarea
        id="description"
        name="description"
        class="form-control"
        rows="3"
        required>{{ isset($item) ? $item->description : ''}}</textarea>
</div>

<div id="album">
    <div class="clearfix">
        <a href="#" id="cloneImageTextBox" class="btn btn-default btn-sm pull-right">
            <i class="fa fa-clone" aria-hidden="true"></i>
        </a>
    </div>

    @if (isset($item))
        @foreach ($item->images as $img)
            <div class="images">
                <div class="form-group">
                    <label for="url">Imagen del producto</label>

                    <div class="input-group">
                        <input type="url" name="url[]" id="url" value="{{ $img->url }}" class="form-control" required>
                        <span class="input-group-addon delete">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="images">
            <div class="form-group">
                <label for="url">Imagen del producto</label>

                <div class="input-group">
                    <input type="url" name="url[]" id="url" class="form-control" required>
                    <span class="input-group-addon delete">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
    @endif
</div>