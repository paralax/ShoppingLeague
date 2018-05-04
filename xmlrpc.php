<?php
header('Content-Type: text/xml');

date_default_timezone_set('GMT');
// http://stackoverflow.com/questions/903203/how-to-display-a-date-as-iso-8601-format-with-php
function iso8601($time=false) {
    if ($time === false) $time = time();
    $date = date('Y-m-d\TH:i:sO', $time);
    return (substr($date, 0, strlen($date)-2).':'.substr($date, -2));
}

$xml = file_get_contents('php://input');
$rpcdata = new SimpleXMLElement($xml);

# log all methods called
$methodlogstr = iso8601(false) . " " . $_SERVER["REMOTE_ADDR"] . " method called: " . $rpcdata->methodName . " - " . $_SERVER['HTTP_USER_AGENT'] . "\n";
file_put_contents("/Library/WebServer/Documents/wp/xmlrpc_method.log", $methodlogstr, FILE_APPEND);

switch($rpcdata->methodName) {
    case 'test.method':
        $cmdname = $rpcdata->params->param[0]->value->string->__toString();
        $logstr = iso8601(false) . " " . $_SERVER["REMOTE_ADDR"] . " command injection attempt: " . $cmdname . " - " . $_SERVER['HTTP_USER_AGENT'] . "\n";
        file_put_contents("/Library/WebServer/Documents/wp/xmlrpccmdinjection.log", $logstr, FILE_APPEND);
        break;
    case 'wp.getUsersBlogs': 
        $logname = $rpcdata->params->param[0]->value->string->__toString();
        $password = $rpcdata->params->param[1]->value->string->__toString();
        $logstr = iso8601(false) . " " . $_SERVER["REMOTE_ADDR"] . " login attempt: " . $logname . "/" . $password . " - " . $_SERVER['HTTP_USER_AGENT'] . "\n";
        file_put_contents("/Library/WebServer/Documents/wp/wordpot.log", $logstr, FILE_APPEND);
	print("<?xml version=\"1.0\"?>
	<methodResponse>
	    <fault>
	        <value>
	            <struct>
	                <member>
	                    <name>faultCode</name>
	                    <value><int>403</int></value>
	                </member>
	                <member>
	                    <name>faultString</name>
	                    <value><string>Incorrect username or password</string></value>
	                </member>
	            </struct>
	        </value>
	    </fault>        
	</methodResponse>");
        break;
    case 'pingback.ping':
        $site = $rpcdata->params->param->value->string[0]->__toString();
        $logstr = iso8601(false) . " " . $_SERVER["REMOTE_ADDR"] . " ddos attempt: " . $site . " - " . $_SERVER['HTTP_USER_AGENT'] . "\n";
        file_put_contents("/Library/WebServer/Documents/wp/ddos.log", $logstr, FILE_APPEND);
        break;            
    case 'system.listMethods':
        print("<?xml version=\"1.0\"?>
	<methodResponse>
	    <params>
	        <param>
	            <value>
	                <array><data>
	                        <value>
	                            <string>system.multicall</string>
	                        </value>
	                        <value>
	                            <string>system.listMethods</string>
	                        </value>
	                        <value>
	                            <string>system.getCapabilities</string>
	                        </value>
	                        <value>
	                            <string>demo.multiplyTwoNumbers</string>
	                        </value>
	                        <value>
	                            <string>demo.addTwoNumbers</string>
	                        </value>
	                        <value>
	                            <string>demo.sayHello</string>
	                        </value>
	                        <value>
	                            <string>pingback.extensions.getPingbacks</string>
	                        </value>
	                        <value>
	                            <string>pingback.ping</string>
	                        </value>
	                        <value>
	                            <string>mt.publishPost</string>
	                        </value>
	                        <value>
	                            <string>mt.getTrackbackPings</string>
	                        </value>
	                        <value>
	                            <string>mt.supportedTextFilters</string>
	                        </value>
	                        <value>
	                            <string>mt.supportedMethods</string>
	                        </value>
	                        <value>
	                            <string>mt.setPostCategories</string>
	                        </value>
	                        <value>
	                            <string>mt.getPostCategories</string>
	                        </value>
	                        <value>
	                            <string>mt.getRecentPostTitles</string>
	                        </value>
	                        <value>
	                            <string>mt.getCategoryList</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.getUsersBlogs</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.setTemplate</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.getTemplate</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.deletePost</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.newMediaObject</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.getCategories</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.getRecentPosts</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.getPost</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.editPost</string>
	                        </value>
	                        <value>
	                            <string>metaWeblog.newPost</string>
	                        </value>
	                        <value>
	                            <string>blogger.deletePost</string>
	                        </value>
	                        <value>
	                            <string>blogger.editPost</string>
	                        </value>
	                        <value>
	                            <string>blogger.newPost</string>
	                        </value>
	                        <value>
	                            <string>blogger.setTemplate</string>
	                        </value>
	                        <value>
	                            <string>blogger.getTemplate</string>
	                        </value>
	                        <value>
	                            <string>blogger.getRecentPosts</string>
	                        </value>
	                        <value>
	                            <string>blogger.getPost</string>
	                        </value>
	                        <value>
	                            <string>blogger.getUserInfo</string>
	                        </value>
	                        <value>
	                            <string>blogger.getUsersBlogs</string>
	                        </value>
	                        <value>
	                            <string>wp.getCommentStatusList</string>
	                        </value>
	                        <value>
	                            <string>wp.newComment</string>
	                        </value>
	                        <value>
	                            <string>wp.editComment</string>
	                        </value>
	                        <value>
	                            <string>wp.deleteComment</string>
	                        </value>
	                        <value>
	                            <string>wp.getComments</string>
	                        </value>
	                        <value>
	                            <string>wp.getComment</string>
	                        </value>
	                        <value>
	                            <string>wp.setOptions</string>
	                        </value>
	                        <value>
	                            <string>wp.getOptions</string>
	                        </value>
	                        <value>
	                            <string>wp.getPageTemplates</string>
	                        </value>
	                        <value>
	                            <string>wp.getPageStatusList</string>
	                        </value>
	                        <value>
	                            <string>wp.getPostStatusList</string>
	                        </value>
	                        <value>
	                            <string>wp.getCommentCount</string>
	                        </value>
	                        <value>
	                            <string>wp.uploadFile</string>
	                        </value>
	                        <value>
	                            <string>wp.suggestCategories</string>
	                        </value>
	                        <value>
	                            <string>wp.deleteCategory</string>
	                        </value>
	                        <value>
	                            <string>wp.newCategory</string>
	                        </value>
	                        <value>
	                            <string>wp.getTags</string>
	                        </value>
	                        <value>
	                            <string>wp.getCategories</string>
	                        </value>
	                        <value>
	                            <string>wp.getAuthors</string>
	                        </value>
	                        <value>
	                            <string>wp.getPageList</string>
	                        </value>
	                        <value>
	                            <string>wp.editPage</string>
	                        </value>
	                        <value>
	                            <string>wp.deletePage</string>
	                        </value>
	                        <value>
	                            <string>wp.newPage</string>
	                        </value>
	                        <value>
	                            <string>wp.getPages</string>
	                        </value>
	                        <value>
	                            <string>wp.getPage</string>
	                        </value>
	                        <value>
	                            <string>wp.getUsersBlogs</string>
	                        </value>
	                </data></array>     
	            </value>
	        </param>
	    </params>
	</methodResponse>");
	break;
}


