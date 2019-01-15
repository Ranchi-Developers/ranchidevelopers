<div id="sidebarnav">
  <h3 class="mx-3">Learn HTML</h3>
  <input type="text" name="search" placeholder="Search"oninput="filterContent(this)" class="form-control mx-2" style="margin-bottom:1rem;margin-left:1rem;width:195px">
  <a href="javascript:void(0)"class="closebtn close"onclick="closeNav()">&times;</a>
  <a href="#" class="nav-link" id="sbn0">Intro</a>
  <h5>HEAD Elements</h5>
  <a href="#" class="nav-link" id="sbn1">Title and Favicon</a>
  <a href="#" class="nav-link" id="sbn2">Meta Data</a>
  <a href="#" class="nav-link" id="sbn3">Links and Scripts</a>
  <h5>HTML Basic</h5>
  <a href="#" class="nav-link" id="sbn">Headings</a>
  <a href="#" class="nav-link" id="sbn">Paragraphs</a>
  <a href="#" class="nav-link" id="sbn">Text Rendering</a>
  <a href="#" class="nav-link" id="sbn">Block elements</a>
  <a href="#" class="nav-link" id="sbn">Ordered Lists</a>
  <a href="#" class="nav-link" id="sbn">Unordered Lists</a>
  <a href="#" class="nav-link" id="sbn">External Links</a>
  <a href="#" class="nav-link" id="sbn">Anchor Links</a>
  <a href="#" class="nav-link" id="sbn">Text Direction</a>
  <a href="#" class="nav-link" id="sbn">Definitions</a>
  <a href="#" class="nav-link" id="sbn">Line Breaks</a>
  <a href="#" class="nav-link" id="sbn">Horizontal Rule</a>
  <a href="#" class="nav-link" id="sbn">Special Characters</a>
  <h5>Media Elements</h5>
  <a href="#" class="nav-link" id="sbn">Images</a>
  <a href="#" class="nav-link" id="sbn">Audios</a>
  <a href="#" class="nav-link" id="sbn">Videos</a>
  <a href="#" class="nav-link" id="sbn">External Embed</a>
  <h5>HTML Forms</h5>
  <a href="#" class="nav-link" id="sbn">Form Attributes</a>
  <a href="#" class="nav-link" id="sbn">Single-line Text</a>
  <a href="#" class="nav-link" id="sbn">Password</a>
  <a href="#" class="nav-link" id="sbn">Checkboxes</a>
  <a href="#" class="nav-link" id="sbn">Multi-line Text</a>
  <a href="#" class="nav-link" id="sbn">Upload File</a>
  <a href="#" class="nav-link" id="sbn">Radio Buttons</a>
  <a href="#" class="nav-link" id="sbn">Search Box</a>
  <a href="#" class="nav-link" id="sbn">Input Range</a>
  <a href="#" class="nav-link" id="sbn">Reset Feilds</a>
  <a href="#" class="nav-link" id="sbn">Hidden Input</a>
  <a href="#" class="nav-link" id="sbn">Date and Time</a>
  <a href="#" class="nav-link" id="sbn">Color Code</a>
  <a href="#" class="nav-link" id="sbn">Telephone Number</a>
  <a href="#" class="nav-link" id="sbn">Input Number</a>
  <a href="#" class="nav-link" id="sbn">Submit Data</a>
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
