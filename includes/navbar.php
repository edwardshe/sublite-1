<style>
  navbar {
    background: #000;
    border-bottom: 3px solid #ffd800;
    min-height: 50px;
    display: block;
    box-sizing: border-box;
    padding: 10px 20px;
    line-height: 1.5em;
    font-family: 'Oswald', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
  }
  navbar:after{
    clear: both;
    content: "";
    display: block;
  }
  logo {
    font-size: 1.5em;
    color: #ffd800;
    line-height: 30px;
    height: 30px;
  }
  options {
    float: right;
    font-size: 1.3em;
    padding-top: 10px;
    margin-bottom: -5px;
    min-height: 30px;
    box-sizing: border-box;
  }
  opt {
    margin-left: 40px;
    cursor: pointer;
    transition: all 0.1s ease-in-out;
    display: inline-block;
    color: #fff;
  }
  opt:hover {
    color: #ffd800;
  }
  opt.small {
    font-size: 0.5em;
  }
</style>

<navbar>
  <logo>SubLite</logo>
  <options>
    <a href="."><opt class="small">Employers' Page</opt></a>
    <a href="addjob.php"><opt>List Job</opt></a>
    <a href="editprofile.php"><opt>Edit Profile</opt></a>
    <a href="loginregister.php"><opt>Register/Log In</opt></a>
  </options>
</navbar>