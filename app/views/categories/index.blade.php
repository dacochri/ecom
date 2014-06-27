@extends('layouts.default')

@section('content')
<section>
  <h2>Categories</h2>
  <p><a href="categories/create">New Category</a></p>
  <table>
    <thead>
      <tr>
        <th>Parent Category</th>
        <th>Category Name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
        <tr>
          @if(!$category->category_id)
            <td>None</td>
          @else
            <td>{{ Category::find($category->category_id)->name }}</td>
          @endif
          <td>{{ $category->name }}</td>
          <td>
            <a href="categories/{{ $category->id }}/edit">Edit</a>
            {{ Form::open(['url' => "categories/$category->id", 'class' => 'delete-form']) }}
              {{ Form::hidden('_method', 'DELETE') }}
              {{ Form::submit('Delete') }}
            {{ Form::close() }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</section>
@stop
