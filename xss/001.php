<html>
<head>
    <title>Free Porn Videos &amp; Sex Movies - Porno, XXX, Porn Tube and Pussy Porn</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
    <tr>
        <td align="center" valign="middle">
            <img src="<?php echo Pornhub\Cdn\Url::getStaticBaseUrl('images'); ?>loading-loop.gif" alt="Loading" width="54" height="55">
        </td>
    </tr>
</table>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
        loadXMLDoc();
    });

    function deleteCookieAdvanced(name, path, domain) {
        if (getCookieAdvanced(name)) {
            var domainName = '<?php echo $cookie_domain; ?>';
            document.cookie = name + '=' + (path ? ';path=' + path : ';path=/') + (domain ? ';domain=' + domain : ';domain=' + domainName) + ';expires=Thu, 01-Jan-1970 00:00:01 GMT';
        }
    }

    function getCookieAdvanced(check_name) {
        var a_all_cookies = document.cookie.split(';');
        var a_temp_cookie = '';
        var cookie_name = '';
        var cookie_value = '';
        var b_cookie_found = false;
        for (i = 0; i < a_all_cookies.length; i++) {
            a_temp_cookie = a_all_cookies[i].split('=');
            cookie_name = a_temp_cookie[0].replace(/^\s+|\s+$/g, '');
            if (cookie_name == check_name) {
                b_cookie_found = true;
                if (a_temp_cookie.length > 1) {
                    cookie_value = unescape(a_temp_cookie[1].replace(/^\s+|\s+$/g, ''));
                }
                return cookie_value;
                break;
            }
            a_temp_cookie = null;
            cookie_name = '';
        }
        if (!b_cookie_found) {
            return null;
        }
    }


    function loadXMLDoc() {

        var xhr = new XMLHttpRequest();
        xhr.open('GET', "<?php echo $verification_url; ?>");
        xhr.withCredentials = true;
        xhr.send();

        xhr.onreadystatechange = function() {
            var DONE = 4; // readyState 4 means the request is done.
            var OK = 200; // status 200 is a successful return.
            if (xhr.readyState === DONE) {
                if (xhr.status === OK) {
                    var myArr = JSON.parse(xhr.responseText);
                    if (myArr.success == 1) {
                        document.location.href = '<?php echo $premium_url; ?>';
                    } else {
                        deleteCookieAdvanced('premium_redirect');
                        document.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>';
                    }
                }
            }
        }
    }

</script>

</body>
</html>