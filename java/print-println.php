<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ωm Rαј - Java Tutorial</title>
<meta name="theme-color" content="#1976d2"/>
<meta name="description" content="Programming Language: Java, Method: print() and println(), Topic: Core Java, Chapter: Printing Statements, Author: Om Raj"/>
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
<h1 class="mb-5">Print Statements</h1>
<p>There are mainly two ways in Java to print on the console.</p>
<ul class="mb-5">
<li><dt>print( )-</dt><dfn>Prints the value given inside parenthesis '()' onto the console and the <b>cursor remains on the same line.</b></dfn> </li>
<li><dt>println( )-</dt><dfn> It also prints the value on the console but the <b>cursor moves to the next line.</b></dfn></li>
</ul>
<h2>print( )</h2>
<p>As discussed above, it prints the value and tells the cursor to reman on the same line.</p><br>
<h5>Syntax :-</h5>
<pre class="mb-5">
<code class="language-java">System.out.print( &lt;Some Value&gt; );</code>
</pre>
<p>You can perform operations on operands inside the parenthesis and display their outcome without having to store them.</p>
<h5>Example :-</h5>
<pre class="line-numbers mb-5">
<code class="language-java">System.out.print( 5 + 6 );
System.out.print( "Hello" + " " + "World!");
System.out.print( 355.0/113 );</code>
</pre>
<h5>Output :-</h5>
<div class="output">
<label>Console</label>
<div class="screen">
<pre>11Hello World!3.1415929203539825</pre>
</div>
</div>
<h2>println( )</h2>
<p>This Java method prints the value and then automatically moves the control to the next line for further execution.</p><br>
<h5>Syntax :-</h5>
<pre class="mb-5">
<code class="language-java">System.out.println( &lt;Some Value&gt; );</code>
</pre>
<p>Just like <code>print()</code> you can perform operations on operands inside the parenthesis and display their outcome without having to store them. The only difference here is that it prints the values in different lines.</p>
<h5>Example :-</h5>
<pre class="line-numbers mb-5">
<code class="language-java">System.out.println( 5 + 6 );
System.out.println( "Hello" + " " + "World!");
System.out.println( 355.0/113 );</code>
</pre>
<h5>Output :-</h5>
<div class="output">
<label>Console</label>
<div class="screen">
<pre>11
Hello World!
3.1415929203539825</pre>
</div>
</div>
<h2>Escape Sequence Characters</h2>
<p>A character <b>preceded by a backslash</b> (\) is an escape sequence and has special meaning to the compiler.</p>
<h5>Example :-</h5>
<pre class="line-numbers mb-5">
<code class="language-java">/* The code written after \n is printed on the next line */
System.out.println( "This will be on first line\nThis will be on second line" );
/* The \t escape sequence character is used to print tab spaces */
System.out.println( "H\tE\tL\tL\tO\t!");
/* The \" escape sequence character is used to print a double quotation mark (") */
System.out.println( "\"Double Quotes\"" );
/* The \' escape sequence character is used to print a single quotation mark (') */
System.out.println( "\'Single Quotes\'" );</code>
</pre>
<p class="alert alert-warning mb-5"><i class="fa fa-warning pr-3"></i><span> The newer versions of Java now support printing of single quotation mark (') without using the <b>\'</b> escape sequence character. However, using it does not give any error.</span></p>
<h5>Output :-</h5>
<div class="output">
<label>Console</label>
<div class="screen">
<pre>This will be on first line
This will be on second line
H	E	L	L	O	!
"Double Quotes"
'Single Quotes'</pre>
</div>
</div>
<h4>List of Escape Sequence Characters</h4><br>
<table class="table-bordered mb-5" style="line-height:1.5rem;overflow-x:auto">
<thead>
<td>Characters</td>
<td>Description</td>
</thead>
<tbody>
<tr>
<td><code>\t</code></td>
<td>Insert a tab in the text at this point.</td>
</tr>
<tr>
<td><code>\b</code></td>
<td>Insert a backspace in the text at this point.</td>
</tr>
<tr>
<td><code>\n</code></td>
<td>Insert a newline in the text at this point.</td>
</tr>
<tr>
<td><code>\r</code></td>
<td>Insert a carriage return in the text at this point.</td>
</tr>
<tr>
<td><code>\f</code></td>
<td>Insert a formfeed in the text at this point.</td>
</tr>
<tr>
<td><code>\'</code></td>
<td>Insert a single quote character in the text at this point.</td>
</tr>
<tr>
<td><code>\"</code></td>
<td>Insert a double quote character in the text at this point.</td>
</tr>
<tr>
<td><code>\\</code></td>
<td>Insert a backslash character in the text at this point.</td>
</tr>
</tbody>
</table>
<div class="clearfix mb-5">
<a href="basic-syntax.php"><button type="button" class="float-left btn btn-success" aria-label="Previous Topic">❮ Previous</button></a>
<a href="print-statement.php"><button type="button" class="float-right btn btn-success" aria-label="Next Topic">Next ❯</button></a>
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
