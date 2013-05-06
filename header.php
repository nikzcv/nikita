header#pageheader nav {
display:none;
}
header#pageheader.fixed {
background: rgba(255, 255, 255, 0.97);
-webkit-box-shadow:0px 0px 8px rgba(0, 0, 0, 0.2);
-moz-box-shadow:0px 0px 8px rgba(0, 0, 0, 0.2);
box-shadow:0px 0px 8px rgba(0, 0, 0, 0.2);
position: fixed;
top: -5px;
left: 0;
width: 100%;
padding:20px 3%;
z-index:9999;
display:none;
}
<?php if(of_get_option('customtypography') == '1') { ?>
<?php if(of_get_option('headingfontlink') != '') { ?>
<?php echo stripslashes(html_entity_decode(of_get_option('headingfontlink')));?>
<?php } ?>
<?php if(of_get_option('bodyfontlink') != '') { ?>
<?php echo stripslashes(html_entity_decode(of_get_option('bodyfontlink')));?>
<?php } ?>
<?php if(of_get_option('logofontlink') != '') { ?>
<?php echo stripslashes(html_entity_decode(of_get_option('logofontlink')));?>
<?php } ?>
<?php load_template( get_template_directory() . '/custom.typography.css.php' );?>
<?php } ?>
