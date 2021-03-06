

@extends('backend.includes.layout')
@section('content')

		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="panel-body widget-shadow">
						<h4>Blog List:</h4>
                        <a href="/blog/create" classbtn btn-success>ADD</a>

						<table class="table">
							<thead>
								<tr>
								  <th>S.N</th>
								  <th>Blog Title</th>
								  <th>Description</th>
								  <th>Action</th>
								</tr>
							</thead>
                            @php $i=1; @endphp
                            @foreach($blog as $row)
							<tbody>
								<tr>
								  <th scope="row">{{$i++}}</th>
								  <td>{{$row->title}}</td>
								  <td>{{$row->description}}</td>
								  <td>
                                      <button type="button" class="btn btn-danger ">Delete</button>
									  <a href="/blog/{{$row->id}}/edit" class="btn btn-danger">Edit</a>
                                 
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