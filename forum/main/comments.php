<?php require 'header.php' ?>

		<div class="body1">
			<div class="row">
				<div class="card" style="margin-bottom: 50px;">
					<div class="card-body">
						<h5 class="card-title">Topic 1</h5>
						<h6 class="card-subtitle mb-2 text-muted">Vitamin B</h6>
						<p class="card-text">What to do with a Vitamin B deficiency?</p>
					</div>
				</div>

				<div style="margin-bottom: 50px;"> 
					<div class="row">
						<div class="mb-4" style="font-weight: bolder;">Comments - (2 in totals)</div>
						<div class="col-lg-2 col-md-2 col-sm-12 mb-4">
							<div class="text-center">
								<img src="images/grey-cat.jpg" class="img-thumbnail profile-image" alt="profile-picture">
							</div>
							<div class="text-center">
								John
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12">
							<p>Best food sources for vitamin B:</p>
							<ul>
								<li>Whole grains (brown rice, barley, millet)</li>
								<li>Meat (red meat, poultry, fish)</li>
								<li>Eggs and dairy products (milk, cheese)</li>
								<li>Legumes (beans, lentils)</li>
								<li>Seeds and nuts (sunflower seeds, almonds)</li>
								<li>Dark, leafy vegetables (broccoli, spinach, kai lan)</li>
								<li>Fruits (citrus fruits, avocados, bananas)</li>
							</ul>
						</div>
				 	</div><!--row-->
					<br />
					 <div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="text-center">
								<img src="images/blank-profile-picture.png" class="img-thumbnail profile-image" alt="profile-picture">
							</div>
							<div class="text-center">
								Ana
							</div>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12">
							<p>You can also take a vitamin B12 supplement. It’s usually available as cyanocobalamin — a form which your body can easily convert and use. It's also possible to get a vitamin B12 injection — this is especially useful if your deficiency is caused by absorption issues in your stomach. The form hydroxocobalamin can be given every three months.</p>
						</div>
				 	</div><!--row-->
				</div><!--style="margin-bottom: 50px-->

				<div class="form-floating">
					<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
					<label for="floatingTextarea">Your comments</label>
				</div>

			</div>
		</div>
		<br />
<?php require 'footer.php' ?>