#URL Shortener

##Pre-requisites
Apache Web Server with mod_php and mod_auth

##Install
Place all files in web server directory
Edit .htaccess file to update location of htpassword file.
Edit tconfig.php; update $url_base to your server's url.

##Verify
Visit your server's url;
Enter a url to shorten.
Enter a tag.
Press Enter.
The url and tag should be generated.
Visit the generated URL and it should redirect to the original URL.

##License
This library, *URL Shortener*, is free software ("Licensed
Software"); you can redistribute it and/or modify it under the terms of the [GNU
Lesser General Public License](http://www.gnu.org/licenses/lgpl-2.1.html) as
published by the Free Software Foundation; either version 2.1 of the License, or
(at your option) any later version.

This library is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; including but not limited to, the implied warranty of MERCHANTABILITY,
NONINFRINGEMENT, or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General
Public License for more details.

You should have received a copy of the [GNU Lesser General Public
License](http://www.gnu.org/licenses/lgpl-2.1.html) along with this library; if
not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth
Floor, Boston, MA 02110-1301 USA
