@extends('home.templates.master')
@section('body')

<h1>Welcome</h1>

<form class="form" role="form" action="{{url('/')}}/submit" method="post">
	<div class="form-group">
		<label for="first_name">First Name</label>
		<div class="alert alert-danger hidden" role="alert"></div>
		<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
	</div>
	<div class="form-group">
		<label for="first_name">Last Name</label>
		<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<div class="alert alert-danger hidden" role="alert"></div>
		<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
	</div>
	<div class="form-group">
		<label for="phone">Phone Number</label>
		<div class="alert alert-danger hidden" role="alert"></div>
		<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
	</div>
	<button type="submit" class="btn btn-green">Submit</button>
</form>

<div class="modal fade in" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
 	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        		<div class="h3 modal-title">Thank Your For Submitting</div>
      		</div>
      		<div class="modal-body">
      			<p>Thank you, <span class="thanks-name"></span>, for submitting. Your information has been added successfully.</p>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop