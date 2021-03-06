@extends('layouts.base',['title'=>'contact'])
@section('content')
	<div class="row">
    <div class="col-md-6 " id="form_container">
        <h2> <i class="fa fa-envelope"></i> Contact Us</h2>
        <p>
           Please send your message below. We will get back to you at the earliest!
        </p>
        <form role="form" method="post" id="reused_form">

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message">
                        Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-default pull-right" >Send <i class="fa fa-paper-plane"></i></button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>Posted your message successfully!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Sorry there was an error sending your form.

        </div>
    </div>
    <div class="col-md-6">
    	 <h2> <i class="fa fa-map"></i> Localisation </h2>
    	 <p> look for us on the map</p>
    	 <div class="row">
    	 	<div class="col-sm-12">
    	 		<iframe width="400" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://cartosm.eu/map?lon=13.577942847551&lat=7.3190945584906&zoom=14&width=400&height=250&mark=true&nav=false&pan=true&zb=bar&style=default&icon=right"></iframe><br /><div id="cartosmlink"><a href="http://www.openstreetmap.org/?mlat=7.3190945584906&mlon=13.577942847551&zoom=14&layers=M"  target="_blank" style="text-align:left;">Voir sur une carte plus grande</a></div>
    	 	</div>
    	 </div>
    </div>
</div>
@endsection