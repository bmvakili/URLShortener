#URL Shortener

##Pre-requisites
Apache Web Server with mod_php and mod_auth

##Install and Configure
Place all files in web server directory.<br/>
Edit .htaccess file to update location of htpassword file.<br/>
Edit tconfig.php; update $url_base to your server's url, e.g. http://examp.le .<br/>

##Verify
Visit your server's url: http://examp.le/t.php <br/>
Enter the username / password.<br/>
Enter a url to shorten, e.g. [http://reallylongu.rl/#qrt?q=abcdefg  sp ac es](# "Example URL").<br/>
Enter a tag (optional).<br/>
Press Enter.<br/>
The url and tag should be generated.<br/>
Visit the generated URL and it should redirect to the original URL.<br/>

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
