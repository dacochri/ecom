{{ Form::open(['url' => 'categories']) }}
  {{ Form::label('category_id', 'Category') }}
  {{ Form::select('category_id', ['' => 'No Parent Category'] + Category::lists('name', 'id'), '') }}
  {{ Form::label('name', 'Name') }}
  {{ Form::text('name', null, array('required', 'format' => 'w+')) }}
  {{ Form::submit('Submit') }}
{{ Form::close() }}
