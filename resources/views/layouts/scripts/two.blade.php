
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '312563225523989',
                // autoLogAppEvents : true,
                status: true,
                cookie: true,
                xfbml: true,
                oauth: true,
                version: 'v11.0'
            });
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript">
        var __CurrentMainDomain__ = (function () {
        var hostnameArray = location.hostname.split('.');
        return "." + hostnameArray.slice(-2).join('.');
        })();
    </script>
