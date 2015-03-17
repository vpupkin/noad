# Introduction #

Originally was created on the base of "http://www.schooner.com/~loverso/no-ads/"


# Details #

@see link

What Is This?
This is a simple change to the configuration of your web browser, setting it such that it avoids making connections to banner advertisement servers and avoids downloading ad images. If your browser can't connect to the advertisement server, it can't show you the ad image. The trick behind this is that it uses a mechanism already built into most recent browsers (IE, Netscape, Mozilla, and Opera) and available on most platforms (Windows, Mac, UNIX).
How Do I Use This?
Simply download and save no-ads.zip. Extract the no-ads.pac file from the ZIP archive. It is a plain text file. Open it with an editor or text viewer, and read the instructions it contains.
(hint: to open the file on Windows, right-click it and select Open With, and choose wordpad - do not use notepad)
Where Can I Get Help With This?
I've created a web forum where people can discuss no-ads.pac and proxy auto configuration.

The forum host has started using a gator install on your first visit. You will not see it you are using no-ads.pac. If you aren't, do not accept the 'Network54 easyaccess' window (you will still be able to get into the forum just fine).
How Does This Work?
Starting with Netscape 2.0 (when JavaScript was introduced), Navigator gained the ability to evaluate a JavaScript function for every URL it was about to load. The purpose of this mechanism is to automatically and dynamically determine an appropriate HTTP proxy, where such a proxy might be dependent upon the URL involved. Netscape has the documentation on the Proxy Auto Config JavaScript functions available.

My use of Proxy Auto Configuration is to avoid using a proxy. URLs of known anoying images are sent off to a black-hole proxy server which swallows the request (and prevents the image from being loaded). URLs of actual content are unaffected, and directly handled by the broswer.

(For what it's worth, I came up with this concept back in 1996 when I was looking at interesting problems that JavaScript makes possible)
What Browsers Does This Work With?
Please post updates and corrections to the web forum.
Mozilla, Firefox
It works perfectly with all versions of Mozilla from 1.0 and up, and with Firefox 1.0 and up.

Mozilla older than 1.4 (and Netscape older than 7.) require a black hole proxy. Newer versions of those browsers (and Firedox) implement Proxy auto-config failover, which allows them to utilize no-ads.pac without a black hole proxy.

Netscape Navigator
It works with recent Mozilla-based Netscape browsers (6.x and 7.x) (I've not tested it, but I have many reports of success).

It works with all versions of Netscape Navigator from 2.0 (when I started using this trick) up to and including 4.0x and 4.7x (but you should not be using those old browsers anymore).

Recent versions of no-ads.pac use JavaScript regular expression objects. This will not work on versions of Navigator prior to 4.0 (and may not work on pre-6.x versions of Netscape). For those old browsers, use the last version of no-ads without RegExps.

Internet Explorer
Around IE3, Microsoft added Proxy Auto Config to Internet Explorer (their documentation on this used to be at http://msdn.microsoft.com/library/periodic/period99/faq0599.htm, but Microsoft has removed it). I have tested with IE versions 4, 5, 5.5, and 6. I still use IE5.5 SP2, as that has proved to be most stable and reliable version (it still crashes on me, but not as much as other versions; this is why I now use Mozilla).

With IE5 and later, you can load the PAC file from a file: URL This form works: [file://c:/no-ads.pac](file://c:/no-ads.pac). I have tested this with IE5.01sp2 (on Win98), IE5.5sp2 (Win98 & Win2K) and IE6 (on Win2K). With IE4 and earlier, you need to load the PAC file from an http: URL.
IMPORTANT!
For all versions of IE, you must correct the security settings. Under Tools->Internet Options, select the Security tab. Select Local intranet and then click the Sites box. Then, remove the check mark next to the include all sites that bypass the proxy server option.

IMPORTANT!
For IE5.5 and later, you must disable the Auto Proxy Caching mechanism, as it defeats the ability to to block ad images on servers that also serve non-ad content. To prevent this, add the registry key described in MS KB article Q271361. To make it easy, you can just download and click on this registry file: IE-auto-proxy-cache.reg.

Details: This sets the EnableAutoProxyResultCache registry key for the current user. It also (thanks to InvisiBill) adds a new group and checkbox to the IE's Internet Options Advanced tab, that allow you to easily change the setting in the future.

For NT, Win2K, WinXP, you must run it once for each user on your system using no-ads, as this is a per-user setting (the same key doesn't work under HKLM).

For IE4, you will possible need to use the last version of no-ads without RegExps.

For IE3, you will need to use the last plain version of no-ads. (I've had one report of no-ads.pac working with IE 3.03. I've not tried it. I no longer have an IE3 to test against.)

Opera (6.0 and later)
I have tested with with Opera 6.04 (on Windows 2000). It works.
(Note: if you block Opera's own ads, it will stop working after 2 weeks)
Alternately, you can consider using Opera's URL filtering hook. (Although, I don't know if that blocks Opera's own ads)

Other Gecko-based browsers
This should work in any Gecko-based browser, such as Konqueror in KDE3.

Other browsers
If they have JavaScript and Proxy Auto Configuration support, then this should work. If you try a browser not list here, please post an update on the web forum.
How Do I Add URLs To Block?
Adding URLs to block is easy. It will be obvious once you look at no-ads.pac. The industrious can even find Junkbuster blockfiles via a search engine and directly add those URLs to the blocked list (if you do, announce your work in the web forum).
Does This Work If I Already Use A Proxy?
Yes! (See the directions inside the no-ads.pac file)

It will also work if you already need to use a Proxy Auto Config file, although that's a little tricky to setup at this time. See this thread in the forum.
Why Is This Better Than An Ad-removing Proxy?
If you use a ad-removing proxy (such as Junkbuster or Proxomitron or BannerFilter+Squid), then (by definition), all of your content must go through the proxy filter. This might slow down the loading of pages, or cause other problems as the proxy is always running. The Proxy Auto Config mechanism avoids this by avoiding a proxy altogether for the content you actually care about.

Of course, if you want to control or block cookies, or dynamically alter content, then you should try Proxomitron (or Junkbuster) and skip no-ads.
Why Is This Better Than A Hosts File?
Some people use an /etc/hosts (or on Windows, hosts.txt) file to map hostnames of ad image servers to a non-responding address. The downside to this is that it cannot be used for a server that serves both ad and non-ad content. no-ads can block such hosts easily, but it can also just as easily block some content on those hosts, not all of it, since no-ads can block based upon the URL, not just the hostname.
How Do I Know If It's Working?
Try this test page. If you can see the picture of me, then no-ads isn't working. If the picture is blocked, then no-ads is working..

You can also try these test URLs: www.yahoo.com/banners/image & www.yahoo.com/ads/image
If your browser displays Yahoo's Sorry the page was not found, then no-ads isn't working.

If you are having problems getting no-ads to work, then post a message in the web forum.
Black Hole Proxy Servers
The simplest black-hole proxy is one that doesn't even exist. If you use an address on your local host, then the request will fail immediately. This is how no-ads.pac is configured by default, so if you don't mind seeing a missing image icon for each image that has been blocked, you have nothing to change or configure. This works with Mozilla 1.4, Netscape 7.1, and all versions of IE.

For other browsers, you will need an actual black-hole proxy that somehow denies every request given to it. It can either return a HTTP 501 error code, or server up a replacement image for the blocked ad image. Here are some options:
My simple noproxy shell script that acts as a blackhole proxy. It is invoked (on UNIX) via inetd (or equivalent). It can be configured to return an image, a redirect to an image, or an HTTP error code ("501 No Ads Accepted"). Sample images include a clear (blank) image, or a no-ads logo.
noproxy, noproxy.clear.gif, noproxy.noads.gif
Stephen Ostermiller made this image for noproxy that makes it obvious something was blocked, and scales well: noproxy.blocked.gif
Sean Burke has a black-hole script written in Perl (UNIX; can be made to work on Windows)
Larry Wang has a black-hole program for Windows (and he also offers the source code)
How Do I Deactive no-ads For Just One Site?
There isn't a provision to deactive no-ads for just one site. However, you can deactivate no-ads for your current browser process. (This was contributed by Sean Burke)

Mozilla always uses one process for all windows/tabs. IE uses one process per invocation: if you use open in a new window, the new window is controlled by the same process; but if you click on IE on the desktop, you get a new process. Use these special links to deactivate or re-activate no-ads for the current browser process.
no-ads off
no-ads on

Hint: drag these links to your browser's Link or Personal toolbar.
Old Versions of no-ads.pac
Sorry, I will not be updating these versions: no-ads-4.zip 	The last revision (4.28) of no-ads.pac that did not use JavaScript regular expressions.
Required for Netscape 2.x, 3.x, and possibly 4.x. Possibly needed for IE4.x.
no-ads-3.zip 	The revision (3.27) of no-ads.pac avoiding JavaScript alert and var statements.
Required for IE3.

Does This Stop Popups / Popunders?
No-ads is not a popup stopper. But, it does stop some popups (as it prevents the loading of JavaScript source that makes the popup happen). And on other popups, it doesn't stop the popup window from appearing, but it stops your browser from loading the content.

Personally, I use Mozilla and I enable the Block Unrequested Popup Windows option. I never see any popup advertisements.
This page accessed [error occurred while processing this directive](an.md) times.
Last modified on Friday, 2007-Dec-07 04:29:20 CST.
(or about January 1, 1970 GMT, according to JavaScript)
Send comments to John@LoVerso.Southborough.MA.US.
Back to my home page