<head>
        <title>Finance NeuroMama</title>
        <meta charset="UTF-8" />
        
        <!--[if lt IE 9]>
        <script type="text/javascript" src="http://finance.neuromama.com/wp-content/themes/business-news/layout/plugins/html5.js"></script>
        <![endif]-->
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://finance.neuromama.com/xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://finance.neuromama.com/wp-includes/wlwmanifest.xml" /> 
        <!-- CSS -->
        <link rel='stylesheet' id='style_default-css'  href='css/styles.css' type='text/css' media='screen' />
        <link rel='stylesheet' id='style_default-css'  href='wp-content/themes/business-news/style.css' type='text/css' media='screen' />
        <!-- Skitter Styles -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Orienta' rel='stylesheet' type='text/css'>
        <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- platinum seo pack 1.3.7 -->
        <meta name="robots" content="index,follow,finance,NeuroMama" />
        <link rel="canonical" href="http://finance.neuromama.com/" />
        <!-- /platinum one seo pack -->
        <link type="text/css" rel="stylesheet" href="calendar/examples/libraries/syntaxhighlighter/public/css/shCoreDefault.css">
        <script type="text/javascript" src="calendar/examples/public/javascript/jquery-1.10.1.js"></script>
        <script type="text/javascript" src="calendar/public/javascript/zebra_datepicker.js"></script>
        <script type="text/javascript" src="calendar/examples/public/javascript/core.js"></script>
        <!-- SCRIPTS -->
        <!-- Skitter JS -->
        <script type='text/javascript' language='javascript' src='wp-content/themes/skitter_js/jquery-1.6.3.min.js'></script>
        <script type='text/javascript' language='javascript' src='wp-content/themes/skitter_js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' language='javascript' src='wp-content/themes/skitter_js/jquery.animate-colors-min.js'></script>
        <script type='text/javascript' language='javascript' src='wp-content/themes/skitter_js/jquery.skitter.min.js'></script>
        <script type='text/javascript' language='javascript' src='wp-content/themes/skitter_js/dos.js'></script>

        <!-- Init Skitter -->

        <script type='text/javascript' language='javascript'>
            $(document).ready(function() {
                $('.box').hide();
                $('.fcattribution').hide();
                $('.ad_sponsor').hide();
                $('.poweredby').hide();
                $('.fc-getquote1').hide();
                $('.fcadunithide').hide();
                $('.box_skitter_large').skitter({
                    theme: 'clean',
                    numbers_align: 'center',
                    progressbar: true, 
                    dots: false, 
                    preview: true
                });
                
            });
        </script>
        <script type="text/javascript">
            function getXMLTagName(a_doc, a_attribute) {
                var sep = '</' + a_attribute + '>';
                var arraytags = a_doc.toString().split('</' + a_attribute + '>');
                arraytags.length = arraytags.length - 1;
                for (var i = 0; i < arraytags.length; i++) {
                    arraytags[i] = arraytags[i] + sep;
                    //alert(arraytags[i]);
                }
                return arraytags;
            }

            function getXMLFirstNode(a_doc, a_attribute) {
                return getXMLNodeValue(a_doc, a_attribute);
            }
            function getXMLNodeValue2(a_node, a_attribute,a_attribute2) {
                var theXML = a_node.toString();
                var aStr = a_attribute.toString();
                var aStr2 = a_attribute2.toString();
                var sStart = '<' + aStr + '>';
                var sEnd = '</' + aStr2 + '>';
                var index1 = -1;
                var index2 = 0;
                index1 = theXML.indexOf(sStart);
                index2 = theXML.indexOf(sEnd, index1);
                if (index1 != -1 && index2 > index1) {
                    output = theXML.substring(index1 + sStart.length, index2);
                    return output; //OUTPUT IT PROPERLY.
                }
                else {
                    return undefined;
                }
            }
            function isValid(a_obj) {
                return (a_obj != undefined && a_obj != null);
            }
            function getXMLNodeValue(a_node, a_attribute) {
                var theXML = a_node.toString();
                var aStr = a_attribute.toString();
                var sStart = '<' + aStr + '>';
                var sEnd = '</' + aStr + '>';
                var index1 = -1;
                var index2 = 0;
                index1 = theXML.indexOf(sStart);
                index2 = theXML.indexOf(sEnd);
                if (index1 != -1 && index2 > index1) {
                    output = theXML.substring(index1 + sStart.length, index2);
                    return output; //OUTPUT IT PROPERLY.
                }
                else {
                    return undefined;
                }
            }
            var f_curFinishFunction = function(response) {
                //jQuery('#flashvideo').fadeIn('slow');
                jQuery('#summary').hide();
                var Details22 = document.getElementById('summary');
                Details22.innerHTML = "  <div id=\"summary\">   ";
                
                var Details1 = document.getElementById('result_query');
                Details1.innerHTML = getXMLNodeValue2(response, ('div id="result_query"'), ('div'));

                jQuery('#summary').fadeIn('slow');
            }
            var f_curFinishFunction2 = function(response) {
                //jQuery('#flashvideo').fadeIn('slow');
                jQuery('#summary').hide();
                var Details22 = document.getElementById('summary');
                Details22.innerHTML = getXMLNodeValue2(response, ('div id="result_query"'), ('div'));             
                
                jQuery('#summary').fadeIn('slow');
            }
            function getNewPage(page_url) {
                if(page_url.toString().indexOf("index.php") != -1){
                    //jQuery('#summary').hide();
                    ajax(page_url, '', f_curFinishFunction2);
                    //jQuery('#summary').fadeIn('slow');
                }
                else{
                    //jQuery('#summary').hide();
                    ajax(page_url, '', f_curFinishFunction);
                    //jQuery('#summary').fadeIn('slow');
                }
            }
            function ajax(url, vars, callbackFunction) {
    var request = undefined; //  new XMLHttpRequest();

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        request = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        request = new ActiveXObject("Microsoft.XMLHTTP");
    }



    request.open("GET", url, true);
    request.setRequestHeader("Content-Type",
                           "application/x-www-form-urlencoded");

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            if (request.responseText) {
                // alert(request.responseText);
                callbackFunction(request.responseText);
            }
        }
    };
    request.send(vars);
}
        </script>
    </head>