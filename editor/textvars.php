<?php
######################################## script ###
#                  _         _   ___ __   __ ____ #
#  ___ __ _ ___ __| |_  __ _| | |_  )  \ /  \__ / #
# (_-</ _` (_-</ _| ' \/ _` | |  / / () | () |_ \ #
# /__/\__,_/__/\__|_||_\__,_|_| /___\__/ \__/___/ #
#                                                 #
###################################################  
/*
  Ausgabe SUPER GLOBALS
  weil schreibfaul :-)
*/  
function var_out ($ar) { //$ar -> der Name des gewuenschten arrays ohne $
?>
    <table cellspacing="2" cellpadding="2">
    <tr><td class="tdNoCol"><strong>/* listet alle $<?php print $ar; ?> Inhalte auf: /* </strong></td>
    <td class="tdNoCol"></td></tr>
<?php
    global $$ar;
    if (is_array ($$ar)) {
        foreach($$ar as $key => $temp){
?>
            <tr><td nowrap>$<?php print $ar."['".$key."']"; ?></td>
            <td><b><?php print $temp; ?></b></td></tr>
<?php
        }
    }
?>
    </table><br><br>
<?php
}                                            
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>PHP-VARS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
td {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 13px;
    color: #333333;
    background-color: #FFFF99;
}
.tdNoCol {
    background-color: #FFFFFF;
}
-->
</style>
<style type="text/css">
<!--
a {
    color: #000000;
}
-->
</style>
</head>

<body>
<a name="top"></a>
<table width="100%" border="0" cellpadding="2" cellspacing="2" >
  <tr>
    <td class="tdNoCol">
    <a href="<?php print substr($_SERVER['PHP_SELF']."s",1); ?>">Quelltext</a> | <a href="http://www.saschal.ch">www.saschal.ch</a>
    </td>
  </tr>
  <tr>
    <td class="tdNoCol">&nbsp;</td>
  </tr>
</table>
<?php
    /* Ausgabe der Vars :: */
    var_out (_SERVER);
    var_out (_ENV);
?>
<table width="100%" border="0" cellpadding="2" cellspacing="2" >
  <tr>
    <td class="tdNoCol"><a href="#top">top</a></td>
  </tr>
</table>
</body>
</html>
