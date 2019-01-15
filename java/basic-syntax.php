<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ωm Rαј - Java Tutorial</title>
<meta name="theme-color" content="#1976d2"/>
<meta name="description" content="Programming Language: Java, Content: Java Syntax Rules, Topic: Core Java, Chapter: Basic Syntax, Author: Om Raj"/>
<link rel="shortcut icon" href="../../favicon.ico">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="../syntax_highlighter/prism.css">
<link rel="stylesheet" href="../../master.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="overflow-x: hidden;">
<?php include '../../nav.php';?>
<?php include 'sidebarnav.php';?>
<div class="sharethis-inline-share-buttons"></div>
<div class="container mt-5 pt-5"id="main">
<span onclick="openNav()" class="fa fa-angle-right" id="openbtn"></span>
<h1 class="mb-5">Java Basic Syntax</h1>
<p>Java is a <b>case-sensetive language</b> which means that it considers "JAVA", "java" and "Java" as different words</p>
<pre class="line-numbers mb-5">
<code class="language-java">int tax = 5; // 5 is stored in variable 'tax'
int Tax = 10; // 10 is stored in variable 'Tax'
int TAX = tax + Tax;  // Value of 'TAX' is 15</code>
</pre>
<p>We write Java <b>keywords in lowercase</b></p>
<pre class="line-numbers mb-5">
<code class="language-java">/* All the keywords (in blue) are in lowercase */
class Demo
{
  final byte TAX = 16;
  public void DISPLAY(long n)
  {
    System.out.print("Tax to be payed :"+(TAX / 100.0 * n));
  }
}</code>
</pre>
<p>Every valid Java statement <b>must end with a semicolon (;)</b></p>
<pre class="line-numbers mb-5">
<code class="language-java">String text1 = "Hello";
String text2 = "World!";
String str = text1 + " " + text2; // str stores "Hello World!"
System.out.print(str); // Print str</code>
</pre>
<p>A group of statements (i.e. <b>Block</b>) must be enclosed in <b>curly braces "{ }"</b></p>
<pre class="line-numbers mb-5">
<code class="language-java">class Demo
{
  hello()
  {
    // Some statements here.
  }
  disp()
  {
    // Some statements here.
  }
}</code>
</pre>
<p>Any Java keyword or reserved literal <b>cannot be used as identifier</b></p>
<pre class="line-numbers mb-5">
<code class="language-java">double null = 3.14; // This will generate error because "null" is a reserved literal
String class = "XIII"; // This will generate error because "class" is a Java keyword</code>
</pre>
<p class="alert alert-primary mb-5"><i class="fa fa-star pr-3"></i><span> You can find the complete list of Java keywords in our <a href="#">Keywords</a> topic and reserved literals in <a href="#">Identifiers &amp; Literals</a> topic.</span></p>
<div class="clearfix mb-5">
<a href="index.php"><button type="button" class="float-left btn btn-success" aria-label="Previous Topic">❮ Previous</button></a>
<a href="print-statements.php"><button type="button" class="float-right btn btn-success" aria-label="Next Topic">Next ❯</button></a>
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
<script src='//platform-api.sharethis.com/js/sharethis.js#property=5b94db8291dd55001190641a&product=inline-share-buttons'></script>
<script src="../syntax_highlighter/prism.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</body>
</html>
