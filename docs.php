<!DOCTYPE html>
<html lang="en">
<head>
      <meta name="description" content="yeah i'm a pokemon master suck it">
              <meta name="robots" content="noai, noimageai">

<title>MASTERBALL / DOCS</title>
<meta name="viewport" content="initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="mball.ico" />
<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Lato:400,400i,700,700i&display=swap" rel="stylesheet">


<style type="text/css">

body{
    background: #eaeaea;
    margin: 0;
    font: normal 100%/140% 'Lato', sans-serif;
    color: #333;
}

#container{
	width: 60vw;
	margin: 4em auto 1em;
}

#content{
	background: #fff;
	padding: 1.5em;
}

h1{
	font: normal 200% 'Futura', 'Century Gothic', sans-serif;
	text-align: center;
	color: #E3A250;
	margin-top: 0.5em;
}

a:link, a:visited{
	color: #DC9846;
	text-decoration: underline wavy;
}

a:hover, a:focus{
	color: #a86d25;
}

h2::before{
	content: url('shoes.png');
  float: right;
  padding-top: 7px;
}

h2{
	color: #E3A250;
  text-align: left;
  font: normal 150%/160% 'Futura', 'Century Gothic', sans-serif;
  margin: 2em 0 1em 0;
}

h2:first-child{
	margin-top: 0;
}

b{
	background: #f4bf7f;
}

#footer{
			margin: 3em 0;
			color: #999;
			text-transform: lowercase;
			font-family: 'Futura', 'Century Gothic', sans-serif;
		}

#footer a:link, #footer a:visited{
    color: #999;
    text-decoration: underline solid;
}

#footer a:hover, #footer a:focus{
    color: #333;
    font-style: normal;
}

h3{
	color: #E3A250;
  font-size: 150%;
  text-transform: lowercase;
  font-style: italic;
}

h3::before{
	content: "—";
}

h4{
	color: #E3A250;
  text-transform: uppercase;
  font-size: 120%;
}

code{
	font: normal 100% 'Inconsolata';
}

  @media only screen and (max-width: 810px) and (min-width: 431px) {
    
    html {
-webkit-text-size-adjust: 100%;
}

#container{
	width: 85%;
}
}

  @media only screen and (max-width: 430px) and (min-width: 0px) {
    
    html {
-webkit-text-size-adjust: 100%;
overflow-x: none;
}

#container{
	width: 95%;
}
}


</style>

</head>

<body>

<div id="container">

	<h1>ICIRR.US: DOCUMENTATION <img src="rules.png" alt=""></h1>

	<div id="content">

		<p>This is a manual on how and why I built <i>Masterball</i>, and what I would like it to be, as of the time of writing this (11 February 2025). It is very long, with a lot of lists and subsections, and mostly for me to vocalize a lot of my thoughts and reflections while making this website.</p>

		<p>I may make changes to this documentation or rewrite it wholecloth in the future. Here is how I've documented the site for now.</p>

	<h2>Table of Contents</h2>

		<ul>
			<li><a href="#intro">Introduction</a></li>
				<ul>
					<li><a href="#background">Background</a></li>
					<li><a href="#purpose">Site Purpose</a></li>
					<li><a href="#name">Name</a></li>
				</ul>
			<li><a href="#construction">Construction</a></li>
				<ul>
					<li><a href="#design">Design Notes</a></li>
					<li><a href="#process">Process</a></li>
						<ul>
							<li><a href="#scrapped">Initial/Scrapped Plans</a></li>
						</ul>
					<li><a href="#nov24">Responsive Update (November 2024)</a></li>
					<li><a href="#feb25">Wild Area & Secret Base Update (February 2025)</a></li>
				</ul>
			<li><a href="#walkthrough">Site Walkthrough</a></li>
				<ul>
					<li><a href="#future">Future Plans</a></li>
					<li><a href="#credits">End Credits</a></li>
					<li><a href="#disclaimers">Disclaimers, Privacy, and Accessibility</a></li>
				</ul>
			</ul>

		<h2 id="intro">Introduction</h2>

		<p>I made this website in February of 2017, but only started writing documentation for it in late November/early December 2025, and have continued it since then. I consider this documentation to be mostly accurate due to my trust in my own memory, but as memories work there are still some pieces of the earlier process that I recall only vaguely, if at all. Additionally, the depth of my understanding of code, design, and web development has evolved over time, and continues to even today. My experience with web development and front-end code is and has only been entirely self-taught with minimal tutorial usage because I'm impatient. I started web designing like playing a video game without reading the instructions first, just like when I was younger and playing Pokemon for the first time.</p>

<p>The first website I owned dedicated to Pokemon was a fanlisting for Pokeballs, adopted from <a href="https://hey.georgie.nu">Georgie</a> in 2011. My interest in maintaining fanlistings fell through; still, in the back of my head I knew I liked the idea of owning a website related to my love for Pokemon. All the creative independent sites I'd been exposed to in my internet space so far had been shrines for specific species or characters or ships, or fanlistings which had more commitment in maintaining the listing regularly. So the thought of making similar shrines and fanlistings occurred to me repeatedly, but if I was honest with myself, wasn't very appealing.</p>

<p>And while there are Pokemon species and characters and ships I love, I wasn't that interested at the time in making web shrines. Shrines require a lot of work in writing, particularly the style of balancing the personal with the informative, something I've only been more confident with in recent years. And it's a <i>lot</i> of writing. I admire friends and sites I know with a ton of elaborately crafted and exhaustively written web shrines, but when I sit down at my computer, it's hard for me to fathom even starting one.</p>

<p>My favorite thing about making websites at all is the design component. I do love writing and storytelling and analyzing, but it feels like a different task when the element of aesthetic design is added as well. Design and customization is purely indulgent for me; the work I put into writing things for my websites and making content for them is oftentimes an excuse for me to show off my designs. Yet I love Pokemon <i>so much</i>. So how was I to make a website dedicated to both of these things I love?</p>

<p>In January of 2017 I was thinking about my digital presence, perhaps a bit too much. But I asked myself again: what do I love about Pokemon? How can I create a personal and indulgent website about the franchise I've loved the longest, in a way that feels accurate to the relationship I have with it? And then it was so obvious: my teams in all of the games I'd played. I really only ever play a Pokemon game once, because I get so attached to the little bytes and pixels in my game data that I don't have the heart to reset and start all over and wipe my old team away. (Except for that one time where I had a bootleg copy of Emerald that would never save, so I played it for long stretches of time.) I love Pokemon because I love <i>my</i> Pokemon. Since I wanted to make a site driven by my relationship with Pokemon so badly, I could just make a site centered around it.</p>

<p>So that's what I did. I've also moved all of the Pokemon archived here to the most recent storage systems (currently Pokemon Home) so I can reset the games now while my favorites are still accessible to me. But I still really only ever play the games once.</p>

<h3 id="background">Background</h2>

<p>As the seeds of this idea drifted toward me in January 2017, my life had been in an in-between state. I'd dropped out of college for the first time in 2015, and spent the majority of 2016 traveling with the excuse of finding myself, though I was mostly just spending my credit card on trinkets I liked. One of the places I traveled to was Osaka, Japan, and the only thing I planned on doing there was visiting the Pokemon Center and buying merchandise for me and my friends. I'm sure I found a bit of myself somewhere along the way.</p>

<p>After dropping out and traveling, I lived with my mom and had few obligations and a lot of mental health issues. So it was a good time for me to put way too much time into my hobbies, especially in my still starry-eyed fascination with web development and design. After the idea of creating a personal archive crystallized in my head, I worked on it immediately and obsessively, as I do with any creative project I take on. </p>

<p>The details of creating this website from the ground up are a little fuzzy to me, but what I do remember with resounding clarity is that I designed and created all of the mainline game archive pages up to that point in one sitting, more or less. As the entire spotlight of this site, they were the pages I was excited to work on the most, even if listing all of their ribbons and moves and balls they were caught in and characteristics turned menial and daunting at points. But this is one of the rare projects where, to me, the process isn't as important. It's the end result, and the satisfaction that I could archive something that means so much to me in a digital and creative way.</p>

<p>The pages that I designed in their beginning stages that are still pretty much the same today are:</p>

<ul>
	<li>The splash page (with minor edits).</li>
	<li>The trainer landing page (with minor edits).</li>
	<li>All game pages from Ruby to Moon.</li>
	<li>Favorites, Miscellaneous, and the Shiny Gallery got added soon afterward.</li>
	<li>The Gym landing page.</li>
	<li>Within the gym: Fight (site metadata, with minor edits), Bag (at the time, an external page rather than an in-page JavaScript toggle), Flee (exits, and also got added about a week later).</li>
	<li>The Pokemon Go page, because I'd also spent a lot of 2016 playing PokeGo while traveling.</li>
</ul>

<p>The design for the mainline game pages is simplistic, but that's intentional: I'm a minimalist and not as inclined to elaborate graphic design, so I make the focus on the content the crux of a webpage's design instead. Plus, when I was 18 I liked the idea of having a network of webpages that each had a distinct color theme that I could collate together like a rainbow. I tried to implement that rainbow idea for my more personal website projects, but that didn't bring me the satisfaction I'd hoped. Distinguishing my Pokemon parties across different games, however, certainly does. It feels a little full circle being able to channel this older creative idea into this newer, more suitable one.</p>

<p>During these beginnings, I was happy with contending with my inclination towards minimalism without needing to depend on graphics in a designing manner in order to bring my vision for this site to life. Yet even so, I began to realize with progressive clarity at how much general web development and coding knowledge I was lacking in, especially as I'm not the sort to really keep up with modern developments in code. I didn't use root variables to translate skins (and still don't, though this may change), I struggled with making the JavaScript in the first iteration of the Bag page to work, and for the more autobiographical section of my Trainer page, I didn't know until years later when I asked on StackExchange that I was using depreciated JavaScript logic. My passion has always been there, but since I've never really formally learned or been taught to think about webdesign in a technical manner, I knew that there was an entire ocean of contextual knowledge that I was missing out on.</p>

<p>But it was nice to have as a project, and served its purpose at the time: to look cool, to archive some pixels that I love, and, for me, to feel proud of it anyway. I then returned to college in fall 2017, this time majoring in Computer Science. I'd been conflicted about what I wanted to major in back when I was in high school, based on the two things I loved doing the most: telling stories, and making websites look pretty. I'd initially decided on Creative Writing, but upon learning that assigned reading in school only gets harder when it's my academic major, I swapped to Computer Science the second time.</p>

<p>I didn't learn any more about web development just by majoring in CS. But in my own time, I did, even if just a little bit. In the academic environment (and with ADHD medication) I learned to think about code algorithmically, strategically, modularly. I learned better the components of making things interact and operate and display from a coding angle. I learned the whys behind the best practices, not just the whats and the hows. I dropped out of college again 2.5 years later because of my mental health (again) and covid, but even though I didn't write any programs beyond my college assignments, I understood coding and development, as a whole, with a lot more coherence and confidence than I had before.</p>

<p>This is mostly to say that there are significant portions of this website that I made before thinking about it technically, and the updates I've made since then have fallen more in line with this more functional and structural mentality. Websites had always been about the front-end experience to me; I used to think, who cares what it looks like from the back-end? But the truth is that <i>I</i> care about what it looks like from the back-end, especially as this is an ongoing project for me, so I need a comprehensible system that allows me to update it in the future without much hassle. Since the initial launch of this site and prior to November 2024, the only updates I made were adding new pages for new games I played, and eventually removing initially planned portions that I realized I had no interest in following through with.</p>

<p>But starting in September 2024 I got the webdesign itch like I hadn't before, not since I was 15 and addicted to making several HTML/CSS layouts every day. I worked on my other web projects, and in lieu of that I touched up some things about Masterball that I thought I could do better. I decided to hunt for more affiliates just to keep my button wall more up to date and with less broken links. I reached out to some webmasters after clicking around here and there, which resulted in me getting an email from <a href="https://dragonflycave.com">Butterfree</a> that changed everything.</p>

<p>Well - not everything. But it did encourage me to think about (and subsequently change) the structure of this site, after retaining the same architecture for over seven years. And it felt right, anyway: this site was made while I was a creative writing dropout, but several years later I was someone who'd studied Computer Science for three years and with a steady job. I knew that I now had more learned knowledge in code, design, and overall development reasoning. So the idea of changing this website that had been pretty much the same for several years was both daunting but also exciting. It made me think of how to make it accessible and navigable while still retaining my stylistic touch and ambition to make it a unique experience of its own. </p>

<p>And all these years later, I finally understood something critical about myself: that I like making websites as a hobby and purely for fun. Though not the reason I dropped out the second time, I'm somewhat glad I never finished getting a CS degree. My interest in majoring in it in the first place back in high school was driven by my interest in webdesign and therefore no different than my interest in studying creative writing, too: I like doing them for fun, for me, in my own time, and not for anyone else. This is a passion project as much as any of my other websites or stories, and I want it to be as thorough and accurate and true to who I am as a person and a Pokemon fan <i>and</i> a webdesigner as possible. So upon getting prompted to think of new ways to improve my site, and then thinking of those ways, it was quick work for me to reorganize pages I had made several years ago into making more sense, and creating new ideas, sections, and pages to fill out my site. </p>

<p>So here I am several years later: with a project I started when I was at a depressed and aimless point in my life and just wanted something to work on, to now where I'm eager to develop this project as I see fit as I traverse the inevitability of time. I'm much more confident in who I am and what I want, and one thing that I will continue to want is to change, to improve, even if it's in ways that only matter to me. Though this website is nominally centered around my love for Pokemon, it's also centered around my life. Pokemon is the franchise I've loved the longest with a consistent intensity more than anything else, even if I've written more fanfiction for other media or put more hours into other video games. But ever since I watched the Pokemon anime for the first time in that kindergarten classroom (which I can still recall with clarity because it's tied to that specific memory), I was hooked. Pokemon had taken its hold onto me. Even as the years passed, I always returned for more.</p>

<h3 id="purpose">Site Purpose</h3>

<p>The conceit behind Masterball is encompassed in the following four ideologies:</p>

<ol>

	<li>It is a website that only I can make. Every element and aspect is directly tied to my life, experiences, and decisions: in games, teams, webdesign, and everything else. The unique thing about this website is not about the Pokemon or website aspects of it, but that everything about it is intrinsically tied to me. This website is a reflection of me much like my other personal website projects are; this one in particular is through the lens of the Pokemon franchise.</li>

<li>It is an experience. My favorite websites - and, in a larger scope, something that I just enjoy conceptually - are ones that feel like a scavenger hunt, an experience, causing you to open a lot of doors out of curiosity and maybe reward you for exploring. Though a lot about websites and website-making have caught my interest since I was 10, I continued to be an internet cretin and eventually started noticing how much I liked websites that felt more than just some pixels on a screen. Even from its beginnings, Masterball was my attempt to emulate that type of website, one that didn't just require you to read, but also to explore. And maybe you'll get rewarded for it along the way ;)</li>

<li>It is an ongoing experiment. I love trying new things, especially in webdesign, but a problem I tend to run into with web development is that there needs to be a purpose for everything; there needs to be information to display or communicate in order for the design to need to exist in the first place. Masterball allows me to stretch my aesthetic muscles driven by my own vision and the things I like, rather than hanging the weight of expectations in content and therefore in design and organizational structure as well. This website is whatever I want it to be, as long as it feels true to my desires.</li>

<li>...but it <i>is</i> just a Pokemon website at the end of the day, and so it is still designed to reflect that in some way on every page. From the names of sections to what goes where, to graphics (intentionally trying to use as much official art as possible rather than anything derivative) and in-game text and nods to specific gimmicks in certain games, particularly the ones that I have a special fondness for, this website is still about Pokemon. And it won't let you forget that.</li>

</ol>

<h3 id="name">Name</h3>

<p>This website was always named <i>Masterball</i>, even before it had its own domain name. I purchased <code>icirr.us</code> in 2018, a year or so after I'd first put this site online.</p>

<p><b>Why Masterball?</b> In coming up with a name for this site, I knew I wanted something obvious enough to be tied to Pokemon, but not too specific or broad. Something meaningful to me, but had a distinct flavor even in the keystrokes of others. I decided on masterball primarily for the reason that I liked to cheat in my old Game Boy Advance and DS Pokemon games, and the first cheat I'd <i>always</i> turn on was an infinite supply of masterballs. You put a game shark in my hand, I was there. It also fits with my <a href="https://icirr.us/trainer">nickname anecdote</a> from when I was a child and earned the title of "Pokemon Master" from my peers.</p>

<p>I suppose I enjoy the design of the ball, though since naming my site after the masterball I feel like I tricked myself into liking it a lot more now. It's almost poetic after adopting that Pokeballs fanlisting so many years ago. Moon balls are my favorite design, though. And I don't really have a double meaning for the "M" - my name does not start with M, unfortunately - so if you'd like deeper meaning on that, then it stands for, uhhh, me!
</p>

<p><b>Why icirr.us?</b> This site was initially hosted on an old website under the <i>pkmn</i> subdomain, because I like the idea of having subdomain projects. But this one got more ambitious and deserved a domain on its own. Even as I started it, a part of me knew that I'd still be invested in working on it for a long time, so as long as my interest in Pokemon (and, apparently, webdesign) never weaned. So in the back of my mind I wanted it to have its own home eventually.</p>

<p>This came to when I was idly pondering over domain ideas a bit later. I knew I was already very fond of Icirrus City from Pokemon Black because I enjoy the gimmick of the music changing and adding claps when you stand close to the ring of dancers. And yeah, that alone actually made Icirrus City my favorite city of all time. It's also just a nice city name. So when I realized that it would work perfectly as a .us domain, the idea lived in my head for months before I purchased it. I gave my time to consider it because I tend to with big permanent-feeling choices like this. In the end, I purchased it a little over a year later, especially as I had the money and it was pretty affordable for me at the time, too. I was also retiring the domain that it had been a subdomain on, and wanted a domain that felt good, right. If I didn't like it in a year, I'd thought, I could always change it. But here we are now, years later.
</p>

<b>Why two names?</b>

<p>While I was pondering over domain ideas, I already knew without question that I didn't want a domain like masterball.com, or .org, or .info. I didn't want <i>masterball</i> to be in the URL - it felt too committed, even if this site has still been named Masterballl ever since. When it comes to things that are a creative reflection of my identity, I like to make choices that feel right just for me, even if it seems senseless to others. I don't like conforming to expectations. I like being able to do whatever I want.</p>

<p>So it had never really been a serious point of consideration, though I entertained the thought once or twice. Now, years later, I like the idea that my website has two names - who says that it should only have one? I use them both pretty interchangeably, though I suppose I'd say its preferred name is Masterball and icirr.us is on the birth certificate. But it's neither deliberate nor accidental, just a result of some decisions I made because they felt right to me in the moment, and continue to make me happy now. I also pretty much have two names here myself, anyway.</p>

<h2 id="construction">Construction</h2>

<h3 id="design">Design Notes</h3>

<p>My initial approach to the design of this site was rooted in my own capabilities as a visual artist, which focuses more on minimalism and making use of negative space. I wanted the site to look good, but I didn't want to depend on graphics for that. Graphics serve more as function and substance rather than being mostly decorative: that's how I like to design. And the only graphics I use are obviously Pokemon related in some way - in the sense that it's obvious with a mere glance, even if it's written on the tin. My penchant for minimalism makes those graphics stand out, and therefore also the decision making behind displaying each distinctly Pokemon-related image. </p>

<p>But I'm not being limiting here: this was just my initial approach so I had somewhere to start. A lot of style elements are obviously somewhat Pokemon-related, too, and the use of accompanying graphics makes it achieve that Pokemon feel, rather than just being a box with double borders around it. I like creating things based on an existing media, something already concrete, but adapting my favorite elements of it and my own personal feelings and interpretations to explore the sea of transformation in order to make something new and derivative. I do also like coming up with original ideas like a Greek god birthing from its head - but this website isn't like that. It's a love letter, a time capsule, a personal archive. I want everything about its experience and interface and substance to reflect that. 
</p>

<p>While I have my preference for simplicity and translated some aesthetic motifs across more universal pages for consistency, this website is mostly a place for me to follow my creative whims, wherever they may take me, and whenever that may happen. The flexibility to allow myself to design based on what the pages required rather than what I've already done makes this website feel like an exciting mishmash of all the different types of webdesign that I like, even if they're not necessarily in that minimalistic instinct. I created this website because I thought it'd be cool, and I continue to work on it so I still have that relationship to it, adding things and designing in ways that I, at the very least, think are cool. There's no final version of this site in my head: I improve on it as ideas to improve it come to me, but I have no desire to make it ultimately perfect and unchangeable at any given point. Still, on my old websites I used to change the layouts every three months or so; these days, I'm more interested in seeing how long I can be happy with a design. </p>

<p>Aside from this documentation, I don't spend a lot of words to talk about a lot on other parts of this website. I like to keep things brief, which complements my minimalistic affinities. My feelings are ever-changing, anyway, and while this site basically has my history with Pokemon on display, I don't intend for it to read like an encyclopedia or an informative website. Instead, it's a lot like a museum gallery: the exhibits speak for themselves, and I hope that visitors take something away from it, even if that visitor is just me reminiscing about my first year of college where I spent an entire day in Black 2 looking for a female Eevee. </p>

<h4>Sectional Distinction</h4>

<p>When coming up with the sections and how the visitors interact with the site, I wanted the undeniable identity of this being a Pokemon website not just make itself evident through its content or design, but practically oozing with it. I decided from the jump that everything would use Pokemon terminology in some way, even if that may make it harder to navigate for someone with a different level of familiarity than me. This doesn't impede my ability to make things more accessible anyway, but I also know that that can only go so far when I'm naming everything after Pokemon gimmicks. </p>

<p>What's important to me about this is that everything about a section must be related to its purpose in some way, though it's obviousness or degree of relatability may vary across different sections. But its name must be tied to its design which also must be tied to its content and how I feel about the content, and while I can settle for something that may feel good enough, I don't want less than that. Additionally, I want each section to feel distinct from other sections in some way, when applicable and to relevant degrees. Though this is one website, I want the experience to feel like a sprawling mine of different websites.</p>

<p>The Bag in the gym is essentially an extremely reductionist presentation of these ideas: without explanation, it prompts you to pick an item leading you to another area of the site that you could otherwise access from the more explanatory home page. Though the bag exists out of menu completion, I like that it tests your familiarity with the functional nature of this website  (and Pokemon.) The link names don't always match the name of the sections, largely because I only want the bag to list key items (except for the masterball, of course.) Still, there is some relevance between a section and how it's referred to in the bag. And it's a nice way for me to keep a reference to the guestbook being formerly designed and named as an Xtransceiver. </p>

<h4>Fonts</h4>

<p>I don't really complicate it with the font choices here. Century Gothic was my favorite font when I was younger, but I have a Mac and like the aesthetic display of Futura, which is similar to it, a little more. (It's still Century Gothic on PC though.) Both fonts fit with the minimalism aesthetic in their sans-serif nature, yet have a unique look, as I hope this website feels despite its plainness in parts. </p>

<p>I use other fonts when the content calls for it. The trainer section is styled most similarly to the home and landing page because for all intents and purposes, it *is* the main showcase of this site. The uniformity of font use reflects that. Other sections - the Gym, the Wild Area, the Secret Base - use fonts that better fit the content, and more often than not are monospace, primarily to emulate the video game feel. Inconsolata (the Gym and Fight font) is the font I've used the most on my other websites; chronologically, however, I believe it started here. It's more of my love-for-websites font, which fits with being the font of my site's metadata. </p>

<h4>What's different about this site?</h4>

<p>As I've mentioned before, I have other website projects. This is just one of many, but it's a pretty big one nonetheless, due to the omnipresence of Pokemon in my life. I've made a conscious effort to make this one different in a lot of ways, though, centered around a single idea with a clear focus (Pokemon), while my other projects have more personal or less franchise-driven intents. But I like channeling my more superficial and consumerist tendencies here. </p>

<p>Similarly, a lot of the tactics I've made to both structure and design this website are deliberately different from my other web projects. This tends to come about just due to the nature of this site, even though I'm always thinking about intent and purpose when it comes to design and creation. Some strategies that I've only ever used on this project include:</p>

<ul>
<li>Gradient backgrounds, as I've never really found the need to use it before the Pokemon Go section.</li>

<li>Emulating another existing design and layout idea rather than creating or transforming my own, coming through the Pokemon Go page being reminiscent of the app.</li>

<li>Image mapping in the Secret Base. I've had experience with image mapping before when I was younger and still learning everything, but even that was through my photo editor at the time. I suppose I could still do that with Photoshop, but I'll be honest: I like my websites and code a lot better when I go through the menial process of precision, because I feel like I understand it with more depth this way that otherwise. Since I was younger I'd always understood it in concept, but with my general preference to not depend on graphics, I hadn't found a reason to even want to use image maps. At least, until I made the secret base.</li>

<li>Radio buttons as in-page navigation in the Wild Area. This was brand new for me, relatively speaking, though I had always known how radio buttons worked in code. I didn't have a project to use them on before, so this was an exciting first time using it.</li>

<p>Much like my other sites, Masterball is mostly focused on organizational design with an emphasis on substance, because that's how I operate as an artist and a visual architect. If I were another person I'd say that I could change this around if I ever wanted to - but I won't, because this is just a part of who I am and how my creative brain works. Even with writing, I spend a lot of time thinking about syntax and vocabulary to strengthen my voice and style in prose. I'm consistent, I suppose. And an over-thinker. </p>

<h4>Process</h4>

<p>Beyond conceptualizing and drawing wireframes, the first thing I did was make the index page and create the graphics in Photoshop. I wanted an obvious and visually appealing masterball motif, so I opted to make it more pastel than accurate to game sprites. I'd initially made the vector as a masterball idea to then convert into splash page graphics, and liked it so much that I made linkback buttons out of it right afterward.</p>

<p>I brought this website to life in the order I anticipated each page to be visited. As this was before I'd made the home page, the next thing I worked on was the trainer main page. Tackling it second had a functional use as well, in being a to-do list of sorts for when I would make the game pages shortly afterward. Prior to 2024, I had also cycled through various NPC avatars on the page, most prominently the female Ace Trainer, because I had attributed that trainer class to myself at the time, even though I've never been that interested in battling. I made the "about" portion of the trainer page, at that time an in-page pop-up, sometime between making the game pages, because I wanted to display a party of my favorite Pokemon and needed an excuse to sit those six sprites next to each other.</p>

<p>I created all of my mainline game party pages after that, which started with me whipping out my 3DS and going through my lovingly crafted boxes of old parties and finding game-specific sprites for all of them. I wanted each page to feel like an accurate representation of my experience with the game, as substance-wise that's what it was doing; I wanted it to feel evident through the graphics and design too. I won't go through them game by game because that'll quickly turn redundant. I'd already decided, though retroactively impractically, that I could have a universal CSS to adjust colors on each page while maintaining the blocking logic. I like to differentiate between the generation and the year I played, particularly since I played both Heart Gold and Fire Red out of order. I quickly opted for each game to have a short blurb about my experience with it, as a way to evoke my own memories while appeasing my discomfort at the time of writing about myself in longform. When it came to Pokemon metadata, I wanted to archive everything that felt integral to making my experience with that Pokemon that made it unique, even if it meant doing the tedious work of adding specific balls and ribbons (and their tooltips), as well as working with tables for my non-competitive movesets. I pretty much did the same thing for each game after I had procured the party sprites and started putting the page together to match what I'd envisioned for the structural template.</p>

<p>At least, for the first three. See, when I played Pokemon Platinum, I had a stupid ambition: to beat the game with only one, unevolved starter. That starter was Chimchar, and it ended up working eventually thanks to RNG. I didn't want to display it like the other pages, though, which had more Pokemon. That would make it plain and boring, which conflicted with my playthrough of Platinum, which, however inefficient, was still special to me at the time. So I changed it, even only just a little bit, to tie in that feeling to the webpage.</p>

<p>Then, when I was making the Omega Ruby page a few games afterward, I realized it looked too similar to the original Ruby game. It was also the game I was the most obsessed with at the time, so I wasn't happy with the idea of it looking like a previous party page. I needed it to look different. And with Omega Ruby being a 3DS game and my already existing (though rarely used) knowledge of how to achieve 3D effects with CSS, it led to that natural conclusion. I'd already made the X page (and hadn't yet played Y), so I went back and added the 3D effect to it, too. This later set the precedent for when I made my Let's Go Pikachu page on a plane ride in December 2018, and decided to add borders to the page to similarly represent that it was a game on the switch.</p>

<p>My obsession with Omega Ruby also spurred me into making a separate page for progress in my attempts to 1000% the game. I was particularly proud when, shortly after making this site, I had gotten 1000 flags and could update my secret base graphic to reflect that. Giving myself this flexibility for game-specific subpages also later prompted me to make my collection of shinies during my addiction to raid den exploits in Shield; and though I haven't gone on long-term shiny hunts in Legends Arceus yet, I did hunt a handful that I show off on that game page, too, instead of my collection of shiny Pokemon that I take the 1 in 4096 gamble on every time.</p>

<p>The idea of having a Miscellaneous page was there from the beginning because my main party game box in Pokemon Black - where all my pre-3DS parties were living, at the time -  also had these stray Pokemon, and I wanted to show them off, too. Having a Favorites page wasn't in the original idea but occurred to me sometime during this initial development phase, because I wanted to list my favorite of everything related to Pokemon - I have opinions on characters and ships and mega designs too! - and the Trainer page felt only fitting. The shiny collection was made some months after the project had been launched, because I got obsessed with shiny hunting in Omega Ruby as well as through the Pal Park in XY, and wanted a place to archive those hunts, when successful. </p>

<p>My vision for the "Gym" section was less clear, but was necessary because though I wasn't inclined to writing elaborate documentation like this yet, I knew the importance of public site metadata. It also made sense to be in the Gym, at least in my head. I settled on emulating the battle menu especially as I was pretty happy about the navigation hover effects. I chose to add the sprite of the gym guide from Emerald as well, to set up the idea of it being the "Gym" section along with being a nod to my extensive familiarity with the Hoenn games.</p>

<p>My idea for the gym sections were somewhat vague, aside from "Flee" being an obvious links-out page. "Fight" made the most suitable sense to have the actual breadth of the site metadata, being what you'd click on first and most often when in a Pokemon battle. My design for "Fight" has always been the same since the beginning, though I don't really feel a particular way about it. Its simplicity is necessary to make the content readable, or at least that's what I've been telling myself so I don't have to wrack my brain for ways to make it more creative. I did switch from initially being an ice-type gym leader to a steel-type sometime in 2019, as a result of my Shield shiny hunting hyperfixation. Some friends and I had brainstormed the idea of creating a sort of battle ladder as if we were gym leaders, though it never actually happened. But while we were discussing it, I realized how many steel types I liked, particularly in Galar and with my shiny gigantamax Corviknight. I was happy with the realization that I'd more accurately be a steel type gym leader. It's a stronger typing than ice, anyway.</p>

<p>The original vision for the Bag part of the Gym was to stay in page, but as I didn't trust my knowledge of Javascript at the time, it was a page on its own at first. It also had the site map contained inside of it as a similar looking menu, which was the real purpose of the Bag, though I hadn't been too satisfied when it was done but couldn't think of how to improve on it for years. </p>

<p>I worked on the exit links out section next. I'd really only known a handful of personal Pokemon sites and collectives already so it took me a bit of hunting to find more Pokemon sites that I wanted to link to. When it came to the design portion, I'd actually already made the love ball graphic shortly after being satisfied with how the masterball graphics on the splash page had turned out, and figured using the love ball motif would be cute on the exits page. I remember that I considered some other design ideas, but found that I liked the aesthetic of the Love Ball too much to settle for anything else.</p>

<p>Lastly, I made the Pokemon Go section, which was the Pokemon link in the Gym at the time. I'd put it off for the end because it required me to archive game data again, when the other sections were more about the site. Still, I'd known from the start that I wanted the webpage to look like it had been taken straight from the Pokemon Go app, so I implemented a CSS gradient background, turned my in-game trainer into a PNG, and archived my dex progress by displaying hundreds of sprites on one page. I've updated the trainer info off and on as often as I play Pokemon Go, though I like my current avatar a lot that I don't anticipate changing it much any time soon.</p>

<p>I saved and tested all the webpages locally as HTML and CSS files, then converted them to PHP and uploaded the entire project via FTP at the end. I will note that these days, however, I upload via Github Desktop, so now I can skip a few steps.</p>

<h5>Scrapped/Initial Plans</h5>

<p>This website has gone through a lot of changes, both big and small, despite the amount of things that have also stayed the same. Here's a list of design and organizational choices I had made for previous iterations of this project that are no longer present:</p>

<ul>
	<li>The front page used to be the main navigation, with Trainer and Gym linked on the grey line of the ball.</li>
	<li>I originally planned for there to be a "Someone's PC" in the navigation as well, with the anticipation that I may be interested enough in making shrines or fanlistings. I removed this when I realized I couldn't convince myself to even pretend to be interested in the idea.</li>
	<li>Before it was mobile responsive, the mobile version of the front page was designed like a premier ball (much like the front page masterball or the exit links love ball), notifying the visitor that the site was not responsive yet.</li>
	<li>The color scheme in the Trainer section used to be light blue and white, fitting with the female Ace Trainer sprite in Pokemon Omega Ruby.</li>
	<li>The autobiographical Trainer section used to be an in-page pop up, but I decided to make it its own page during my November 2024 update instead, now that I was more confident writing about myself at length. My about section now has fun trainer cards made online , an explanation of why I like each of my favorite top 6 Pokemon so much, and Pokemon-related fun facts about myself.</li>
	<li>The Favorites page used to be themed after a design of the Furisode NPC from Pokémon X/Y, but sometime between 2021 and 2023 I decided I liked Clair more and reworked the colors.</li>
	<li>Fighting the gym used to have a contact form, but I wasn't too happy with it and eventually removed it. </li>
	<li>My old gym ice-type team was Alolan Sandslash, Alolan Ninetales, Aurorus, Weavile, Mega Glalie, and shiny Walrein as a reference to Walrein being my first ever shiny Pokemon. I also cycled in Regice, Froslass, and Frosmoth at points.</li>
	<li>I used to have Bisharp in the gym because for a while, it was one of my top 6 favorite Pokemon. But the way I pick my favorite Pokemon isn't just in aesthetic design, but also by evolution stage. I'm a lot more drawn to final evolutions, and only prefer pre-evolutions if I have nostalgia for them or like the design immensely. Even more rarely do I ever pick middle evolutions over the final or first stage at all. I was drawn to Bisharp when I was 16 for no reason other than sharing some physical traits with it, but I started to forget about it over time. And then when Scarlet/Violet released Kingambit, Bisharp felt like a different Pokemon to me, and I knew I didn't think of it as one of my favorites anymore.</li>
	<li>The Bag used to be on a separate page with the Town Map, but is now contained in the Gym page with its only purpose being a navigation of quick links.</li>
	<li>The Pokemon Go section used to have IRL "gyms" that I had conquered, but I decided to remove it as it felt a little too doxxy for my liking. Gyms in Go don't work like that anymore, anyway.</li>
	<li>As cited earlier, the Pokemon link in the Gym used to go to the Pokemon Go page. It now is in the Wild Area section with archives of other Pokemon mobile games I play and find interesting enough to archive there. (I say this because I used to be into Magikarp Jump, but what would I even put about that here...?) For a brief spell while I was deliberating, the mobile games section was the Pokemon link, but I decided to make that its own section and have the Pokemon page be a fun collage of adoptables and cliques instead. </li>
	<li>The guestbook was added in the November 2024 update, but emulated the design of the Xtransceiver in Diamond/Pearl/Platinum. I changed the design to something that I felt happier with in my February 2025 update.</li>
	<li>My error page used to have a white background, but now it's all black.</li>
</ul>

<h5>November 2024: The Responsive Update</h5>

<p>I'd known how to make my code responsive before I even started this website. But - and this isn't the first place I'm complaining about it - I don't like making my designs responsive, even though I absolutely understand its necessity. It's generally about resizing in a preset boundary with barely any reason to make decisions when it comes to aesthetic design, and therefore is webdesign but without the part that's actually fun to me.</p>

<p>When I launched the site, I knew I'd want to make it responsive. Eventually. But I really didn't want to, especially as doing that meant not just making one style responsive, but multiple, with all the different quirks I had per page. So I put it off for a long time. For over seven years, at that.</p>

<p>It was shortly before American Thanksgiving - and after I'd moved this entire site to a Github repository, so I could just update it locally - when I got the aforementioned email about taking navigation accessibility into more consideration that spurred me not only to reorganize, but also to sit my ass down and make this site responsive like I knew I wanted it to be for ages, despite my gripes with the process. But I thought of it as a fun and practical makeover, especially since I knew I could do better, and how, and why, so I might as well. Not to mention that my brain was swirling with webdesign brainrot that I put this particular long-term task off by working on so many other website projects in the meantime. Finally, I told myself, alright, I guess it's time to do this.</p>

<p>I edited a lot of the stuff in the Scrapped Plans list during this update, including:</p>

<ul>
<li>The index page, originally the main navigation, became a splash page that led to</li>
<li>The home navigation, a brand new page with a more straightforward method to navigate  </li>
<li>The look of the Trainer page and its associated NPC</li>
<li>Creating and writing a lengthier separate autobiographical section</li>
<li>Using my better understanding of Javascript functions to convert the gym bag into an in-page pop-up like I'd always wanted</li>
<li>Created a much-needed accessible site map</li>
<li>Added a guestbook (Xtransceiver style)</li>
<li>Wrote the first draft of this documentation</li>
<li>And, of course, made each page and design responsive to screen sizes.</li>

</ul>

<p>Though I was initially motivated by the necessity of accessibility, this update soon turned into thinking of ways that I could develop this website even more. After being online for so many years with so few updates, I knew it was starting to feel too stale for my liking. Now that I was reorganizing everything, I could imagine not only how I could make it better, but also more interesting - more fun, more creative, more me. The creation of the home page especially helped with this, no longer limiting myself ot the diametric options of just "Trainer" and "Gym." And, well, I guess the ball button.</p>

<p>It helped that I'd gotten really into PokeRogue some months previous and wanted to find a way to work my runs onto this website. I was starting to get into TCG Pocket, too, and liked the idea of translating my rare collection from the game into a webpage, since it was a lot more accessible and affordable than the real life cards, which I hadn't been that interested in after kindergarten. I didn't actually add these subpages yet, but making this site more navigable gave me new ideas that I could make if I wanted to, and add them to the home navigation if I ever did. I was happy with this update, but even more than that I had set up ways to expand this site even further in the future.</p>

<p>I worked on this all through my Thanksgiving holiday in 2024, while my mom was visiting me. This isn't that important, but that memory will forever be tied to that development stage of this site now.</p>

<h5>February 2025: The Wild Area & Secret Base Update</h5>

<p>I had TCGP and PokeRogue as the elements of this site that I would work on next. But as I had a lot less to show about PokeRogue, and a lot more with TCGP due to my luck with pulls, I decided to work on the TCGP page. I ran into some creative difficulties in the process since I barely had even a visual idea of how I wanted it to look, just that it should be as true and necessary as any other section. I settled on the motif of a binder of cards but still displayed as a vertical scrolling webpage to emulate the mobile app feel, with a large empty section to showcase the binder image as its cover. The background was an annoying point of indecision that I put off until the end. Eventually I realized that a wood pattern would make it look like a binder on a desk and enhance that vibe even more.</p>

<p>When I linked it from the home page like I'd planned to in November, it felt wrong in a lot of ways. For one, it would be the only one-page archive linked to from the home navigation, while Pokemon Go was in the Gym and everything else was in Trainer. For another...as much as I dreaded admitting it, it would actually be better suited in a section <i>with</i> Pokemon Go, and the Pokemon section should link to something else. I was annoyed with realizing this, though, because that meant I had to think of something else to replace it, and that was frustrating when I couldn't just make the idea magically manifest in my head as they often did at other times. </p>

<p>Still, I knew what felt right, so despite my lack of ideas I made the navigation of putting the Go and TGCP sections together, in what's now known as the Wild Area. But it was Pokemon in the gym first, which was also how I came up with the idea of making it look like the starter selection screen in Pokemon Ruby/Sapphire/Emerald, since you're literally picking a Pokemon in that screen. It didn't take a lot for me to figure it out, functionally. Soon after considering the starter selection screen as this new navigational page's aesthetic motif, I remembered that I'd been wanting to employ the logic of radio buttons as in-page navigation for an eventual project, and they were basically perfect for each other. Once I made it work, I was happy with it immediately and kept it accessible through Pokemon. But in my heart I knew it was too big - even with only two subpages - for a section that was supposed to be site-related and small, so I was going to move it. I just needed to think of something to replace it first.</p>

<p>So I asked <a href="https://situations.neocities.org">a friend</a> if she wanted to help me brainstorm page ideas, since we tend to brainstorm all sorts of bullshit together. She suggested having a little pet feeder adoptable, and then I expanded that idea into even more cliques and adoptables. And then as I was hunting for Pokemon sprites and PNGs to adopt, I came across <a href="https://newlambda.neocities.org/games/pokemon">newlambda's Pokemon shrine</a> and it gave me the aesthetic inspiration I needed to know how I wanted to organize this page, especially with having a game overworld image as the background. I chose Route 104 from the original Hoenn games because it's both nostalgic and extremely distinct for me. This section is more for posterity than anything else, but I'll admit that I love the idea of having just one page on this otherwise pretty minimalistic website that looks so maximized.</p>

<p>From there, I had a new page for Pokemon, and also a brand new section with a new subpage of its own: the Wild Area for mobile games. Because playing in the real world is like wandering into tall grass, I guess. </p>

<p>While I had been wracking my brain for more page ideas just to fill out Pokemon, a few more ideas occurred to me, though they weren't really applicable for the subsection. Instead, they were whole new sectional ideas: moving PokeRogue into a wider fangames section (therefore, I can put it off until I play more fangames), and a Secret Base of my IRL trinkets. I'd been considering creating a section for all of my trinkets on my personal website; but I also have a lot of Pokemon merch, so I realized that hey, I could make a page like that here, too. The only excuse I could give myself to procrastinate on it was that I'd ideally like to have a customized Secret Base used as navigation but couldn't make it that easily on my computer yet...and then I found <a href="https://pamtre-berry.neocities.org/fun/secretbase#">Pamtre-Berry's Secret Base maker</a> which had somehow escaped my notice ages before that very moment. So I no longer had that excuse.</p>

<p>So over Super Bowl weekend in 2025, I locked in and made it. I didn't have a concrete idea for how I wanted it to look or function design-wise yet, but I knew that my online-made secret base would at least inspire it, if not be a part of it. I started with creating a secret base like I would in-game and trusted that the rest of my ideas would follow. </p>

<p>And wouldn't you know it? It worked. From making the base online I implemented the idea of my merch being in two separate "rooms," distinct by intuitive association. I created what the conclusion of the secret base would look like first, then moved the items that I wanted to be the navigational buttons so what remained was for practical usage on the site. I'd listed beforehand how I wanted my things to be divided by category, so I knew how many navigational items I needed to take away and later download and edit to operate as image-mapped links. I hadn't done image mapping in a while and never really had the experience doing so manually, but I was happy to do it because I knew how I wanted it to look, and precisely how I could code it to get it there. </p>

<p>After that, I settled on the base background being the page background, then the content being a brown square before slowly and surely, the more I made it look like a corkboard, the happier I became with it. I found and took pictures of all of my Pokemon things and turned them into PNGs which was certainly a task in and of itself. I also decided to use iframes to display them as I think it's kinder for each page load. I really don't like designing with the colors green <i>or</i> brown, but the breadth and uniqueness of this section's design makes me feel especially proud of it now that it's done.</p>

<p>The Secret Base was a day-long project; I passed out early on Sunday morning. I woke up several hours later suddenly with an idea of how to make the guestbook look cuter in a way that I liked. So I worked on it immediately, after being asleep barely 10 minutes prior, now looking up PNGs of Gabby and Ty from Ruby/Sapphire/Emerald and creating a design I was a lot more fond of than its initial Xtransceiver layout. I was pretty much done by the end of the weekend, and it felt quite fitting as this was also around the eighth anniversary of this website's launch. </p>

<h2>Site Walkthrough</h2>

<p>Upon entering the site, the visitor gets presented with the image of a large masterball and the instruction to open it (or click on an adjoining link) to begin one's journey on the website.</p>

<p>Doing so will lead you to the main navigation, or Home — a hub of all the main sections of this site, along with a small description of each. Webrings, my GPX party, documentation, splash page, and web portal are linked in the footer.</p>

<p>The sections on the Home navigation are:</p>

<ol>
	<li>Trainer</li>
	<li>Gym</li>
	<li>Wild Area</li>
	<li>Secret Base</li>
	<li>Amie</li>
	<li>Map</li>
</ol>

<p>1. <b>Trainer</b>, listed at the top, is the main showcase of the site as a mini-archive of my parties across all played games. Each page lists:</p>

<ul>
	<li>The game and its generational release</li>
	<li>The year played and name of region</li>
	<li>A small blurb about my experience with the specific game</li>
	<li>My primary party of any playthroughs (usually one),  including each Pokemon's species, nickname, gender, ball caught, ability, nature/characteristics, IVs and ribbons (if relevant), and moves. Each Pokémon's metadata is accompanied by a game-appropriate sprite.</li>
	<li>Additional interests and time-sinkers in the same playthrough, including shiny collecting or specific goals (like secret bases and trainer card colors.)</li>
</ul>

<p>Clicking on "Trainer Battle" in Trainer directs the visitor to a small autobiographical section about myself as a Pok&eacute;mon fan, why I think I would be the respective NPC in the Pok&eacute;mon world, a small blurb of why each of my favorite six Pokemon are my favorites, digital trinkets related to me as a Pokemon trainer, and fun facts about me. This page is a dead end and only navigates back out to the main trainer page.</p>

<p>Other pages listed in the trainer section are:</p>

<ul>
	<li>Miscellaneous, for non-main party Pokemon that are significant to me</li>
	<li>Favorites, of everything Pokemon related</li>
	<li>Shiny Gallery, for my 1-in-4096 (or more) shinies</li>
</ul>

<p>Visitors can leave the Trainer section by avoiding eye contact.</p>

<p>2. <b>Gym</b> is the second page listed in the Home navigation, and contains pages relevant to the site's identity. Navigating the gym requires the visitor to rely on their intuition to figure out where each option will take them. </p>

<p>Fight directs to the main site information page, which has an in-page menu of clickable shiny Pokemon. This menu further expands into the following sections:</p>

<ul>
	<li>Updates, directing to a dreamwidth journal as this site's update log as well as its Github repository</li>
	<li>My Friend Codes and notes on contacting me as the webmaster</li>
	<li>An overview of me and Pokemon in my real life, particularly as a franchise</li>
	<li>A brief summary of the website, both in intent and semantics</li>
	<li>Linkback buttons</li>
	<li>Navigation to other site metadata not listed on this page</li>
</ul>

<p>Bag toggles into an in-page subpage of the Gym as a menu of quick links around the site. This is to quickly access other sections without needing to go back to the home menu, and fits with the idea of needing to open your bag if you need resources during a battle. There is also a link back to the home menu. </p>

<p>The links are:</p>

<ul>
	<li>Bicycle, for flavor text.</li>
	<li>Town Map, for the sitemap. It is listed second in case the visitor is lost.</li>
	<li>Vs. Seeker, for Trainer.</li>
	<li>Exp. Share, for the Wild Area.</li>
	<li>Basement Key, for the Secret Base.</li>
	<li>Xtransceiver, for the Guestbook.</li>
	<li>Masterball (which is not a key item), for the Home navigation.</li>
</ul>

<p>Closing the bag will indeed close the bag.</p>

<p>The Pokemon option in the gym directs to a page of digital adoptables in the form of images, as well as cliques, similarly themed widgets, and any other graphics I make related to a particular Pokemon species. </p>

<p>Run directs to exit links out in the form of a button wall. Pokemon sites are selected to be shared here based on my interest in their content and design, especially if I've affiliated with them. Other links are independent Pokemon sites useful to fans, and archived links through the Wayback machine.</p>

<p>3. The <b>Wild Area</b> is a hub of my mobile game archives. Each pokeball serves as a navigation link, opening up an explanation for what mobile game that section will lead to. Currently, there are only two. The third pokeball appears to be empty.</p>

<p>The first ball leads to the Pokemon Go archive, listing my public player information if you were to add me. My selected Go team is also evident in its design. The bulk of the page contains my pokedex progress in Go, with unseen Pokemon invisible, seen but not caught Pokemon somewhat transparent, and caught Pokemon fully opaque. This page is a dead end and only navigates back out to the Wild Area.</p>

<p>The second ball leads to the Pocket Trading Card Game archive, listing my public player information if you were to add me. It contains the in-game graphic I selected as the cover of my main binder. Scrolling down will show you an archive of all my rare cards, which can be hovered over to see at full opacity. This page is a dead end and only navigates back out to the Wild Area.</p>

<p>Visitors can leave the Wild Area by retreating from the tall grass.</p>

<p>4. The <b>Secret Base</b> is a display of my real life Pokemon merch. Each page can be navigated through the Secret Base in the top left via highlighted furniture items, or the text navigation below it. The landing page is reminiscent of a corkboard, with some guidance in navigating. All internal pages open in an iframe.</p>

<p>Each page of trinkets contains PNGs of all respective items, as well as a sentence or two explaining the item as well as the context of my ownership, if interesting. The About section (the PC in the Secret Base) contains a backstory on my ownership for many of the items, in the context of my life. </p>

<p>Visitors can leave the Secret Base by clicking on "Exit" in the text navigation. There is no adjoining link through the Secret Base furniture, to prevent navigation confusion.</p>

<p>5. <b>Amie</b> directs to the Guestbook, based on the idea of friendliness and interaction. Visitors can sign the guestbook, and read through messages other visitors have left. Closing the guestbook redirects to the Home. The footer contains additional links to the site map and documentation.</p>

<p>6. The <b>Site Map</b> is a hierarchal list of all pages on this website. It also contains some explanations for smaller sections that are not accessibly and summarily explained on their respective page. There is no further navigation here, as the map itself is navigation. The Github repository and documentation are linked here as well.</p>

<h3>Future Plans</h3>

<ul>
	<li>Victory Road for fangames, including PokeRogue.</li>
	<li>Something with a Konami code…?</li>
	<li>I'll play Ultra Moon and Violet eventually.</li>
	<li>Update and/or reconfigure the Go dex (maybe.)</li>
	<li>Convert main game party pages to root styles (maybe.)</li>
	<li>Commission art for the gym and redesign it (maybe.)</li>
	<li>Make a timeline (maybe.)</li>
	<li>If I ever play spinoff games enough to want to archive them here, they'll be in a section called "Battle Frontier" because dude, I really like Emerald, okay. Its bag link will be the S.S. Ticket.</li>
</ul>

<h3>End Credits</h3>

<ul>
	<li><a href="https://play.pokemonshowdown.com/sprites/">Pok&eacute;mon Showdown</a> for trainer sprites and animated Pok&eacute;mon sprites</li>
	<li><a href="https://bulbapedia.bulbagarden.net/">Bulbapedia</a> for information (including the Pok&eacute;mon Ranger blurb) as well as high-res PNGs of trainers/trainer classes, ribbons, balls, and a lot else</li>
	<li><a href="https://www.spriters-resource.com/">The Spriters Resource</a></li>
	<li><a href="https://serebii.net">Serebii</a></li>
	<li><a href="https://pokemondb.net">Pok&eacute;mon Database</a></li>
	<li><a href="https://tiermaker.com/create/every-pokmon-ever-fall-2020-all-dlc-601526?downloadedImage=true">Every Single Pokémon Ever (Official Art) Tier List Maker</a></li>
	<li><a href="https://shipping.bulbagarden.net/listaz.html">The Shipping List</a> on Bulbagarden</li>
	<li><a href="https://msikma.github.io/pokesprite/">msikma's pokesprites</a></li>
	<li><a href="https://www.pkparaiso.com/espada_escudo/sprites_pokemon.php">PkParaiso</a> for game-specific sprites particularly in later games</li>
	<li><a href="https://virtualobserver.moe/ayano/comment-widget">Comment widget by Virtual Observer</a> for the guestbook</li>
	<li>Secret Base made with the <a href="https://pamtre-berry.neocities.org/fun/secretbase#">Secret Base Maker on Pamtre-Berry</a>. Additional graphic credits are in the Secret Base "about" section.</li>
	<li>I found the graphic for the Pok&eacute;mon Go Valor vector ages ago, though could not tell you now where or how I got it beyond a simple Google search.</li>
	<li>Photoshop 2024 &mdash; ball page backgrounds were handmade by me</li>
	<li>Github Desktop</li>
	<li>SublimeText</li>
	<li>Google Chrome and Firefox, as well as Color Picker (Chrome) and Colorzilla (Firefox) when I needed to grab a color on a webpage and was feeling lazy.</li>
	<li>Nintendo SP, DS, 3DS, Switch 1.0, and Switch OLED (Splatoon version)</li>
</ul>

<p>The Gym &rarr; Pokemon section has its own list of credits, as it is a page of things I've collected from other people's websites.</p>

<h2>Disclaimers, Privacy, & Accessibility</h2>

<p>Though I have done my best, some webpages on this site do not have a fully accessible color contrast ratio but do not require the visitor to spend more than a minute or so of reading.</p>

<p>This website was made for creative and entertainment purposes. I am not receiving anything monetarily through this website. No copyright infringement intended.</p>

<p>See <a href="https://aroceu.com/docs">my full documentation</a> for further notes regarding privacy.</p>

</div>

</div>

<div id="footer">
	<p align="center">&copy; 2017-<?php echo date("Y"); ?> <img src="https://icirr.us/mb.png" alt=""> <a href="https://github.com/aroceu/icirrus">View on Github</a> <img src="https://icirr.us/mb.png" alt=""> <a href="https://icirr.us/home">Home</p>
</div>

</body>