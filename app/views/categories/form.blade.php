{{ HTML::ul($errors->all()) }}
@if(isset($category))
  {{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) }}
@else
  {{ Form::open(['url' => 'categories']) }}
@endif
  {{ Form::label('category_id', 'Category') }}
  {{ Form::select('category_id', ['' => 'No Parent Category'] + Category::lists('name', 'id'), (isset($category) ? $category->category_id : Input::old('category_id'))) }}
  {{ Form::label('name', 'Name') }}
  {{ Form::text('name', (isset($category) ? $category->name : Input::old('name')), ['required', 'format' => 'w+']) }}
  {{ Form::submit('Submit') }}
{{ Form::close() }}
