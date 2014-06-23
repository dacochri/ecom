{{ Form::open() }}
  {{ Form::label('category_id', 'Category') }}
  {{ Form::text('category_id') }}
  {{ Form::label('name', 'Name') }}
  {{ Form::text('name') }}
  {{ Form::label('price', 'Price') }}
  {{ Form::text('price') }}
  {{ Form::label('manufacturer', 'Manufacturer') }}
  {{ Form::text('manufacturer') }}
  {{ Form::label('quantity', 'Quantity') }}
  {{ Form::text('quantity') }}
  {{ Form::label('description', 'Description') }}
  {{ Form::text('description') }}
  {{ Form::submit() }}
{{ Form::close() }}
