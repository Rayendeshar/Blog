@extends('backend.includes.layout')
@section('content')

 <div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>About</h4>
						</div>
						<div class="form-body">
							 <form method="post" action="/about/store" enctype="multipart/form">
                              {{@csrf_field()}}
                            <div class="form-group"> 
                                <label for="exampleInputEmail1">Title</label> 
                                <input type="text" required class="form-control" id="title" name="title" placeholder="Enter Title">
                    </div>
                     <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                          <textarea class="form-control" required name="description" id="description" rows="5" cols="700">
                </textarea>
                </div>


                    
                           
                               
                                    <button type="submit" class="btn btn-default">Submit</button> 
                                </form> 
						</div>
					</div>
					
	
				</div>
			</div>
		</div>
        @endsection