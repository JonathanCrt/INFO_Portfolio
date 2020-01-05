<?php
 $json = file_get_contents("./js/filmoiid.json");
 $tabPersonnages = json_decode($json,true);
 $longueur = sizeof($tabPersonnages["personnages"]);
?>

<?php require_once "./corps/header.php"; ?>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
							<div class="Title_list">
                <div class="logo"><span class="icon fa-list"></span></div>
								<h2>Displaying characters</h2>
								<p>from the Json file</p>
							</div>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<section>
										<h3 class="major">List</h3>

										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>First Name</th>
														<th>Last name</th>
														<th>Actor</th>
														<th>Movie</th>
														<th>Kind</th>
                            <th></th>
													</tr>
												</thead>
												<tbody>

							<?php
               for ($i=0;$i<$longueur;$i++) {
								 print("<tr id='item".$i."'>\n");
								 print("<td>".$tabPersonnages["personnages"][$i]["nom"]."</th>\n");
								 print("<td>".$tabPersonnages["personnages"][$i]["prenom"]."</th>\n");
								 print("<td>".$tabPersonnages["personnages"][$i]["acteur"]."</th>\n");
								 print("<td>".$tabPersonnages["personnages"][$i]["film"]."</th>\n");
								 print("<td>".$tabPersonnages["personnages"][$i]["genre"]."</th>\n");
                 print("<td><a href='#' title='Supprimer' onClick='supprimer(".$i.");'><span class='icon fa-trash'></span></a></th>\n");
							   print("</tr>\n");
							 }

							 ?>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="4"></td>
														<td><?php print("Total : ".$longueur); ?></td>
													</tr>
												</tfoot>
											</table>
										</div>
									</section>
				</div>
       </div>

		 </section>
			</div>



<style>
.table-wrapper{
margin:auto;
}
td,.major,.Title_list
{
text-align :center;
}


 </style>
<?php require_once "./corps/footer.php"; ?>