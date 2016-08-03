<div class="col-sm-6 top-info"></div>
<div class="col-sm-2 top-info">
    
	<br>
    <div class="dropdown">
    <a class=" dropdown-toggle"  data-toggle="dropdown"><span class="hidden-xs navbar_account"><i class="fa fa-sign-in"></i>Sign in</span>
    </a><br>
    <ul class="dropdown-menu" id="sign-in-dd">
	 <form method="post" action=<?php echo "'".base_url().'/home/Account/sign_in'."'";?>>
      <li>E-mail<input type="email" name="email_login" /></li>
      <li>Password<input type="password" name="password_login" /></li>
	  <li><input type="submit" value="Submit" href="application/views/userprofil"></li>
	 </form>
    </ul>
	</div>

    
</div>

<div class="col-sm-1 top-info">
<br>
	
	<a href="<?php echo base_url(); ?>sign_up"><span class="hidden-xs navbar_account"><i class="fa fa-user"></i>Sign up</span></a>
</div>