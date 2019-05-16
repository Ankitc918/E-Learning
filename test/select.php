<html>
<body>
<select name="paytype" class="form-control" id="paytype" onchange="return showAmount();" required>
															<option selected value disabled>-- select option --</option>
															<option value="Full">Full payment</option>
															<option value="Partial">Partial payment</option>
															
														</select>
														<br>
														<br>

<br>
<div id="payamount" ></div>
    
<body>
</html>
<?php $fee=13330; ?>
<script>

        function showAmount() {
            var selectedValue = document.getElementById("paytype").value;

            var y = document.getElementById("payamount");
            if(selectedValue=="Full"){
               y.innerHTML = <?php echo $fee; ?>;
            }
            else if(selectedValue=="Partial"){
               y.innerHTML = "2050";
            }
   
        }
    </script>