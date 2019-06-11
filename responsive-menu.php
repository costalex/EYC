<script type="text/javascript">

$( document ).ready(function() {
  $( ".cross" ).hide();
  $( ".nav-responsive-menu" ).hide();
  $( ".hamburger" ).click(function() {
  $( ".nav-responsive-menu" ).slideToggle( "slow", function() {
  $( ".hamburger" ).hide();
  $( ".cross" ).show();
  });
  });

  $( ".cross" ).click(function() {
  $( ".nav-responsive-menu" ).slideToggle( "slow", function() {
  $( ".cross" ).hide();
  $( ".hamburger" ).show();
  });
  });

});

</script>

<nav class="nav-responsive-menu">
  <ul>
    <li id="home"><a href="index.php">Our Story</a></li>
    <li id="home"><a href="ambassadors.php">Ambassadors</a></li>
    <li id="responsive-apply"><a href="european-youth-convention-citizens-constitution.php">Constitution</a></li>
    <li id="live"><a href="debate.php">Debate</a></li>
    <!--<li id="home"><a href="european-youth-convention-preamble.php">Preamble</a></li>-->
    <li id="home"><a href="method.php">Method</a></li>
    <li id="home"><a href="media.php">Media</a></li>
    <a href="contact.php"><li>Contact</li></a>
    <!--<a href="ambassadors.php"><li>Ambassadors</li></a>
    <a href="http://www.youthconvention.eu/forum/"><li id="responsive-apply">Forum</li></a>-->
  </ul>
</nav>

<button class="hamburger">&#9776;</button>
<button class="cross">&#735;</button>
