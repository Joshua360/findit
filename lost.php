<?php include './inc/header.php';?>


<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>REPORT LOST ITEM</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->




<div class="container" style="margin-bottom: 100px;">
<h1 class="display-4 text-center">Fill this form with accurate information</h1><br><br>

<form class="theme-form-one form-validation" autocomplete="off">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="itemLost">Item Lost</label>
      <input type="text" class="form-control" id="itemLost" placeholder="sweater">
    </div>
    <div class="form-group col-md-6">
      <label for="dat">Date Lost</label>
      <input type="date" class="form-control" id="date" placeholder="19-08-2021">
    </div>

    <div class="form-group col-md-6">
      <label for="category">Category</label>
      <input type="text" class="form-control" id="category" placeholder="search category">
    </div>
    <div class="form-group col-md-6">
      <label for="time">Time Lost</label>
      <input type="time" class="form-control" id="time" placeholder="1:09PM">
    </div>

    <div class="form-group col-md-6">
      <label for="brand">Brand</label>
      <input type="text" class="form-control" id="brand" placeholder="e.g Samsung">
    </div>
    <div class="form-group col-md-6">
      <label for="color">Item Color</label>
      <input type="text" class="form-control" id="time" placeholder="e.g Red">
    </div>

    <div class="form-group col-md-6">
      <label for="where">Where Lost</label>
      <input type="text" class="form-control" id="where" placeholder="e.g Restaurant, bar">
    </div>
    <div class="form-group col-md-6">
      <label for="city">In which City?</label>
      <input type="text" class="form-control" id="time" placeholder="e.g Nairobi">
    </div>

  </div>

  




  <div class="form-group">
    <label for="image">Image of the Item</label>
    <input type="file" class="form-control" id="image">
  </div>
  
  <div class="form-group">
    <label for="extrainfo">Any additional Information</label>
    <textarea class="form-control" id="extrainfo" rows="3"></textarea><br><br>
  </div>


  <div class="form-group">
  <h1 class="display-4 text-center" style="margin-top: 30px;">Contact Information</h1><br><br>
  </div>


  <div class="form-row">

        <div class="form-group col-md-6">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" placeholder="Miguna">
            </div>
            <div class="form-group col-md-6">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" placeholder="Miguna">
            </div>

        <div class="form-group col-md-6">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" placeholder="0734017362">
            </div>
            <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="doublem@gmail.com">
            </div>
  </div>



  

  <button type="submit" class="btn btn-primary">SUBMIT</button>
</form>



</div>



		

			

		

			<?php include './inc/footer.php';?>
