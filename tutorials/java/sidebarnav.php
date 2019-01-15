<div id="sidebarnav">
  <h3 class="mx-3">Learn Java</h3>
  <input type="text" name="search" placeholder="Search"oninput="filterContent(this)"class="form-control mx-2"style="margin-bottom:1rem;margin-left:1rem;width:195px">
  <a href="javascript:void(0)"class="closebtn close"onclick="closeNav()">&times;</a>
  <a href="index.php"id="sbn0">Intro</a>
  <h5>Java Basics</h5>
  <a href="basic-syntax.php"id="sbn1">Basic Syntax</a>
  <a href="#"id="sbn">Variables and Literals</a>
  <a href="datatypes.php"id="sbn">Datatypes</a>
  <a href="#"id="sbn">Operators</a>
  <a href="#"id="sbn">Keywords</a>
  <a href="#"id="sbn">Comments in Java</a>
  <a href="print-println.php"id="sbn2">print( ) and println( )</a>
  <h5>Decision Making</h5>
  <a href="#"id="sbn">if...</a>
  <a href="#"id="sbn">if...else...</a>
  <a href="#"id="sbn">if...else if...</a>
  <a href="#"id="sbn">Nested if</a>
  <h5>Looping in Java</h5>
  <a href="#"id="sbn">for... Loop</a>
  <a href="#"id="sbn">while... Loop</a>
  <a href="#"id="sbn">do...while Loop</a>
  <h5>Input/Output</h5>
  <a href="printwriter.php"id="sbn">PrintWriter</a>
  <a href="#"id="sbn">Formatter</a>
  <a href="#"id="sbn">BufferedReader</a>
  <a href="#"id="sbn">Scanner Class</a>
  <h5>Miscellaneous</h5>
  <a href="#"id="sbn">Jump Statements</a>
  <a href="#"id="sbn">Type Conversion</a>
  <h5>OOP Implementation</h5>
  <a href="#"id="sbn"></a>
  <h5>Methods</h5>
  <a href="#"id="sbn"></a>
  <h5>String Manipulation</h5>
  <a href="#"id="sbn"></a>
  <h5>Arrays in Java</h5>
  <a href="#"id="sbn"></a>
  <h5>Exception Handling</h5>
  <a href="#"id="sbn"></a>
  <h5>Working with Files</h5>
  <a href="#"id="sbn">File I/O</a>
  <a href="#"id="sbn">Formatting a File</a>
  <a href="#"id="sbn">Creating a File</a>
  <hr>
  <b class="ml-5 p-3">Find Us On</b>
  <div class="sharethis-inline-follow-buttons"></div>
  <div style="height:60px"></div>
</div>
<script>
  function filterContent(elmnt) {
    var x, i, val, show, showh5;
    val = elmnt.value;
    x = document.getElementById("sidebarnav").getElementsByTagName("*");
    for (i = 1; i < x.length; i++) {
      if (x[i].tagName == "H5") {
        if (showh5) {
          if (show == false) {
            showh5.style.display = "none";
          } else {
            showh5.style.display = "block";
          }
        }
      show = false;
      showh5 = x[i];
    }
    if (x[i].tagName == "A") {
      if (x[i].innerHTML.toUpperCase().indexOf(val.toUpperCase()) == -1) {
        x[i].style.display = "none";
      } else {
        x[i].style.display = "block";
          show = true;
        }
      }
      if (showh5) {
        if (show == false) {
          showh5.style.display = "none";
        } else {
          showh5.style.display = "block";
          }
        }
      }
    }
</script>
