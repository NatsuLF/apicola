<h4>{{ $item->name }}</h4>

<label>{{ trans('messages.description') }}</label>
<p>{!! $item->description !!}</p>

<label>{{ trans('messages.price') }}</label>
<p>{{ '$ ' . $item->price }}</p>
