<?php
  $buildingtypes = array(
    "Apartment Building",
    "Student Housing (Dorm)",
    "Elevator Building",
    "Walk-Up",
    "Town-House",
    "Brownstone",
    "Rowhouse",
    "Duplex",
    "House",
    "Other"
  );
  if (!is_null(vget('any')))
    array_unshift($buildingtypes, 'Any');
?>

<div class="form-slider"><label for="buildingtype">Building type: </label>
<select id="buildingtype" name="buildingtype" required>
  <?php 
    vecho('buildingtype', '<option selected="selected">{var}</option>');
    foreach ($buildingtypes as $buildingtype) {
      echo "<option>$buildingtype</option>";
    }
  ?>
</select></div>