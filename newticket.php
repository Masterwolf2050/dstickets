    			<h3>Ticket Submission</h3>
    			<form id="newticket" action="">
    			<div class="row">
	    		    <div class="col-sm-4">
	    		    	<div class="form-group label-floating">
							<label class="control-label">Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group label-floating">
							<label class="control-label">Email</label>
							<input type="email" class="form-control">
						</div>
						<div class="form-group label-floating">
							<label class="control-label">Subject</label>
							<input type="text" class="form-control">
						</div>
			    	</div>
			    	<div class="col-sm-6" id="priority">
			    		</br>Priority</br>
			    		<select>
							<option value="volvo">Regular</option>
							<option value="saab">Low</option>
							<option value="fiat">High</option>
							<option value="audi">Urgent</option>
						</select>
					</div>
			    </div>
			    <div class="row">
			    	<div class="col-lg-8">
			    		<textarea class="form-control" placeholder="Please descripe the issue..." rows="5"></textarea>
			    	</div>
			    </div>
		    	<button class="btn btn-primary btn-round" type="submit" name="submit">Submit</button>
		    	</form>