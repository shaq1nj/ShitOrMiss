<!--Displays the map-->
<div id='map_canvas' style='width: 100%;height:75%'></div>

<!-- Add bathroom modal -->
<div id="addBathroomModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addBathroomModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content" style="text-align: center;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Add New Bathroom</h3>
			</div>

			<form method="post" action="/bathrooms/upload">
				<div class="modal-body">
					<input name="name" type="text" class="form-control" placeholder="Name" /> <br/>

					<div class="btn-group btn-group-justified">
						<a href="#" id="modal-shit" type="button" class="modal-rate-btn btn btn-default-shit">SHIT</a>
						<a href="#" id="modal-miss" type="button" class="modal-rate-btn btn btn-default-miss">MISS</a>
					</div>

					<input id="modal-rating" name="rating" type="text" style="display:none;" />

					<script>
						$("#modal-shit").click(function() {
							$("#modal-shit").css("background-color", "#468847");
							$("#modal-miss").css("background-color", "#F2DEDE");
							$("#modal-rating").val($("#modal-shit").val());
						});

						$("#modal-miss").click(function() {
							$("#modal-shit").css("background-color", "#DFF0D8");
							$("#modal-miss").css("background-color", "#b94a48");
							$("#modal-rating").val($("#modal-miss").val());
						});
					</script>

					<input id="modal-latitude" name="latitude" type="text" style="display:none;" />
					<input id="modal-longitude" name="longitude" type="text" style="display:none;" />
				</div>
				<div class="modal-footer" style="display: inline-block;">
					<input name="submit" type="submit" value="Add Bathroom" class="btn btn-default" />
				</div>
			</form>
		</div>
	</div>
</div>

<div class="btn-group btn-group-justified" style="height:25%;">
	<a href="#" id="btn-shit" class="btn btn-default-shit" disabled>SHIT <span class="glyphicon glyphicon-ok-sign"></span></a> 
	<a href="#" id="btn-miss" class="btn btn-default-miss" disabled>MISS <span class="glyphicon glyphicon-remove-sign"></span></a>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDparBeWyDGxDeoa6sAyCcLdwHjkprPraY&v=3.exp&sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/script.js"></script>