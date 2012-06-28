

String.method('validUrl', function() {
        var pattern = new RegExp("(http|ftp|https)://[a-z0-9\-_]+(\.[a-z0-9\-_]+)+([a-z0-9\-\.,\?^=%&;:/~\+#]*[a-z0-9\-\?^=%&;/~\+#])?");
        if (!pattern.test(this)) {
            return false;
        } else {
            return true;
        }
    });