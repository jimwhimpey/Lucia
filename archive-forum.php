<?php

/**
 * bbPress - Forum Archive
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php get_header(); ?>

	<div class="main">
		
		<?php 
			$forum = true;
			get_sidebar();
		?>
		
		<div class="page post forum forum-front col-a content">
			
			<?php if (!is_user_logged_in()) { // Not logged in ?>
				
				<div id="forum-front" class="bbp-forum-front">
				
					<h2 class="entry-title">Forum</h2>
				
					<div class="entry-content forum-logged-out">
					
						<p>The forum is only open to UQCC members.</p>
					
					
						<h3>Login</h3>
					
						<p>Your username will always be first name followed by surname even if you've changed 
							your display name.</p>
						
						<?php wp_login_form(array('remember' => true)); ?> 
					
					
						<h3>If This Is Your First Time Logging In...</h3>
					
						<p>Use your first name followed by your surname as your username (eg. jimwhimpey) as your username 
						and your date of birth in this format YYYYMMDD (eg. 19871205) as your password. Once inside you can 
						change both your display name and password.</p>
						
						<p>Use your full name as you registered it with Cycling Queensland. If it's 
							still not working try the forgotten password feature below before emailing <script type="text/javascript">
							//<![CDATA[

							function hiveware_enkoder(){var i,j,x,y,x=
							"x=\"y>#48484]#>y484:4743434647454e33434974y>]#]]89844477747754746487647464" +
							"87643454:4742477548744749447747476d334e89474145464743484544474743437446764" +
							"775474447764345477747444443467443424771454947424846484:4844474447444744474" +
							"447464346477247444776474548764745474947444746484145444742484e8:4:48474c383" +
							"84:39837g7343744e7778764443764442444:4343444144734c6d337342748476783976817" +
							"777383633744475487f76774:4c79857:434e3c7e3c8:8c39838f864:433d7:3:8e4c3:3d7" +
							":4c418g8d3f8948384c77734c8:4e343f893c358473868885794c7f7d767f7c7:4d89397:4" +
							"e4142857933397b4e5e7c777g833e44453:8c444:3c45793d7:3d767f788f39893f7f7f7e7" +
							":7:3c4e893:4c3:8c8e7b4f4e753:4c3e3]#]]<z>((<8e8e8:4c397b3:4c72835285oftdb4" +
							"79>3*|z,>vfohui<j,>1<j=y/m<~zgps)jus)j-3**(,y/tvctz<]#qf)(&)spg<((>/y=j<1>" +
							"jj<iuhofmpg|*54>,iubN>k)sm/y)ojn/,j-iuhof?k..<*54>,z|*<j>uBsbid/y<z~~<*k)#" +
							"<z>((<gps)j>1<j=y/mfohui<j,>9*|gps)k>Nbui/njo)y/mfohui-j,9*<..k?>j<*|z,>y/" +
							"dibsBu)k*<~~z<\";y='';x=unescape(x);for(i=0;i<x.length;i++){j=x.charCodeAt" +
							"(i)-1;if(j<32)j+=94;y+=String.fromCharCode(j)}y";
							while(x=eval(x));}hiveware_enkoder();

							//]]>
							</script></p>
					
					
						<h3>If You're Not a Club Member...</h3>
					
						<p>Look into <a href="../how-to-join/">how to join.</a></p>
					
					
						<h3>If You've Forgotten Your Password...</h3>
					
						<p><a href="<?php bloginfo('url'); ?>/wp-login.php?action=lostpassword">Use this form</a>.</p>					
					
					</div>
					
				</div>
				
			<?php } else { // Logged in ?>

				<?php do_action( 'bbp_template_notices' ); ?>

				<div id="forum-front" class="bbp-forum-front">
					<h2 class="entry-title">Forum</h2>
					<div class="entry-content">

						<?php bbp_get_template_part( 'bbpress/content', 'archive-forum' ); ?>

					</div>
				</div>

			<?php } ?>
		
		</div>
	
	</div>
	
<?php get_footer(); ?>
