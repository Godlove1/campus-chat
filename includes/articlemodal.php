	<div class="mode" id="id01">
						<div class="post-modal animate">
							<form method="post" class="modal-content" enctype="multipart/form-data">
								<!--image preview screen-->
								<div class="imgcontainer">
									<img src="<?php echo	$profile_picture; ?>" alt="profpic" class="pro" onClick="triggerClick()" id="profileDisplay">
									<span class="close-modal" id="closemodal">&times;</span>
								</div>
								<!--/image preview screen-->
								<div class="container-post">
									<input type="text" name="heading" placeholder="Your Title" class="heading">
									<textarea name="postdesc" id="" cols="30" rows="10" placeholder="Tell your Story?"></textarea>
									<input type="hidden" name="userid" value="<?php echo $userId; ?>">
									<label for="post img">Choose image:
										<input type="file" name="postimg" onChange="displayImage(this)" id="profileImage" class="image">
									</label>

								</div>

								<div class="cancel">
									<button type="button" id="cancelpost">
										Cancel
									</button>

									<button type="submit" name="newarticle" id="art">POST</button>

								</div>


							</form>

						</div>
					</div>