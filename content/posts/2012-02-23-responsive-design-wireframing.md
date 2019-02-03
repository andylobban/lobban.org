---
title: Responsive wireframing
author: admin
type: posts
date: 2012-02-23T11:29:11+00:00
url: /posts/2012/02/23/responsive-design-wireframing/
dsq_thread_id:
  - 778288696
categories:
  - Nerdery
tags:
  - design
  - Frontend Development
  - Responsive Design
  - tramway
  - wireframing

---
_This post originally appeared on the [Storm ID blog][1]._

There has been a lot of talk recently on the web about the best responsive design workflow, and part of that is the best way to wireframe for a responsive design. We&#8217;ve been wrestling with these topics at Storm ID too, and I wanted to share a little of how we&#8217;re working on it at the moment.

What I describe below won&#8217;t work for everyone. It may not work for us 6 months from now, but it&#8217;s working well for us just now.

Sketching is a great way to get ideas flowing, to quickly illustrate those ideas to colleagues and to get things straight in your own head. I still start with paper and a pen, roughly sketching things out. I probably always will.

It’s useful to remember that we can use traditional tools (if necessary) to generate ideas internally, and then use ‘new’ methods of presenting ideas to clients. Not everything has to be a deliverable; we just have to present deliverables in the right way. Use whatever you want to get the ideas going: paper, Visio, Axure, Balsamiq, Photoshop. It really doesn&#8217;t matter. Just remember that it&#8217;s okay to throw it away afterwards.

So after I&#8217;ve got things a bit clearer in my head by sketching, I move on to HTML/CSS wireframes.

You would be hard pushed to find many web designers today who would argue against HTML/CSS being the best way to present wireframes to the client, but many feel it&#8217;s too time consuming. I disagree.

## It _can_ be done quite quickly with a system in place

I&#8217;ve been developing a system while working on a couple of responsive sites that makes it much faster to create HTML/CSS wireframes, almost like static prototypes. I start with a basic HTML file which we have developed, a bit like HTML5 Boilerplate but tailored to our own needs, including a reference to wireframes.css, a stylesheet I wrote.

<a title="HTML start template" href="http://blog.stormid.com/files/responsive-wireframes/start-template.html" rel="nofollow">View our current starting template</a> and view source
  
<a title="Responsive wireframes CSS" href="http://blog.stormid.com/files/responsive-wireframes/wireframes.css" rel="nofollow">View wireframes.css</a>

This stylesheet contains a few basic styles for header margins, link colour (just adjusted the shade of blue) and the main thing: styles for `[data-wf="block"]` and `[data-wf="nugget"]`. This allows me to add `data-wf="block"` or `data-wf="nugget"` to any element and have it display as a traditional-looking wireframe grey box or white box with grey border. After the wireframing stage I can easily remove the stylesheet and the data- attributes and all the grey styling is gone but the structure remains, ready for the visual design phase. I&#8217;ve used data- attributes instead of classes as I found them easier to find and remove.

To add height to blocks without full content yet I just add `<br />` tags (don’t panic, these won&#8217;t make it to production remember).

Then I start adding layout structure CSS to my other stylesheets. This structural CSS can form the basis for [visual design in the browser][2] later. You can use something like [Bootstrap][3] if it helps keep things speedy, or you can roll your own grid, as I prefer to do.

At this stage (and most of the way through development) I reference a stylesheet for each media query, instead of combining them. I find it much easier to work with a few files open in tabs than to endlessly scroll up and down one huge stylesheet.

I don&#8217;t find that all this takes me much longer than figuring out how to use Axure or Visio or something similar.

## The extra time spent is worth it

Yes, it can take a little longer to wireframe in HTML/CSS. But what you lose here, you make up for later by having a solid foundation already in place to start the visual design phase. Some of your output is already done. Some of it you might need to strip out. It also gives our developers something to work with when developing the site while I work on visual design.

Building out your wireframes like a prototype allows you to work out exactly how the layout changes according to different devices. It lets you see if your thinking on paper was correct. It lets you quickly adapt when you find out you&#8217;re wrong.

It&#8217;s going to give the client the clearest possible picture of what you are proposing. They can view and test a usable web page, with links, javascript and/or CSS3 based interactions, and test the flows through the site. They can test this on any number of different types of devices they can lay their hands on. There is no guesswork needed. This is incredibly important as we support clients who are new to creating for the web, let alone experienced with responsive designs. Often, the best way to explain something is to demonstrate it. You can even set up analytics on these wireframes and get feedback that way.

## It&#8217;s not supposed to be easy

I&#8217;m a designer who codes, but if you&#8217;re not, why not get friendly with someone who is. Sketch out your ideas, chat through them with a frontend developer, and have them produce responsive wireframes you can present and share with your client.

No one is saying this is simple. It&#8217;s not. It takes a [huge change from &#8216;traditional&#8217; processes][4] and to start with it will take some extra work. However, the benefits for you, your clients and the final work far outweigh the initial pain.

## Always evolving

This is what works for us just now. We&#8217;re always trying to look at better ways of doing things, for our clients and the agency. **I&#8217;d love to hear what you think is the best way to work with responsive design throughout the process, and especially any good or bad experiences you&#8217;ve had.**

 [1]: http://blog.stormid.com/2012/02/responsive-design-wireframing/
 [2]: http://24ways.org/2009/make-your-mockup-in-markup
 [3]: http://twitter.github.com/bootstrap/
 [4]: http://trentwalton.com/2012/02/02/redefined/