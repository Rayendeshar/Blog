

@extends('backend.includes.layout')
@section('content')

		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="panel-body widget-shadow">
					<h4>Company List</h4>
						<a href="/company/create" classbtn btn-success>ADD</a>

						<table class="table">
							<thead>
								<tr>
								  <th>S.N</th>
								  <th>Company Name</th>
								  <th>address</th>
								  <th>phone</th>
								  <th>email</th>
								  <th>action</th>


								</tr>
							</thead>
                            @php $i=1; @endphp
                            @foreach($company as $row)
							<tbody>
								<tr>
								  <th scope="row">{{$i++}}</th>
								  <td>{{$row->name}}</td>
								  <td>{{$row->address}}</td>
								  <td>{{$row->phone}}</td>
                                  <td>{{$row->email}}</td>
								<td>
								  <a href="/company/{{$row->id}}/edit" class="btn btn-info">Edit</a>  
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