<?php echo "<title>" . $NTFY . $site['name'] . " - Roulette" . "</title>"; ?>

<div class="text-center">
	<div class="row m-0 p-3">
		<div class="col-md-12">
			<div class="row m-0">
				<div class="col-md-12 overflow-auto">
					<canvas id="canvas" width="500" height="500"></canvas>
				</div>
				
				<div class="col-md-4">
					<select class="form-control w-100 mb-3">
						<option value="" disabled="" selected="">Select character</option>
						<?php
																	$temp = $con->query('SET search_path TO characters;');
                                                                    $sql_character = $con->select("characters","*",["AccountId" => $_SESSION['USER_ID']]);//('SELECT "Name", "Id" FROM ' . CHAR . ' WHERE "AccountId" = ?');

                                                                    foreach($sql_character as $CHARACTER ){ 
                                                                        if(substr($CHARACTER[CHAR_NICK], 1, 7) != "DELETED") {
                                                                            echo "<option value='" . $CHARACTER[CHAR_ID] . "'>" . $CHARACTER[CHAR_NICK] . "</option>";
                                                                        }
                                                                    } ?>
					</select>
				</div>
				<div class="col-md-4">
					<input type="button" class="btn w-100 mb-3 <?php echo $site['style']['btn-p']; ?>" value="Spin" id='spin' />
				</div>
				<div class="col-md-4">
					<input type="button" class="btn w-100 mb-3 <?php echo $site['style']['btn-s']; ?>" value="Rewards" id='spin' data-toggle="modal" data-target="#RewardModal" />
				</div>
				<div class="modal fade" id="RewardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		            <div class="modal-dialog" role="document">
		                <div class="modal-content" style="<?php echo "background-color: " . $site['style']['bg-b-m'] . '; color: ' . $site['style']['text-b-m'] ?>">
		                    <div class="modal-header" style="<?php echo "background-color: " . $site['style']['bg-h-m'] . '; color: ' . $site['style']['text-h-m'] ?>">
		                        <h5 class="modal-title font-roboto" id="exampleModalLabel">Rewards</h5>
		                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		                            <span aria-hidden="true">×</span>
		                        </button>
		                    </div>
		                    <div class="modal-body">
		                    	<div class="row m-0">
		                    	
		                       	<?php 
									$temp = $con->query('SET search_path TO web;');
									$SQL_ROULETTE_ITEMS = $con->select("rouletteweb","*");//("SELECT * FROM " . ROULETTE);

									foreach($SQL_ROULETTE_ITEMS as $ROULETTE_ITEMS)
										echo "<div class='col-md-2 p-2'><img src='" . $site['assets']['images'] . "/items/" . $ROULETTE_ITEMS[ROULETTE_VNUM] . ".png' width='50' class='border border-primary rounded'></div>";
								?>
									
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>			
		</div>
	</div>
</div>
<script type="text/javascript">


	var options = [

		<?php 
			$temp = $con->query('SET search_path TO web;');
			$SQL_ROULETTE_ITEMS = $con->select("rouletteweb","*");

			foreach($SQL_ROULETTE_ITEMS as $ROULETTE_ITEMS)
				echo "'" . $ROULETTE_ITEMS[ROULETTE_VNUM] . "',";
		?>
	];

	var startAngle = 0;
	var arc = Math.PI / (options.length / 2);
	var spinTimeout = null;

	var spinArcStart = 10;
	var spinTime = 0;
	var spinTimeTotal = 0;

	var ctx;

	document.getElementById("spin").addEventListener("click", spin);

	function byte2Hex(n) {
	  var nybHexString = "0123456789ABCDEF";
	  return String(nybHexString.substr((n >> 4) & 0x0F,1)) + nybHexString.substr(n & 0x0F,1);
	}

	function RGB2Color(r,g,b) {
		return '#' + byte2Hex(r) + byte2Hex(g) + byte2Hex(b);
	}

	function getColor(item, maxitem) {
	  var phase = 0;
	  var center = 128;
	  var width = 127;
	  var frequency = Math.PI*2/maxitem;
	  
	  red   = Math.sin(frequency*item+2+phase) * width + center;
	  green = Math.sin(frequency*item+0+phase) * width + center;
	  blue  = Math.sin(frequency*item+4+phase) * width + center;
	 /*
	  red	= 249;
	  green	= 16;
	  blue	= 48; */

	  return RGB2Color(red,green,blue);
	}

	function drawRouletteWheel() {
	  var canvas = document.getElementById("canvas");
	  if (canvas.getContext) {
	    var outsideRadius = 200;
	    var textRadius = 180;
	    var insideRadius = 120;

	    ctx = canvas.getContext("2d");
	    ctx.clearRect(0,0,500,500);

	    ctx.strokeStyle = "#3c3b3d";
	    ctx.lineWidth = 5;

	    ctx.font = 'bold 15px Helvetica, Arial';

	    for(var i = 0; i < options.length; i++) {
	      var angle = startAngle + i * arc;
	      //ctx.fillStyle = colors[i];
	      ctx.fillStyle = getColor(i, options.length);

	      ctx.beginPath();
	      ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);
	      ctx.arc(250, 250, insideRadius, angle + arc, angle, true);
	      ctx.stroke();
	      ctx.fill();

	      ctx.save();
	      ctx.shadowOffsetX = 0;
	      ctx.shadowOffsetY = 0;
	      ctx.shadowBlur    = 0;
	      ctx.shadowColor   = "rgb(220,220,220)";
	      ctx.fillStyle = "black";
	      ctx.translate(250 + Math.cos(angle + arc / 2) * textRadius, 
	                    250 + Math.sin(angle + arc / 2) * textRadius);
	      ctx.rotate(angle + arc / 2 + Math.PI / 2);
	      var text = options[i];
	      var image = new Image();
	      image.src = "<?php echo $site['assets']['images'] . "/items/" ?>" + options[i] + ".png";
	      //ctx.fillText(text, -ctx.measureText(text).width / 2, 0);.
	      ctx.drawImage(image, -ctx.measureText(text).width / 2, 0);
	      ctx.restore();
	    } 

	    //Arrow
	    ctx.fillStyle = "black";
	    ctx.beginPath();
	    ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
	    ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));
	    ctx.lineTo(250 + 4, 250 - (outsideRadius - 5));
	    ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));
	    ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));
	    ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));
	    ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));
	    ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));
	    ctx.fill();
	  }
	}

	function spin() {
	  spinAngleStart = Math.random() * 10 + 10;
	  spinTime = 0;
	  spinTimeTotal = Math.random() * 3 + 4 * 1000;

	  rotateWheel();
	}

	function rotateWheel() {
	  spinTime += 10;
	  if(spinTime >= spinTimeTotal) {
	    stopRotateWheel();
	    return;
	  }
	  var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
	  startAngle += (spinAngle * Math.PI / 180);
	  drawRouletteWheel();
	  spinTimeout = setTimeout('rotateWheel()', 30);
	}

	function stopRotateWheel() {
	  clearTimeout(spinTimeout);
	  var degrees = startAngle * 180 / Math.PI + 90;
	  var arcd = arc * 180 / Math.PI;
	  var index = Math.floor((360 - degrees % 360) / arcd);
	  ctx.save();
	  ctx.font = 'bold 30px Helvetica, Arial';
	  var text = options[index];

	  var image = new Image();
	  image.src = "<?php echo $site['assets']['images'] . "/items/" ?>" + options[index] + ".png";

	  ctx.drawImage(image, 235,235);


	  ctx.restore();
	}

	function easeOut(t, b, c, d) {
	  var ts = (t/=d)*t;
	  var tc = ts*t;
	  return b+c*(tc + -3*ts + 3*t);
	}

	drawRouletteWheel();

</script>