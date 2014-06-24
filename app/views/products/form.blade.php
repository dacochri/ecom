{{ Form::open() }}
  {{ Form::label('category_id', 'Category') }}
  {{ Form::select('category_id', Category::lists('name', 'id')) }}
  {{ Form::label('name', 'Name') }}
  {{ Form::text('name', null, array('required', 'format' => 'w+')) }}
  {{ Form::label('price', 'Price') }}
  {{ Form::text('price') }}
  {{ Form::label('manufacturer', 'Manufacturer') }}
  {{ Form::text('manufacturer') }}
  {{ Form::label('quantity', 'Quantity') }}
  {{ Form::text('quantity') }}
  {{ Form::label('description', 'Description') }}
  {{ Form::textarea('description') }}
  {{ Form::submit('Submit') }}
{{ Form::close() }}
