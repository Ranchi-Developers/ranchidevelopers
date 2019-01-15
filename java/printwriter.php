<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ωm Rαј - Java Tutorial</title>
<meta name="theme-color" content="#1976d2"/>
<meta name="description" content="Programming Language: Java, Method: print() and println(), Topic: Core Java, Chapter: PrintWriter class, Author: Om Raj"/>
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
<h1>PrintWriter Class</h1>
<p class="mt-4">Earlier we had studied about <b>System.out.print( )</b> and <b>System.out.println( )</b> methods for printing. Now, we are going to discuss another powerful tool which can be used for writing to the console when using Java through the PrintWriter class. The PrintWriter is a character based class. Using a character based class for the console output makes your program more productive and standard.</p>
<p class="alert alert-primary mb-5"><i class="fa fa-star pr-3"></i><span> The <b>System.out.println( )</b> or <b>System.out.print( )</b> is still recommended to display the output on the console in JDK 1.5 version.</span></p>
<h5>Syntax :-</h5>
<pre class="line-numbers mb-5">
<code class="language-java">/* First create an object of PrintWriter class to access its printing methods */
PrintWriter pw = new PrintWriter(OutputStream output, boolean flushIfNewline);
pw.print( &lt;Some Value&gt; ); // Using print() method
pw.println( &lt;Some Value&gt; ); // Using println() method</code>
</pre>
<h5>Explaination :-</h5>
<p>Here, output is an object of <code>OutputStream</code> type and <code>flushIfNewline</code> controls the java system to flush (empty) the output stream object every time when a new line <code>\n</code> character is printed. To flush automatically, <code>flushIfNewline</code> is applied <code>true</code>. If <code>false</code> then flushing is not automatic.</p><br>
<h2>Advantages of PrintWriter</h2>
<ul class="mt-4 mb-5">
<li>PrintWriter allows the methods print( ) and println( ) for all types including objects.</li>
<li>You can use these methods in the same way as they have been used by System.out.</li>
<li>If an argument is not a simple type, the PrintWriter methods call the objects toString( ) method then prints the result.</li>
</ul>
<h2>Using PrintWriter</h2>
<p>To write to the console by using PrintWriter, specify System.out for the output stream and <b>flush the stream after each newline.</b></p>
<h5>Example :-</h5>
<pre class="line-numbers mb-5">
<code class="language-java">/* Application of PrintWriter class */
import java.io.PrintWriter; // Imports the PrintWriter class
class Demo
{
    public static void main(String args[])
    {
        /* Creating the PrintWriter object */
        PrintWriter pw = new PrintWriter( System.out, true);
        pw.println("Hello World!");
        pw.println("Value of PI is = "+(355.0/113));
        /* Next line is not printed as no newline character was
        found i.e. println() method, which could flush/empty
        the output from the output stream object */
        pw.print("Area of circle is = PI * (R^2)");
    }
}</code>
</pre>
<h5>Output :-</h5>
<div class="output">
<label>Console</label>
<div class="screen">
<pre>Hello World!
Value of PI is = 3.1415929203539825</pre>
</div>
</div>
<div class="clearfix mb-5">
<a href=".php"><button type="button" class="float-left btn btn-success" aria-label="Previous Topic">❮ Previous</button></a>
<a href=".php"><button type="button" class="float-right btn btn-success" aria-label="Next Topic">Next ❯</button></a>
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
