<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!-- nav php begin  ADD 1ST LINE FROM HW4 NAV-->
<nav>

<ul class="nav">
    <li>
    <a href="index.php">
    HOME
    </a>
    </li>

    <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
  ABOUT<span>▼</span>
    </a>

<ul class="dropdown-menu">
<li>
<a href="about.php">
ABOUT
</a>
</li>

<li>
<a href="instructor.php">
INSTRUCTORS
</a>
</li>

</ul>
</li>



<li class="button-dropdown">
<a href="javascript:void(0)" class="dropdown-toggle">
SERVICES <span>▼</span>
</a>

<ul class="dropdown-menu">
<li>
<a href="event-choreography.php">
EVENT CHOREOGRAPHY
</a>
</li>

<li>
<a href="team-building.php">
TEAM BUILDING EXERCISES
</a>
</li>

</ul>
</li>

<li>
<a href="classes.php">
CLASSES
</a>
</li>

<li>
<a href="calendar.php">
CALENDAR
</a>
</li>


<li class="button-dropdown nav-last">
<a href="javascript:void(0)" class="dropdown-toggle">
CONTACT <span>▼</span>
</a>

<ul class="dropdown-menu">
<li>
<a href="contact.php">
CONTACT
</a>
</li>

<li>
<a href="faq.php">
FAQ
</a>
</li>

</ul>
</li>

</ul>
</nav>

<!-- nav ends-->

<!-- start mobile navigation -->
<button class="nav-button">Toggle Navigation</button>
<div class="mobile-logo">

</div>
<ul class="primary-nav">
  <li><a href="index.php">Home</a></li>
  <li class="parent"><a href="about.php">About</a>
    <ul>
      <li><a href="about.php">About Us</a></li>
      <li><a href="instructor.php">Instructors</a></li>
      </ul>
  </li>

  <li class="parent"><a href="">Services</a>
    <ul>
      <li><a href="event-choreography.php">Event Choreography</a></li>
      <li><a href="team-building.php">Team Building Exercises</a></li>
      </ul>
  </li>

<li><a href="classes.php">Classes</a></li>
  <li><a href="calendar.php">Calendar</a></li>
  <li class="parent"><a href="contact.php">Contact</a>
    <ul>
      <li><a href="contact.php">Contact US</a></li>
      <li><a href="faq.php">FAQ</a></li>
      </ul>
  </li>

</ul>
<!-- end mobile navigation -->
