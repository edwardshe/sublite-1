<?php
  require_once($GLOBALS['dirpre']."views/LeaderboardCreater.php");
?>

<script src='app/assets/js/Chart.js'></script>
<script src='app/assets/js/leaderboardGraphs.js'></script>
<script src='app/assets/js/buttons.js'></script>

<style>
  a {
    color: #035d75;
  }
  a:hover {
    color: #ffd800;
  }
  headline.small {
    font-size: 2em;
    letter-spacing: 1px;
    line-height: 1.5em;
    margin: 0;
    display: block;
    text-align: center;
  }

  .buttons {
    text-align: center;
  }

  panel.leaderboard .numdays {
    font-size: 1em;
    color: #035d75;
    text-transform: uppercase;
    background-color: #ffffff;
    border-color: #035d75;
    border-width: 1px;
  }
  panel.leaderboard .numdays:hover {
    color: #ffffff;
    background-color: #035d75;
  }
  panel.leaderboard .numdays:focus {
    outline: none;
  }

</style>

<panel class="leaderboard">
  <div class="content">
    <headline>Campus Rep Leaderboard</headline>

    <left>
      <headline class="small" id="leaderboardTitle">Sign-ups in past number of days:</headline>

      <?php
        $my_schools_days = array("Bentley University", "Eastern Michigan University");
        $my_schools_days_7_data = $CLeaderboardCreater->specific_school_count_past_number_days($my_schools_days, 7);
        $my_schools_days_30_data = $CLeaderboardCreater->specific_school_count_past_number_days($my_schools_days, 30);
        $my_schools_days_90_data = $CLeaderboardCreater->specific_school_count_past_number_days($my_schools_days, 90);
        $my_schools_days_180_data = $CLeaderboardCreater->specific_school_count_past_number_days($my_schools_days, 180);
        $my_schools_days_forever_data = $CLeaderboardCreater->specific_school_count_since_date($my_schools_days, 0);
      ?>
      <div class="buttons">
        <button class="numdays" onclick="return showHide();">7</button>
        <button class="numdays" onclick="return showHide1();">30</button>
        <button class="numdays" onclick="return showHide2();">90</button>
        <button class="numdays" onclick="return showHide3();">180</button>
        <button class="numdays" onclick="return showHide4();">Forever</button>
      </div>

      <div id="showHideDiv">
        <canvas id="7days" width="900" height="400"></canvas>
        <script>
          draw_bar_graph("7days", <?php echo json_encode($my_schools_days_7_data);?>);
        </script>
      </div>

      <div id="showHideDiv1">
        <canvas id="30days" width="900" height="400"></canvas>
        <script>
          draw_bar_graph("30days", <?php echo json_encode($my_schools_days_30_data);?>);
        </script>
      </div>

      <div id="showHideDiv2">
        <canvas id="90days" width="900" height="400"></canvas>
        <script>
          draw_bar_graph("90days", <?php echo json_encode($my_schools_days_90_data);?>);
        </script>
      </div>

      <div id="showHideDiv3">
        <canvas id="180days" width="900" height="400"></canvas>
        <script>
          draw_bar_graph("180days", <?php echo json_encode($my_schools_days_180_data);?>);
        </script>
      </div>

      <div id="showHideDiv4">
        <canvas id="foreverdays" width="900" height="400"></canvas>
        <script>
          draw_bar_graph("foreverdays", <?php echo json_encode($my_schools_days_forever_data);?>);
        </script>
      </div>

      <script>
        showHide4();
      </script>

    </left>
  </div>
</panel>