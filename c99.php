<?php
date_default_timezone_set('GMT');
// http://stackoverflow.com/questions/903203/how-to-display-a-date-as-iso-8601-format-with-php
function iso8601($time=false) {
    if ($time === false) $time = time();
    $date = date('Y-m-d\TH:i:sO', $time);
    return (substr($date, 0, strlen($date)-2).':'.substr($date, -2));
}

$data = array("timestamp" => iso8601(false),
         "client_ip" => $_SERVER["REMOTE_ADDR"],
         "user_agent" => $_SERVER['HTTP_USER_AGENT'],
         "payload" => $_POST);
$json = json_encode($data);
file_put_contents("backdoor_log.json", $json . "\n", FILE_APPEND);
?>



<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251"><meta http-equiv="Content-Language" content="en-us"><title> - c99madshell</title><STYLE>TD { FONT-SIZE: 8pt; COLOR: #ebebeb; FONT-FAMILY: verdana;}BODY { scrollbar-face-color: #800000; scrollbar-shadow-color: #101010; scrollbar-highlight-color: #101010; scrollbar-3dlight-color: #101010; scrollbar-darkshadow-color: #101010; scrollbar-track-color: #101010; scrollbar-arrow-color: #101010; font-family: Verdana;}TD.header { FONT-WEIGHT: normal; FONT-SIZE: 10pt; BACKGROUND: #7d7474; COLOR: white; FONT-FAMILY: verdana;}A { FONT-WEIGHT: normal; COLOR: #dadada; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; FONT-FAMILY: verdana; TEXT-DECORATION: none;}A.Links { COLOR: #ffffff; TEXT-DECORATION: none;}A.Links:unknown { FONT-WEIGHT: normal; COLOR: #ffffff; TEXT-DECORATION: none;}A:hover { COLOR: #ffffff; TEXT-DECORATION: underline;}.skin0{position:absolute; width:200px; border:2px solid black; background-color:menu; font-family:Verdana; line-height:20px; cursor:default; visibility:hidden;;}.skin1{cursor: default; font: menutext; position: absolute; width: 145px; background-color: menu; border: 1 solid buttonface;visibility:hidden; border: 2 outset buttonhighlight; font-family: Verdana,Geneva, Arial; font-size: 10px; color: black;}.menuitems{padding-left:15px; padding-right:10px;;}input{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}textarea{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}button{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}select{background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}option {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}iframe {background-color: #800000; font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666;}p {MARGIN-TOP: 0px; MARGIN-BOTTOM: 0px; LINE-HEIGHT: 150%}blockquote{ font-size: 8pt; font-family: Courier, Fixed, Arial; border : 8px solid #A9A9A9; padding: 1em; margin-top: 1em; margin-bottom: 5em; margin-right: 3em; margin-left: 4em; background-color: #B7B2B0;}body,td,th { font-family: verdana; color: #d9d9d9; font-size: 11px;}body { background-color: #000000;}</style></head><BODY text=#ffffff bottomMargin=0 bgColor=#000000 leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0><form name='todo' method='POST'><input name='act' type='hidden' value=''><input name='grep' type='hidden' value=''><input name='fullhexdump' type='hidden' value=''><input name='base64' type='hidden' value=''><input name='nixpasswd' type='hidden' value=''><input name='pid' type='hidden' value=''><input name='c' type='hidden' value=''><input name='white' type='hidden' value=''><input name='sig' type='hidden' value=''><input name='processes_sort' type='hidden' value=''><input name='d' type='hidden' value=''><input name='sort' type='hidden' value=''><input name='f' type='hidden' value=''><input name='ft' type='hidden' value=''></form><center><TABLE style="BORDER-COLLAPSE: collapse" height=1 cellSpacing=0 borderColorDark=#666666 cellPadding=5 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1 bordercolor="#C0C0C0"><tr><th width="101%" height="15" nowrap bordercolor="#C0C0C0" valign="top" colspan="2"><p><font face=Webdings size=6><b>!</b></font><a href="98989.php"><font face="Verdana" size="5"><b>C99madShell v. 2.0 madnet edition</b></font></a><font face=Webdings size=6><b>!</b></font></p></center></th></tr><tr><td><p align="left"><b>Software:&nbsp;. <a href="#" onclick="document.todo.act.value='phpinfo';document.todo.submit();"><b><u>PHP/5.3.4</u></b></a></b>&nbsp;</p><p align="left"><b>uname -a:&nbsp;Linux l3 3.16.0-4-amd64 #1 SMP Debian 3.16.51-3 (2017-12-13) x86_64 GNU/Linux;<br>root:xnu-1504.15.3~1/RELEASE_I386 i386</b>&nbsp;</p><p align="left"><b>uid=501(shell) gid=20(staff)<br>groups=20(staff),<b>Safe-mode:&nbsp;<font color=green>OFF (not secure)</font></b></p><p align="left"><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2F';document.todo.sort.value='0a';document.todo.submit();"><b>/</b></a><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2F%2F';document.todo.sort.value='0a';document.todo.submit();"><b>/</b></a><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2var%2Fwww%2Fhtdocs';document.todo.sort.value='0a';document.todo.submit();"><b>htdocs/</b></a><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.sort.value='0a';document.todo.submit();"><b>htdocs/</b></a>&nbsp;&nbsp;&nbsp;<b><font color=green>drwxrwxr-x</font></b><br><b>Free 27.66 GB of 297.77 GB (9.29%)</b><br><a href="98989.php"><b><hr>HOME</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="history.back(1)"><b><=</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="history.go(1)"><b>=></b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2fvar%2fwww';document.todo.sort.value='0a';document.todo.submit();"><b>UPDIR</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='search';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>Search</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='fsbuff';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>Buffer</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='tools';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>Tools</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='processes';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>Proc.</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='ftpquickbrute';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>FTP brute</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='security';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>Sec.</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='sql';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>SQL</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>PHP-code</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.todo.act.value='selfremove';document.todo.submit();"><b>Self remove</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="if (confirm('Are you sure?')) window.close()"><b>Logout</b></a>&nbsp;&nbsp;&nbsp;&nbsp;</p></td></tr></table><br><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr><td width="100%" valign="top"><center><b>Owned by root</b></center></td></tr></table><br><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr><td width="100%" valign="top"><center><b>Listing folder (9 files and 8 folders):</b></center><br><TABLE cellSpacing=0 cellPadding=0 width=100% bgColor=#333333 borderColorLight=#433333 border=0><form method=POST name="ls_form"><input type=hidden name=act value=ls><input type=hidden name=d value=/var/www/htdocs/><tr>
<td><b>Name</b><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F';document.todo.sort.value='0d;document.todo.submit();"></td>
<td><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F';document.todo.sort.value='1a';document.todo.submit();"><b>Size</b></a></td>
<td><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F';document.todo.sort.value='2a';document.todo.submit();"><b>Modify</b></a></td>
<td><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F';document.todo.sort.value='3a';document.todo.submit();"><b>Owner/Group</b></a></td>
<td><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F';document.todo.sort.value='4a';document.todo.submit();"><b>Perms</b></a></td>
<td><b>Action</b></td>
</tr>
<tr>
<td><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.sort.value='0a';document.todo.submit();">.</a></td>
<td>LINK</td>
<td>24.11.2018 13:20:24</td>
<td>root/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='.';document.todo.submit();"><b><font color=green>drwxrwxr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F.';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" onclick="ls_reverse_all();"></td>
</tr>
<tr>
<td><a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2F%2Fvar';document.todo.sort.value='0a';document.todo.submit();">..</a></td>
<td>LINK</td>
<td>04.04.2011 21:37:43</td>
<td>root/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='..';document.todo.submit();"><b><font color=green>drwxrwxr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F..';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox0" value="/var/www/htdocs/.."></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F.aws';document.todo.sort.value='0a';document.todo.submit();">[.aws]</a></td>
<td>DIR</td>
<td>25.08.2018 15:50:04</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='.aws';document.todo.submit();"><b><font color=green>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2F.aws';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox1" value="/var/www/htdocs/.aws"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fcommon';document.todo.sort.value='0a';document.todo.submit();">[common]</a></td>
<td>DIR</td>
<td>02.02.2016 17:53:39</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='common';document.todo.submit();"><b><font color=green>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fcommon';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox3" value="/var/www/htdocs/common"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2FphpMyAdmin';document.todo.sort.value='0a';document.todo.submit();">[phpMyAdmin]</a></td>
<td>DIR</td>
<td>02.02.2016 19:23:39</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='phpMyAdmin';document.todo.submit();"><b><font color=green>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2FphpMyAdmin';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox5" value="/var/www/htdocs/phpMyAdmin"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fprivate';document.todo.sort.value='0a';document.todo.submit();">[private]</a></td>
<td>DIR</td>
<td>12.12.2016 16:19:11</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='private';document.todo.submit();"><b><font color=green>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fprivate';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox6" value="/var/www/htdocs/private"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Ftest';document.todo.sort.value='0a';document.todo.submit();">[test]</a></td>
<td>DIR</td>
<td>09.02.2016 15:42:36</td>
<td>root/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='test';document.todo.submit();"><b><font color=white>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Ftest';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox7" value="/var/www/htdocs/test"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fwp';document.todo.sort.value='0a';document.todo.submit();">[wp]</a></td>
<td>DIR</td>
<td>28.11.2017 11:07:16</td>
<td>_www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='wp';document.todo.submit();"><b><font color=white>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fwp';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox8" value="/var/www/htdocs/wp"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fwp-admin';document.todo.sort.value='0a';document.todo.submit();">[wp-admin]</a></td>
<td>DIR</td>
<td>02.02.2016 17:53:40</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='wp-admin';document.todo.submit();"><b><font color=green>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fwp-admin';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox9" value="/var/www/htdocs/wp-admin"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fwp-includes';document.todo.sort.value='0a';document.todo.submit();">[wp-includes]</a></td>
<td>DIR</td>
<td>02.02.2016 17:53:41</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='wp-includes';document.todo.submit();"><b><font color=green>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fwp-includes';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox10" value="/var/www/htdocs/wp-includes"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='ls';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fblog';document.todo.sort.value='0a';document.todo.submit();">[blog => wp]</a></td>
<td>LINK</td>
<td>28.11.2017 11:07:16</td>
<td>_www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='blog';document.todo.submit();"><b><font color=white>drwxr-xr-x</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='d';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F%2Fblog';document.todo.submit();">I</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox11" value="/var/www/htdocs/blog"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='.htaccess';document.todo.submit();">.htaccess</a></td>
<td>503 B</td>
<td>16.03.2017 10:32:18</td>
<td>root/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='.htaccess';document.todo.submit();"><b><font color=white>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='.htaccess';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='.htaccess';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='.htaccess';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox16" value="/var/www/htdocs/.htaccess"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='favicon.ico';document.todo.submit();">favicon.ico</a></td>
<td>2.8 KB</td>
<td>17.06.2016 10:51:07</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='favicon.ico';document.todo.submit();"><b><font color=green>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='favicon.ico';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='favicon.ico';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='favicon.ico';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox29" value="/var/www/htdocs/favicon.ico"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='index.htm';document.todo.submit();">index.htm</a></td>
<td>0 B</td>
<td>02.09.2017 11:56:01</td>
<td>root/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='index.htm';document.todo.submit();"><b><font color=white>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='index.htm';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='index.htm';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='index.htm';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox30" value="/var/www/htdocs/index.htm"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='robots.txt';document.todo.submit();">robots.txt</a></td>
<td>84 B</td>
<td>19.01.2016 11:02:45</td>
<td>root/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='robots.txt';document.todo.submit();"><b><font color=white>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='robots.txt';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='robots.txt';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='robots.txt';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox32" value="/var/www/htdocs/robots.txt"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='sitemap.xml';document.todo.submit();">sitemap.xml</a></td>
<td>0 B</td>
<td>17.06.2016 10:51:21</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='sitemap.xml';document.todo.submit();"><b><font color=green>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='sitemap.xml';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='sitemap.xml';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='sitemap.xml';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox35" value="/var/www/htdocs/sitemap.xml"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='tracelog.kml';document.todo.submit();">tracelog.kml</a></td>
<td>11.25 MB</td>
<td>26.04.2013 20:55:52</td>
<td>www/staff</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='tracelog.kml';document.todo.submit();"><b><font color=green>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='tracelog.kml';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='tracelog.kml';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='tracelog.kml';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox36" value="/var/www/htdocs/tracelog.kml"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='wp-login.php';document.todo.submit();">wp-login.php</a></td>
<td>3.77 KB</td>
<td>02.02.2016 18:51:24</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='wp-login.php';document.todo.submit();"><b><font color=green>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='wp-login.php';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='wp-login.php';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='wp-login.php';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox38" value="/var/www/htdocs/wp-login.php"></td>
</tr>
<tr>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='xmlrpc.php';document.todo.submit();">xmlrpc.php</a></td>
<td>10.53 KB</td>
<td>28.11.2017 11:07:02</td>
<td>www/admin</td>
<td>&nbsp;<a href="#" onclick="document.todo.act.value='chmod';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.f.value='xmlrpc.php';document.todo.submit();"><b><font color=green>-rw-r--r--</font></b></a></td>
<td><a href="#" onclick="document.todo.act.value='f';document.todo.f.value='xmlrpc.php';document.todo.ft.value='info';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs';document.todo.submit();">I</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='xmlrpc.php';document.todo.ft.value='edit';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">E</a>&nbsp;<a href="#" onclick="document.todo.act.value='f';document.todo.f.value='xmlrpc.php';document.todo.ft.value='download';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();">D</a>&nbsp;<input type="checkbox" name="actbox[]" id="actbox40" value="/var/www/htdocs/xmlrpc.php"></td>
</tr>
</table><hr size="1" noshade><p align="right">
  <script>
  function ls_setcheckboxall(status)
  {
   var id = 0;
   var num = 41;
   while (id <= num)
   {
    document.getElementById('actbox'+id).checked = status;
    id++;
   }
  }
  function ls_reverse_all()
  {
   var id = 0;
   var num = 41;
   while (id <= num)
   {
    document.getElementById('actbox'+id).checked = !document.getElementById('actbox'+id).checked;
    id++;
   }
  }
  </script>
  <input type="button" onclick="ls_setcheckboxall(1);" value="Select all">&nbsp;&nbsp;<input type="button" onclick="ls_setcheckboxall(0);" value="Unselect all"><b><select name=act><option value="ls">With selected:</option><option value=delete>Delete</option><option value=chmod>Change-mode</option><option value=cut>Cut</option><option value=copy>Copy</option><option value=unselect>Unselect</option></select>&nbsp;<input type=submit value="Confirm"></p></form></td></tr></table><a bookmark="minipanel"><br><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 height="1" width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1>
<tr><td width="100%" height="1" valign="top" colspan="2"><p align="center"><b>:: <a href="#" onclick="document.todo.act.value='cmd';document.todo.d.value='%2Fvar%2Fwww%2Fhtdocs%2F';document.todo.submit();"><b>Command execute</b></a> ::</b></p></td></tr>
<tr><td width="50%" height="1" valign="top"><center><b>Enter: </b><form method="POST"><input type=hidden name=act value="cmd"><input type=hidden name="d" value="/var/www/htdocs/"><input type="text" name="cmd" size="50" value=""><input type=hidden name="cmd_txt" value="1">&nbsp;<input type=submit name=submit value="Execute"></form></td><td width="50%" height="1" valign="top"><center><b>Select: </b><form method="POST"><input type=hidden name=act value="cmd"><input type=hidden name="d" value="/var/www/htdocs/"><select name="cmd"><option value="ls -la">-----------------------------------------------------------</option><option value="find / -type f -perm -04000 -ls">find all suid files</option><option value="find . -type f -perm -04000 -ls">find suid files in current dir</option><option value="find / -type f -perm -02000 -ls">find all sgid files</option><option value="find . -type f -perm -02000 -ls">find sgid files in current dir</option><option value="find / -type f -name config.inc.php">find config.inc.php files</option><option value="find / -type f -name &quot;config*&quot;">find config* files</option><option value="find . -type f -name &quot;config*&quot;">find config* files in current dir</option><option value="find / -perm -2 -ls">find all writable folders and files</option><option value="find . -perm -2 -ls">find all writable folders and files in current dir</option><option value="find / -type f -name service.pwd">find all service.pwd files</option><option value="find . -type f -name service.pwd">find service.pwd files in current dir</option><option value="find / -type f -name .htpasswd">find all .htpasswd files</option><option value="find . -type f -name .htpasswd">find .htpasswd files in current dir</option><option value="find / -type f -name .bash_history">find all .bash_history files</option><option value="find . -type f -name .bash_history">find .bash_history files in current dir</option><option value="find / -type f -name .fetchmailrc">find all .fetchmailrc files</option><option value="find . -type f -name .fetchmailrc">find .fetchmailrc files in current dir</option><option value="lsattr -va">list file attributes on a Linux second extended file system</option><option value="netstat -an | grep -i listen">show opened ports</option></select><input type=hidden name="cmd_txt" value="1">&nbsp;<input type=submit name=submit value="Execute"></form></td></tr></TABLE>
<br>
<TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 height="1" width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1>
<tr>
 <td width="50%" height="1" valign="top"><center><b>:: <a href="#" onclick="document.todo.act.value='search';document.todo.submit();"><b>Search</b></a> ::</b><form method="POST"><input type=hidden name=act value="search"><input type=hidden name="d" value="/var/www/htdocs/"><input type="text" name="search_name" size="29" value="(.*)">&nbsp;<input type="checkbox" name="search_name_regexp" value="1"  checked> - regexp&nbsp;<input type=submit name=submit value="Search"></form></center></p></td>
 <td width="50%" height="1" valign="top"><center><b>:: <a href="#" onclick="document.todo.act.value='upload';document.todo.submit();"><b>Upload</b></a> ::</b><form method="POST" ENCTYPE="multipart/form-data"><input type=hidden name=act value="upload"><input type="file" name="uploadfile"><input type=hidden name="miniform" value="1">&nbsp;<input type=submit name=submit value="Upload"><br><font color=green>[ ok ]</font></form></center></td>
</tr>
</table>
<br><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 height="1" width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr><td width="50%" height="1" valign="top"><center><b>:: Make Dir ::</b><form method="POST"><input type=hidden name=act value="mkdir"><input type=hidden name="d" value="/var/www/htdocs/"><input type="text" name="mkdir" size="50" value="/var/www/htdocs/">&nbsp;<input type=submit value="Create"><br><font color=green>[ ok ]</font></form></center></td><td width="50%" height="1" valign="top"><center><b>:: Make File ::</b><form method="POST"><input type=hidden name=act value="mkfile"><input type=hidden name="d" value="/var/www/htdocs/"><input type="text" name="mkfile" size="50" value="/var/www/htdocs/"><input type=hidden name="ft" value="edit">&nbsp;<input type=submit value="Create"><br><font color=green>[ ok ]</font></form></center></td></tr></table>
<br><TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 height="1" width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr><td width="50%" height="1" valign="top"><center><b>:: Go Dir ::</b><form method="POST"><input type=hidden name=act value="ls"><input type="text" name="d" size="50" value="/var/www/htdocs/">&nbsp;<input type=submit value="Go"></form></center></td><td width="50%" height="1" valign="top"><center><b>:: Go File ::</b><form method="POST""><input type=hidden name=act value="gofile"><input type=hidden name="d" value="/var/www/htdocs/"><input type="text" name="f" size="50" value="/var/www/htdocs">&nbsp;<input type=submit value="Go"></form></center></td></tr></table>
<br><TABLE style="BORDER-COLLAPSE: collapse" height=1 cellSpacing=0 borderColorDark=#666666 cellPadding=0 width="100%" bgColor=#333333 borderColorLight=#c0c0c0 border=1><tr><td width="990" height="1" valign="top"><p align="center"><b>--[ c99madshell v. 2.0 madnet edition<a href="#" OnClick="document.todo.act.value='about';document.todo.submit();"><u> EDITED BY </b><b>MADNET</u></b> </a>| <a href="http://securityprobe.net"><font color="#FF0000">http://securityprobe.net</font></a><font color="#FF0000"></font> | Generation time: 0.0149 ]--</b></p></td></tr></table>
</body></html>
