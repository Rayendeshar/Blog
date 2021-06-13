@extends('backend.includes.layout')
@section('content')
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add new blog</h4>
						</div>
						<div class="form-body">
							 <form method="post" action="/blog/store" enctype="multipart/form">
                              {{@csrf_field()}}
                            <div class="form-group"> 
                                <label for="exampleInputEmail1">Blog Title</label> 
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Blog Title">
                    </div>
                     <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                          <textarea class="form-control" name="description" id="description" rows="5" cols="700">
</textarea>

</div>  
                           <div class="form-group"> 
                               <label for="exampleInputFile">File input</label> 
                            
                               <input type="file" id="exampleInputFile"> 
                               <p class="help-block">Example block-level help text here.</p>
                             </div> 
                               
                                    <button type="submit" class="btn btn-default">Submit</button> 
                                </form> 
						</div>
					</div>
					
	
				</div>
			</div>
		</div>
        @endsection
