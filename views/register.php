<panel class="form">
  <div class="content">
    <headline>Register as a Recruiter!</headline>
    <form method="post">
      <div class="form-slider"><label for="firstname">First Name</label><input type="text" id="firstname" name="firstname" value="<?php vecho('firstname'); ?>" required /></div>
      <div class="form-slider"><label for="lastname">Last Name</label><input type="text" id="lastname" name="lastname" value="<?php vecho('lastname'); ?>" required /></div>
      <div class="form-slider"><label for="title">Job Title</label><input type="text" id="title" name="title" value="<?php vecho('title'); ?>" required /></div>
      <div class="form-slider"><label for="company">Company</label><input type="text" id="company" name="company" value="<?php vecho('company'); ?>" required /></div>
      <div class="form-slider"><label for="email">Email</label><input type="email" id="email" name="email" value="<?php vecho('email'); ?>" required /></div>
      <div class="form-slider"><label for="pass">Password (6 chars min)</label><input type="password" id="pass" name="pass" required pattern=".{6,}" /></div>
      <div class="form-slider"><label for="pass2">Confirm Password</label><input type="password" id="pass2" name="pass2" required pattern=".{6,}" /></div>
      <left><input type="checkbox" name="terms" id="terms" value="agree" required /> <label for="terms">I represent and warrant that I am employed by, or am an authorized agent of, the company on behalf of which I will create a company profile along with any job or internship postings. All information I provide will be accurate and not misleading. I understand that SubLite does not guarantee the effectiveness of finding a suitable candidate or make representations as to the amount of applications we will receive.</label></left>
      <br>
      <left><input type="checkbox" name="terms2" id="terms2" value="agree" required /> <label for="terms2">I have read, understand, and agree to be bound by the <a href="terms.php" style="color:#035d75">Terms of Service.</a></label></left>
      <?php vnotice(); ?>
      <input type="submit" name="register" value="Register" />
    </form>
  </div>
</panel>