@extends('layouts.default')

@section('content')
<section>
  <h2>Categories Index Page</h2>
  <table>
    <thead>
      <tr>
        <th>Parent Category</th>
        <th>Category Name</th>
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
        </tr>
      @endforeach
    </tbody>
  </table>
</section>
@stop
