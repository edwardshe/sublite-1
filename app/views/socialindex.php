<style>
  panel.main {
    background: url('<?php echo $GLOBALS['dirpre']; ?>assets/gfx/socialmain.jpg') no-repeat top center;
    background-size: cover;
    background-position: center 0;
    /*background-attachment: fixed;*/
    display: table;
    min-height: 90vh;
    padding-bottom: 50px;
    position: relative;
    box-sizing: border-box;
  }

  .registerboxbutton {
    float: left;
    display: inline-block;
  }
  .arrow-down {
    width: 0;
    height: 0;
    border-left: 30px solid transparent;
    border-right: 30px solid transparent;
    border-top: 30px solid #ffd800;
    left: 50%;
    margin-left: -30px;
    position: absolute;
    bottom: 30px;
    cursor: pointer;
    opacity: 0.5;
    transition: all 0.2s ease-in-out;
  }
  .arrow-down:hover {
    opacity: 1;
  }
  panel.main .banner {
    padding: 30px 0;
    background: rgba(0, 0, 0, 0);
  }
  panel.main .banner .tagline {
    color: #ffd800;
    font-size: 4em;
    text-transform: uppercase;
    text-shadow: 4px 4px #035d75;
    line-height: 1em;
    margin-bottom: -0.2em;
    font-family: 'BebasNeue', sans-serif;
    font-weight: bold;
    font-size: 6em;
  }
  panel.main .banner .slogan {
    color: #fff;
    line-height: 1.2em;
    font-size: 2em;
    letter-spacing: 1px;
    margin-top: 0.25em;
    margin-bottom: 1em;
    text-shadow: 2px 2px #035d75;
    line-height: 1em;
  }
  panel .registerlogin {
    border-radius: 5px;
  }

  panel.why .whys {
    width: 100%;
    text-align: center;
  }
  panel.why incell {
    display: inline-block;
    width: 200px;
    text-align: center;
  }
  panel.why .whyimg {
    width: 200;
    height: 200px;
    background: #ffffff no-repeat center center;;
    background-size: 100%;
    position: relative;
    overflow: hidden;
    margin-bottom: 15px;
  }
  panel.why .whyimg1 { background-image: url('<?php echo $GLOBALS['dirpre']; ?>assets/gfx/hubs.png'); }
  panel.why .whyimg2 { background-image: url('<?php echo $GLOBALS['dirpre']; ?>assets/gfx/forums.png'); }
  panel.why .whyimg3 { background-image: url('<?php echo $GLOBALS['dirpre']; ?>assets/gfx/meetups.png'); }
  panel.why .whyroll:hover {
    opacity: 1;
  }
  panel.why .whyroll .cell {
    padding: 20px;
  }
  panel.why .whytext {
    text-transform: uppercase;
    font-size: 1.25em;
    font-weight: 700;
    line-height: 1.1em;
  }
  panel.why .whycell headline {
    margin-bottom: 0.25em;
  }
  panel.backedby {
    background-color: #ffd800;
    padding-top: 75px;
    padding-bottom: 75px;
  }
  panel.backedby .content {
    position: relative;
  }
  panel.backedby .backedlogo {
    background: transparent no-repeat center center;
    background-size: contain;
    height: 150px;
    width: 15%;
    display: inline-block;
    vertical-align: top;
  }
  panel.backedby .backedlogo1 {
    background-image: url('<?php echo $GLOBALS['dirpre']; ?>assets/gfx/upenn.png');
  }
  panel.backedby .backedlogo2 {
    background-image: url('<?php echo $GLOBALS['dirpre']; ?>assets/gfx/yale.png');
    background-size: 80%;
  }
  panel.backedby .line1 {
    font-size: 2em;
    color: #035d75;
    line-height: 1.2em;
  }
  panel.backedby .line2 {
    font-size: 2.5em;
    line-height: 1.1em;
  }
  panel.backedby .backedtext {
    width: 60%;
    display: inline-block;
    font-family: 'BebasNeue', sans-serif;
    text-transform: uppercase;
    font-weight: bold;
  }

  #cityform {
    width: 50%;
  }
  .whitetext {
    color: #fff;
    text-shadow: 2px 2px #035d75;
  }

  .success, .error {
    background: #fff;
  }
</style>

<script>
  $(function() {
    $('.signup').click(function() {
      scrollTo('.main');
    });

    $('.arrow-down').click(function() {
      scrollTo('panel.why');
    });
  });
</script>

<panel class="main">
  <div class="cell">
    <div class="banner">
      <div class="content">
        <div class="tagline">Join the social hubs!</div>
        <div class="slogan">
          Meet other students working in the same city as you are!
        </div>
        <?php
          if (vget('Loggedinstudent')) {
        ?>
            <?php if (vget('myhub')) { ?>
              <div id="tohub">
                <a href="hub.php?id=<?php vecho('myhub'); ?>">
                  <input type="button" value="Take me to my hub" />
                </a>

                <div class="whitetext">
                  <br /><br />
                  <big>&mdash; OR &mdash;</big>
                  <br /><br />
            <?php } ?>

            <div class="whitetext">
              Select a Hub to Join!
              <br /><br />
              <?php
                $hubs = array(
                  'Boston Area' =>            '555f6ca4d83594206f9970cc',
                  'Chicago' =>                '557a47b1d83594791f1fd6cb',
                  'Los Angeles Area' =>       '557a46dcd83594d1231fd6cb',
                  'Madison' =>                '557a47d6d83594cf231fd6c8',
                  'New Haven Area' =>         '555f6df3d83594216f9970ca',
                  'New York City Area' =>     '555f6be8d83594216f9970c9',
                  'Philadelphia Area' =>      '557a4a62d83594d1231fd6cc',
                  'San Francisco Bay Area' => '557a4652d83594d3231fd6c9',
                  'Seattle' =>                '557a4723d835941e321fd6c9',
                  'Washington DC Area' =>     '557a469bd835947b1f1fd6ca',
                );
                foreach ($hubs as $name=>$id) {
              ?>
                <a href="hub.php?id=<?php echo $id; ?>">
                  <input type="button" value="<?php echo $name; ?>" style="margin: 0.1em 0;" />
                </a>
              <?php
                }
              ?>

              <br /><br />
              <big>&mdash; OR &mdash;</big>
              <br /><br />
            </div>

            <?php if (vget('myhub')) { ?>
                  <input id="switchhub" type="button" value="Switch to another city" />
                  <style>
                    #cityform {
                      display: none;
                    }
                  </style>
                  <script>
                    $('#switchhub').click(function () {
                      $('#cityform').show();
                      $(this).hide();
                    });
                  </script>
                </div>
              </div>
            <?php } ?>

            <?php vnotice(); ?>
            <?php if (!vget('signedup')) { ?>
              <form id="cityform" method="post">
                <div class="whitetext">Where are you this summer?</div>
                <div class="form-slider">
                  <label for="city">(eg. New York City, Boston, San Francisco)</label>
                  <input type="text" id="city" name="city" required />
                </div>
                <input type="submit" name="signup" value="Sign up now" />
              </form>
            <?php } ?>
        <?php
          } else {
            echo vlinkto('<input type="button" class="button" value="Login or register to sign up for the social hubs!" />', $GLOBALS['dirpre'].'../register');
          }
        ?>
      </div>
    </div>
  </div>
  <div class="arrow-down"></div>
</panel>
<panel class="why">
  <div class="content">
    <headline style="color: #035d75;">Why Join the Social Hub?</headline>
    <form style="font-size: 1em; margin-top: -20px; margin-bottom: 20px;">
      Getting a good internship doesn't guarantee a good summer. Meet other students working in your city and have fun with them! Here are the main features:
    </form>
    <table class="whys"><tr>
      <td class="whycell"><incell>
        <div class="whyimg whyimg1">
        </div>
        <headline>Hubs</headline>
        Find out who's going to be where you are this summer &mdash; don't go through your summer alone.
      </incell></td>
      <td class="whycell"><incell>
        <div class="whyimg whyimg2">
        </div>
        <headline>Forums</headline>
        Socialize and connect with your fellow students &mdash; get info on the best places to eat or just chat!
      </incell></td>
      <td class="whycell"><incell>
        <div class="whyimg whyimg3">
        </div>
        <headline>Meetups</headline>
        Take the conversations face-to-face by scheduling meetups through our streamlined meetup organizer!
      </incell></td>
    </tr></table>
  </div>
</panel>
<panel class="backedby">
  <div class="content" style="position: relative;">
    <div class="backedtext">
      <div class="line2">Sign up to get more information</div>
      <input type="button" class="signup" value="Sign up now" />
    </div>
  </div>
</panel>
