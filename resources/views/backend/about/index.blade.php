@extends('backend.includes.layout')
@section('content')

		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="panel-body widget-shadow">
						<h4>About List</h4>
                        <a href="/about/create" classbtn btn-success>ADD</a>

						<table class="table">
							<thead>
								<tr>
								  <th>S.N</th>
								  <th>About Title</th>
								  <th>Description</th>
								  <th>Image</th>
								</tr>
							</thead>
                            @php $i=1; @endphp
                            @foreach($about as $row)
							<tbody>
								<tr>
								  <th scope="row">{{$i++}}</th>
								  <td>{{$row->title}}</td>
								  <td>{{$row->description}}</td>
                                  <td>{{$row->image}}</td>
								  <td>
								  <a href="/about/{{$row->id}}/edit" class="btn btn-danger">Edit</a>

                                      <button type="button" class="btn btn-danger ">Delete</button>
                                 
                                    </td>
								</tr>

                            </tbody>
@endforeach
                        </table>
</div>
</div>
</div>
</div>
@endsection