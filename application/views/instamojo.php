
<section>
	<div class="container">
	    <form class="well form-horizontal" action="<?php echo base_url().'Payment'; ?>" method="POST"">
	        <fieldset>
	            <!-- Form Name -->
	            <legend>
	                <center>
	                    <h2><b>Payment via <span style="color: #3c8dbc;" >Instamojo</span></b></h2>
	                </center>
	            </legend>
	            <br>
	            <!-- Text input-->
	            <div class="form-group">
	                <label class="col-md-4 control-label">Payment purpose</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"> <i class="glyphicon glyphicon-certificate"></i></span>
	                        <input  name="purpose" placeholder="Payment purpose" id="purpose" class="form-control demoInputBox"  type="text" required>
	                    </div>
	                </div>
	                <span id="purpose-info" class="info"></span>
	            </div>
	            <div class="form-group">
	                <label class="col-md-4 control-label">Amount</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"> <i class="fa fa-inr"></i></span>
	                        <input  name="amount" placeholder="Amount" id="amount" class="form-control demoInputBox"  type="text" required>
	                    </div>
	                </div>
	                <span id="amount-info" class="info"></span>
	            </div>
	            <div class="form-group">
	                <label class="col-md-4 control-label">Full Name</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                        <input  name="full_name" placeholder="Full Name" id="fullName" class="form-control demoInputBox"  type="text" required>
	                    </div>
	                </div>
	                <span id="fullName-info" class="info"></span>
	            </div>
	            <!-- Text input-->
	            <div class="form-group">
	                <label class="col-md-4 control-label">E-Mail</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
	                        <input name="email" placeholder="E-Mail Address" id="userEmail" class="form-control demoInputBox"  type="text" required>
	                    </div>
	                </div>
	                <span id="userEmail-info" class="info"></span>
	            </div>
	            <!-- Text input-->
	            <div class="form-group">
	                <label class="col-md-4 control-label">Contact No.</label>  
	                <div class="col-md-4 inputGroupContainer">
	                    <div class="input-group">
	                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
	                        <input name="contact_no" placeholder="Contact No" id="contact" class="form-control demoInputBox" type="text" required>
	                    </div>
	                </div>
	                <span id="contact-info" class="info"></span>
	            </div>
	            <!-- Button -->
	            <div class="form-group">
	                <label class="col-md-4 control-label"></label>
	                <div class="col-md-4"><br>
	                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning btnAction" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send "></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	                </div>
	            </div>
	        </fieldset>
	    </form>
	</div>
</section>