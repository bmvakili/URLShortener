PHP URL Shortener Script

  Pre-requisites
    Apache Web Server with mod_php and mod_auth

  Install
    Place all files in web server directory
    Edit .htaccess file to update location of htpassword file.
    Edit tconfig.php; update $url_base to your server's url.

  Verify
    Visit your server's url;
    Enter a url to shorten.
    Enter a tag.
    Press Enter.
    The url and tag should be generated.
    Visit the generated URL and it should redirect to the original URL.

