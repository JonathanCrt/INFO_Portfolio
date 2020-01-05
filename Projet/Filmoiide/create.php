<?php require_once "./corps/header.php"; ?>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
							<div class="title_adding">
                <div class="logo"><span class="icon fa-user-secret"></span></div>
								<h2>Adding</h2>
								<p>Form to add a character.</p>
								</div>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<section>
										<h3 class="major">Form</h3>
										<form method="post" action="./corps/ajout.php">
										<div class="container">
											<div class="row uniform">

												<div class="6u 12u$(xsmall)">
													<label for="nom">First name</label>
													<input type="text" name="nom" id="nom" value="" />
												</div>
												<div class="6u$ 12u$(xsmall)">
													<label for="prenom">Last name</label>
													<input type="text" name="prenom" id="prenom" value="" />
												</div>
												<div class="6u 12u$(xsmall)">
													<label for="acteur">Actor</label>
													<input type="text" name="acteur" id="acteur" value="" />
												</div>
												<div class="6u$ 12u$(xsmall)">
													<label for="film">Movie</label>
													<input type="text" name="film" id="film" value="" />
												</div>
												<div class="12u$">
													<label for="genre">Kind</label>
													<div class="select-wrapper">
														<select name="genre" id="genre">
															<option value="">-</option>
															<option value="1">Action</option>
															<option value="2">Fantastic</option>
															<option value="3">Science-fiction</option>
															<option value="4">Adventure</option>
														</select>
													</div>
												</div>

												<div class="12u$">
													<ul class="actions">
														<li><input type="submit" value="Send" class="special" /></li>
														<li><input type="reset" value="Reset" /></li>
													</ul>
												</div>
											</div>
											</div>
										</form>
									</section>


			</div>


			<style>
.wrapper{
margin:auto;
}
td,.major,.title_adding
{
text-align :center;
}



 </style>


<?php require_once "./corps/footer.php"; ?>