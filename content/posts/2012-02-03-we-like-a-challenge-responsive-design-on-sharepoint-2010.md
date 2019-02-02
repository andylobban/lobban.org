---
title: Responsive Design on Sharepoint 2010
author: admin
type: post
date: 2012-02-03T15:31:00+00:00
url: /journal/2012/02/03/we-like-a-challenge-responsive-design-on-sharepoint-2010/
blogger_blog:
  - blog.stormid.com
blogger_author:
  - Nonimagehttp://www.blogger.com/profile/03336933982833752115noreply@blogger.com
blogger_permalink:
  - /2012/02/we-like-challenge-responsive-design-on.html
dsq_thread_id:
  - 778288786
categories:
  - Nerdery
tags:
  - design
  - Frontend Development
  - Our Work
  - Responsive Design
  - Sharepoint
  - sharepoint 2010

---
_This post originally appeared on the [Storm ID blog][1]._

When it came to rebuilding the [client] – that wonderful arts icon located in southside Glasgow &#8211; we felt that this type of content-rich site would benefit from a content first, responsive approach.

However, we weren&#8217;t sure how responsive design would fly with SharePoint.

For legacy reasons, the rebuild had to be done on SharePoint 2010 ([client] being part of the [client] web family, all of which is built on SP), and we know that SharePoint can be notoriously hard to bend to your design will with so much extra code and use of `<table>`s.

Fortunately our SharePoint Team Leader, Tom Travers, is both a patient man and has spent years of his life rewriting SP controls to use markup that the Storm design team can actually work with. Because Storm are generally up for a challenge with SharePoint we were keen to see how a responsive design could work with that product.

## First, the caveats…

First, we should say that we wouldn&#8217;t recommend trying a responsive design approach with a standard out-of-the-box Sharepoint install.

Responsive design is not easy at the best of times:

  * First you have to break the design habits you have developed over the years.
  * Then you have to educate your client about what responsive design is and the benefits for the project.
  * Then you have to create a responsive design that flexes to any size of screen but is still compelling.
  * Last &#8211; and this is the really hard part when working with SharePoint &#8211; you have to integrate your designs with your chosen CMS.

## An introduction to responsive design

Basically the web is going device independent.

We are currently experiencing a period in which there has been a dramatic increase in the number of devices that websites are viewed on. Smartphone penetration continues to increase with more people predicted to access the internet via this method than PCs by 2013. At the same time we’ve witnessed huge growth in tablets, like the iPad and Kindle, presenting yet another range of screen sizes and capabilities for websites to deal with.

The spectrum of screen sizes and resolutions is changing every day, so much so that creating a different version of a website is increasingly deemed to be impractical and unnecessary.

The emerging solution on the web is to adopt a responsive approach. The approach makes use of flexible grids, flexible media and media queries to serve the most appropriate experience possible to whatever device you view the site with.

## Yes – it’s the right time for [client]…

We thought that a responsive design would help ensure that [client].org was accessible and well presented to the widest audience, regardless of where and on what device they were accessing it from. Moreover, as new and, as yet, unforeseen devices continue to enter the market, responsive design should help to ensure that [client] is future friendly.

## Our approach to responsive design on Sharepoint

Our design approach for many projects in the past has been Research > Wireframes > Mockups > Output > Integration. However, this approach does not, in our experience, bring the best out of a responsive design:

  * Working with static mockups can never convey to the client how a design feels when it is interacted with, and it certainly can&#8217;t show how the layout will work at a variety of sizes.
  * Likewise, static wireframes can show layouts and elements as viewed at a certain size and resolution, but we can&#8217;t make endless wireframes of each view for different device sizes.

Also, if we mock up designs for some ‘standard&#8217; sizes, we will miss all the devices, niche or otherwise, that fall between these.

Responsive design is as much about those in between sizes as the &#8216;standards&#8217; of today.

## Wireframing

We now move on to quickly built HTML/CSS wireframes. (Actually, we do plenty of sketching first, but the client is seldom presented with these sketches.)

The wireframes are built using templates and snippets we have built up, including a wireframes.css file, which allows us to quickly add classes to elements to style them in the familiar grey, black and white boxy style for traditional wireframes.

The difference is that these wireframes can already convey to a client (and ourselves, this is as much exploratory as explanatory) how the layouts look at different sizes on different devices, and in different contexts.

They can view these wireframes in the office, on the train, in the street, and each template can be linked up to give a feel for the user journeys.

Yes, this can take a little longer than creating static wireframes.

But the more we use this process and the more snippets and templates we build up our library &#8211; yes, a “patterns library” for responsive design, nice &#8211; I hear you say &#8211; the quicker we are getting at this. Also, the extra time spent at this stage is compensated for in the next stage: visual design.

## Visuals

Once the wireframes have been agreed, we move on to visual design, also in HTML/CSS.

We may work up some ideas in Photoshop (but again, the client won&#8217;t generally see these). We work in HTML/CSS/JS, working with the existing layouts from the wireframes, building up the richness of the designs. This progressive enhancement approach allows us to give basic devices a basic experience without losing any functionality, and giving more advanced devices a richer experience as appropriate.

This also allows the client to see how the visual design will look in situ, in terms of layouts, contrast, typography, etc.

Having already worked out a lot of the problems with the responsive parts of the templates, this phase is much quicker than the traditional build phase from static mockups.

## \*!\\*\*!\*\* SharePoint!

As mentioned above, normally our designers might spend time integrating templates into target CMS for the project. For Tramway, however, the static HTML/CSS/JS templates were handed over to Tom to integrate into SharePoint.

These templates were built initially without any allowances for SharePoint&#8217;s usual eccentricities.
  
We wanted to create the best possible product first, and then see if we could integrate it and solve the problems needed to so. There&#8217;s no point in starting from a position of weakness, as we knew we would have to make compromises later on.

## How was it done?

First, we built a solid masterpage that works for anonymous, publishing web-site.

This goes some steps beyond the available minimal masterpage out the box. Not only did this mean ripping out anything that could come out, but quite a lot of ‘poking the angry animal’ to see if it would bite back. This means things like messing with the `<html>` element, the `<DOCTYPE>` declaration and the basic s4-* based structures.

Then it was just a case of pouring in the creative output…and a lot less debugging than anticipated. This was all combined with the site content, which has some rich content types, including calendar event links, video and audio, and other conditional display constructs. Oh, and a few calendar based searches.

The final challenge was to support the page authoring model, ribbon and all… Admittedly this does get a bit messy with conditional display controls being used for the page display to authenticated users and further conditionals when in page edit mode.

Methinks some further challenges lie in this area…

So here’s an open challenge for the Microsoft SharePoint 2013 team … how building in responsive support and a responsive SharePoint page editing environment?

## A message in a bottle…

The bottom line, we’re pleased to say, is not only that a responsive design in SharePoint 2010 can be done, but that it can be done very successfully.

Go take a look at [client] and see for yourself…

 [1]: http://blog.stormid.com/2012/02/we-like-a-challenge-responsive-design-on-sharepoint-2010/