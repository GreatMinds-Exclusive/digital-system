        <!-- main -->
        <main id="middle" class="flex-fill mx-auto">

          <div class="container">
            <header>
          
              <h1 class="h4">Travel Clearance</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb small">
                  <li class="breadcrumb-item"><a href="#">Travels</a></li>
                  <li class="breadcrumb-item text-muted active" aria-current="page">Arrival Card</li>
                </ol>
              </nav>

            </header>

            <!-- profile overview -->
            <div class="section p-xl-4">
                <ol class="process-steps process-steps-primary text-muted mb-3">
	               <li class="process-step-item text-warning active">Profile</li>
	               <li class="process-step-item text-primary nav-item active">
                      <a href="#travel">Travel Details</a>
                    </li>
	               <li class="process-step-item text-primary nav-item active">
                       <a href="#declaration">Declaration</a>
                </li>
                </ol>
            
            <form novalidate class="bs-validate row g-3">
                <!--<section id="travel">-->
                    
                <header class="h5 mb-2">Travel Details</header>
                <div class="col-md-12">
                    <div class="col-md-4">
	               <label for="surname" class="form-label">Date of Arrival:</label>
		              <input type="date" class="form-control" value="">
                </div>
                    <div class="col-md-8"></div>
                </div>
                <div class="col-md-6">
	               <label for="destination" class="form-label">Take off Country:</label>
		              <select type="text" class="form-control" value="">
                          <option selected disabled value="">Select country</option>
                    </select>
                </div>  
                <div class="col-md-6">
	               <label for="port" class="form-label">Port of Entry:</label>
		              <select type="text" class="form-control" value="">
                          <option selected disabled value="">Select airport</option>
                    </select>
                </div>
    <div class="col-md-6">
		<label for="flight" class="form-label">Flight Carrier:</label>
		<input type="text" class="form-control" value="" required>
	</div>
	<div class="col-md-6">
		<label for="flightno" class="form-label">Flight Number:</label>
		<input type="text" class="form-control" value="" required>
	</div>
	
    <div class="col-md-12">
		<label for="address" class="form-label">Address in Nigera:</label>
        <textarea type="text" cols="2" class="form-control" placeholder="Host Address in Nigeria" value="" required></textarea>
	</div>
    <div class="col-md-4">
		<label for="city" class="form-label">City:</label>
		<input type="text" class="form-control" value="" required>
	</div>
    <div class="col-md-4">
		<label for="state" class="form-label">State:</label>
		<input type="text" class="form-control" value="" required>
	</div>
    
    <div class="col-md-4">
		<label for="country" class="form-label">Host Mobile Number:</label>
		<input type="text" class="form-control" value="" required>
	</div>

    
    
    <section id="declaration">
       
    <header class="h5 mb-5 muted">Declaration</header>
        
        <div class="col-md-12">
		<label for="declare" class="form-label">Are you in possession of currencies or Negotiable instruments or precious stones/metals in excess of $10,000 (Ten Thousand US Dollars) or its equivalent?</label>
        <div class="form-check form-check-inline">
	       <input class="form-check-input form-check-input-primary" name="yes" type="radio" value="">
	       <label class="form-check-label">Yes</label>
        </div>
        <div class="form-check form-check-inline">
	       <input class="form-check-input form-check-input-primary" name="no" type="radio" value="">
	       <label class="form-check-label">No</label>
        </div>
	   </div>
        <div class="col-md-12 pt-4">
		<label for="declare" class="form-label">Specify value of foreign currencies in your possession:</label>
        <textarea type="text" cols="3" class="form-control" placeholder="open or other bearer negotiable instruments in your possession" value="" required></textarea>
	   </div>
        <div class="col-12 pt-4">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			<label class="form-check-label" for="invalidCheck">
				I agree that the information here are correct and up to date
			</label>
			<div class="invalid-feedback">
				Please tick the consent to submit your form.
			</div>
		</div>
	</div>
        
    </section>
	<div class="col-md-12">
		<button type="submit" href="#" class="btn btn-primary">Submit</button>
	</div>
                
    </form>
    </div>
            
            </div>
        </main>
      </div>
      <!-- /content -->