@extends('backend.includes.layout')
@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">

              <a href="company/create/">Add</a>
						</div>
						<div class="form-body">
							 <form method="post" action="/company/store" enctype="multipart/form">
                              {{@csrf_field()}}
                            <div class="form-group"> 
                                <label for="exampleInputEmail1">Company Name</label> 
                                <input type="text" required class="form-control" id="name" name="name" placeholder="Enter Company name">
                    </div>
                     <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" required class="form-control" id="address" name="address" placeholder="Enter Company location">
</div>  
<div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="phone" required class="form-control" id="phone" name="phone" placeholder="Enter Company phone">
</div>  
<div class="form-group">
                          <label for="exampleInputPassword1">email</label>
                          <input type="email" required class="form-control" id="email" name="email" placeholder="Enter Company email">
</div>  
            
            
                           
                               
                                    <button type="submit" class="btn btn-default">Submit</button> 
                                </form> 
						</div>
					</div>
					
	
				</div>
			</div>
		</div>
        @endsection
