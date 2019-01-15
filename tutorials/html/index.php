<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ωm Rαј - HTML Tutorial</title>
<meta name="theme-color" content="#1976d2"/>
<meta name="description" content="Programming Language: HTML, Content: HTML Wiki First Website, Topic: Basic HTML, Chapter: Introduction to HTML, Author: Om Raj"/>
<link rel="shortcut icon" href="../../favicon.ico">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="../syntax_highlighter/prism.css">
<link rel="stylesheet" href="../../master.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="overflow-x: hidden;">
<?php include '../../nav.php';?>
<?php include 'sidebarnav.php';?>
<div class="sharethis-inline-share-buttons"></div>
<div class="container mt-5 pt-5"id="main">
<span onclick="openNav()" class="fa fa-angle-right" id="openbtn"></span>
<h1 class="mb-3">What is HTML?</h1>
<img src="Images/html5.png"alt="HTML-5 Logo"class="float-left m-1">
<div class="mb-4">
<p>
Hypertext Markup Language (HTML) is the standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS) and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.
</p>
<p>
Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.
</p>
</div>
<p class="alert alert-primary mb-5"><i class="fa fa-star pr-3"></i><span>If you want to learn more about CSS or JavaScript, then go to <a href="#">CSS Tutorial</a> or <a href="#">JavaScript Tutorial</a>.</span></p>
<h5>Here an example of a webpage written in HTML :-</h5>
<div class="embed"><iframe class="iframe"title="Webpage Template"src="demo/html-demo-webpage.htm"width=100% height=480px></iframe></div>
<h1>Development</h1>
<p>
In 1980, physicist Tim Berners-Lee, a contractor at CERN, proposed and prototyped ENQUIRE, a system for CERN researchers to use and share documents. In 1989, Berners-Lee wrote a memo proposing an Internet-based hypertext system. Berners-Lee specified HTML and wrote the browser and server software in late 1990.
The worlds first webpage created using HTML can be found <a href="http://info.cern.ch/"target="_blank"alt="World's First Website"rel="noreferrer">here</a>.</p>
<img src="Images/info.cern.ch.png"alt="World's first webpage."class="mb-5 screenshot">
<h1>Make a HTML Webpage</h1>
<p>To make a simple webpage, you just need a text editor. So, open your text editor and type the following code in it.</p>
<pre>
<code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;!-- Heading --&gt;
&lt;h1&gt;My First HTML Webpage&lt;/h1&gt;
&lt;!-- Paragraph --&gt;
&lt;p&gt;Hello world!&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
</pre>
<p class="mt-5">Now save the file with a <code>.htm</code> or <code>.html</code> extension.</p>
<img src="Images/html-saveas.png"alt="Save the file"class="mb-5 screenshot">
<p>Finally, to view your webpage open the saved file using any web-browser.</p>
<div class="output">
<label>Example :-</label>
<iframe class="iframe"title="Output Webpage"src="demo/html1.htm"width=100%></iframe>
</div>
<h2>Used Tags</h2>
<table class="table-bordered mb-5"style="line-height:1.5rem;overflow-x:auto">
<thead>
<td style="width:9rem;">Tag Name</td>
<td>Description</td>
</thead>
<tbody>
<tr>
<td><code>&lt;!DOCTYPE&nbsp;html&gt;</code></td>
<td>It is a self-closing tag which tells the web-browser that the latest version of HTML( i.e. HTML-5 ) is used in making this webpage.</td>
</tr>
<tr>
<td><code>&lt;html&gt;</code></td>
<td>It is the main and outermost tag which contains all other HTML tags. It also contains scripts, meta-data, stylesheets and head of the webpage.</td>
</tr>
<tr>
<td><code>&lt;body&gt;</code></td>
<td>It defines the body or structure of the webpage which is directly visible to the user. It contains the content to be displayed.</td>
</tr>
<tr>
<td><code>&lt;h1&gt;</code></td>
<td>It is the largest heading tag of the six heading tags( H1-H6 ) used in typography. It is used to display a heading. It is a block element.</td>
</tr>
<tr>
<td><code>&lt;p&gt;</code></td>
<td>It is used to enclose a paragraph. It is a block element.</td>
</tr>
</tbody>
</table>
<div class="clearfix mb-5">
<a href="../index.php"><button type="button"class="float-left btn btn-success"aria-label="Previous Topic">❮ Previous</button></a>
<a href="title-and-favicon.php"><button type="button"class="float-right btn btn-success"aria-label="Next Topic">Next ❯</button></a>
</div>
</div>
<script>var x=document.getElementById('sbn0');
x.classList.toggle("btn-primary");
x.style.color = "#fff";
function openNav() {
  document.getElementById("sidebarnav").style.left = "0px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.2)";
  document.getElementById("sidebarnav").style.backgroundColor = "white";
}
function closeNav() {
  document.getElementById("sidebarnav").style.left = "-225px";
  document.body.style.backgroundColor = "white";
}
</script>
<script>document.getElementById('sbn0').style="background-color:#1976d2;color:#fff;"</script>
<script src='//platform-api.sharethis.com/js/sharethis.js#property=5b94db8291dd55001190641a&product=inline-share-buttons'></script>
<script src="../syntax_highlighter/prism.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</body>
</html>
