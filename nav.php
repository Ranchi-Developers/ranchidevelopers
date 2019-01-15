<nav class="navbar navbar-expand-md navbar-dark fixed-top py-1">
<a class="navbar-brand ml-lg-5 mr-lg-3" href="../../../../../../index.php"><span class="h2">Ωm Rαј</span></a>
<button class="navbar-toggler p-1"style="border:0"type="button"data-toggle="collapse"data-target="#collapsibleNavbar"aria-label="Drop Down"onclick="changeIcon()">
<span class="navbar-toggler-icon"id="menu-open-icon"></span>
<span id="menu-close-icon"><svg width="30"height="30"viewBox="0 0 20 20"><path fill="rgba(255, 255, 255, 0.5)" stroke-linecap="round" d="M15 4.41L13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9z"></path></svg></span>
</button>
<div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item ml-lg-4 ml-md-2">
<a class="nav-link active" href="../../../../../../index.php">HOME</a>
</li>
<li class="nav-item ml-lg-4 ml-md-2">
<a class="nav-link active" href="../../../../../../blogs/index.php">BLOGS</a>
</li>
<li class="nav-item ml-lg-4 ml-md-2">
<a class="nav-link active" href="../../../../../../tutorials/index.php">TUTORIALS</a>
</li>
<li class="nav-item ml-lg-4 ml-md-2">
<a class="nav-link active" href="../../../../../../downloads/index.php">DOWNLOAD</a>
</li>
<li class="nav-item ml-lg-4 ml-md-2">
<a class="nav-link active" href="#">DONATE</a>
</li>
</ul>
<form class="form-inline my-2 my-md-1"action="//google.com/"method="get"onsubmit="sitesearch(this)">
  <input type="hidden"name="q">
  <div class="input-group">
    <input type="search"name="qfront"placeholder="Search Ωm Rαј"class="form-control"aria-label="Site Search"required>
    <div class="input-group-btn">
      <button type="submit"name="submit"aria-label="Submit"class="btn btn-success"style="border-top-left-radius:0;border-bottom-left-radius:0"><i class="fa fa-search"></i></button>
    </div>
  </div>
</form>
</div>
</nav>
<script>
function sitesearch(curobj){curobj.q.value=curobj.qfront.value+" "+"site:"+"omraj.rf.gd"}
</script>
<script>
function changeIcon() {
  var open = document.getElementById("menu-open-icon");
  var close = document.getElementById("menu-close-icon");
  if (open.style.display==="none") {
    close.style.display="none";
    open.style.display="block";
  } else {
    open.style.display="none";
    close.style.display="block";
  }
}
</script>
