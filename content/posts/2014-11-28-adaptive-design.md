---
title: On Adaptive Design
author: admin
type: post
date: 2014-11-28T11:03:29+00:00
url: /journal/2014/11/28/adaptive-design/
dsq_thread_id:
  - 3270467057
categories:
  - Nerdery
tags:
  - adaptive design
  - CSS Designer
  - design
  - Front End Developer

---
_This post originally appeared on the [Storm ID blog][1]._

There&#8217;s some confusion from some of our clients about what adaptive design really is and if, when and how it should be used. Responsive design is all but the industry standard at this point, but what about adaptive?

Originally the term adaptive design was used to describe layouts which were very similar to responsive layouts, but with fixed widths instead of fluid widths. Some designers really liked that as it meant you could control line lengths and image sizes and that was handy when the industry was starting to get to grips with how all this new stuff worked. The main downside was that if you viewed these layouts in a browser window which was in between these breakpoints, you could have a lot of &#8216;wasted&#8217; screen space. The experience didn&#8217;t feel native to the device you were holding, which is the whole point of responsive design. For example we saw some tablets that were less wide than an iPad and the designer had only added breakpoints for iPhone size and iPad size screens, so you saw the &#8216;mobile&#8217; sized site with lots of space either side. This method didn&#8217;t lend itself well to the fluidity of the web and the mass of different device sizes. You had to use breakpoints that made sense for your current traffic which may not make sense in a few months when Apple or Samsung or Amazon bring out their new device with a different screen size.

The adaptive design that is talked about in [many articles][2] at the moment largely relies on Javascript (JS) to add in components to the document based on what it thinks it knows about your device. This can work, but has a couple of possible problems that are showstoppers for me.

Some articles advocate using JS to find your screen size. This is generally fine technically, but there can be problems with that. [Screen size ≠ browser window size][3] ≠ [context ≠ device type][4].

[<img class="alignnone size-full wp-image-1469217592" src="http://lobban.org/wp-content/uploads/2014/11/elementsMobileContext.jpg" alt="" width="558" height="609" srcset="https://lobban.org/wp-content/uploads/2014/11/elementsMobileContext.jpg 558w, https://lobban.org/wp-content/uploads/2014/11/elementsMobileContext-275x300.jpg 275w" sizes="(max-width: 558px) 100vw, 558px" />][5]

Some advocate browser sniffing, where JS detects parts of the user agent string of your browser. This can cause [huge problems][6]. For [various reasons][7], browsers often lie about what they are. This method doesn&#8217;t allow for new classes of device either, without development updates.

<blockquote class="twitter-tweet" lang="en">
  <p>
    so it would appear this indeed true. crikey. <a href="http://t.co/KZwWzIUKGO">pic.twitter.com/KZwWzIUKGO</a>
  </p>
  
  <p>
    — Mo (@nevali) <a href="https://twitter.com/nevali/status/450746236526940160">March 31, 2014</a>
  </p>
</blockquote>



OkCupid have a different use for browser sniffing.

Another big problem with many of these articles is that these techniques absolutely require JS. That&#8217;s not too bad if it&#8217;s server side (run on the website&#8217;s server before sending the page to the browser), but if it&#8217;s client side (run by the end user&#8217;s browser as the page is delivered) then this can and will cause problems. <span style="color: #000000;"><a href="https://decadecity.net/talks/using-a-web-font-loader">Web browsers operate in a fundamentally hostile environment</a>. If the end user&#8217;s browser has JS</span> turned on, and if JS runs successfully and in a timely fashion, then they may be delivered a relevant page, with the caveats above. If JS is turned off (unlikely but possible) or JS fails to run (device is struggling, internet connection is slow or fails) then, in many cases the user will be left with a sub-standard experience, or no experience at all in some cases. And slow connections are not just for mobiles. Think cafes with 50 customers and a weak router, or small internet cafes, or some rural areas, or people who have to deal with ISP problems all the time. Our company build large scale, award winning digital products, but we can&#8217;t get decent wifi in one of our meeting rooms, and we spent the first week in our new office with a connection that was only okay if no one started a YouTube video or Spotify.

<img class="alignnone size-full wp-image-1469217593" src="http://lobban.org/wp-content/uploads/2014/11/squarespacejsoff.jpg" alt="" width="780" height="434" srcset="https://lobban.org/wp-content/uploads/2014/11/squarespacejsoff.jpg 780w, https://lobban.org/wp-content/uploads/2014/11/squarespacejsoff-300x167.jpg 300w" sizes="(max-width: 780px) 100vw, 780px" />

This is what squarespace.com looks like if JS is turned off or fails.

Running this stuff on the server and delivering components according to what it thinks it knows can be good idea in theory, though. [Capital One talk about doing this][8] with their sites, promoting different products to different device classes and locations. If you have a strong in-house team, both in development and marketing, and can tweak that regularly and test heavily, you could have . This can also have downsides. Many people will try to tell you that on a small screen you should change content because small screen = mobile = on the go. We know from (bitter) experience that this is not necessarily true any more, as more people move to not owing a traditional computer at all. On many of the kind of sites we produce, all content is as relevant on small screens as larger screens, so messing with that seems like a bad idea. Make an element less prominent, but removing it all together will just frustrate the people who need that element and only have mobile device (at least at that moment). How many times have you sat on your sofa and looked for something online on your smartphone, only to give up because the feature you need is missing, and getting up to switch on your laptop seems like a lot of effort?

Be careful about SEO. Google is [putting less importance][9] on content which is not visible by default on a page, such as tabs and &#8216;read more&#8217; content. This could easily be applied to content that doesn&#8217;t appear for all users. So be careful about selectively adding content that might be important.

Delivering different assets from the server depending on screen size is also a good idea in theory, as it means your browser only downloads what it needs to which cuts down on bandwidth, increases page speed and in turn engagement and sales. However, there are new HTML image specs which are usable in Chrome, iOS, Safari and Opera now, and are [polyfill][10]-able in other browsers, which basically do the same things with a bit more flexibility. They take away the need for fancy server configs too, which is especially great for prototyping.

The last, and perhaps most important point: What these articles talk about as adaptive design could fit into responsive design. The two are not mutually exclusive at all. Responsive design goes way beyond just fluid layouts that change at different screen sizes. It&#8217;s also about performance and progressive enhancement, both of which are part of what they talk about adaptive design being. But that&#8217;s another big blog post in itself.

The main thing is to use common sense and think about all kinds of users. Use [progressive enhancement][11] to [first make it work, then make it work better][12]. Don&#8217;t rely on a user having all the technology that you hope they do, and have it working fully every single time. Be inclusive.

 [1]: http://blog.stormid.com/2014/11/adaptive-design/
 [2]: http://dealer-communications.com/technology/the-benefits-of-responsive-vs-adaptive-design/
 [3]: http://css-tricks.com/screen-resolution-notequalto-browser-window/
 [4]: http://www.uxmatters.com/mt/archives/2013/06/three-reasons-weve-outgrown-mobile-context.php
 [5]: http://weblog.cenriqueortiz.com/mobile-context/
 [6]: http://css-tricks.com/browser-detection-is-bad/
 [7]: http://webaim.org/blog/user-agent-string-history/
 [8]: http://responsivewebdesign.com/podcast/capital-one.html
 [9]: https://www.davidnaylor.co.uk/google-will-ignore-click-expand-tabbed-content.html
 [10]: https://remysharp.com/2010/10/08/what-is-a-polyfill
 [11]: http://alistapart.com/article/understandingprogressiveenhancement
 [12]: https://www.gov.uk/service-manual/making-software/progressive-enhancement.html