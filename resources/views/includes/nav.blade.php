<div style="background-color:white; border-bottom:solid 1px #e7e7e7; margin-bottom:10px;">
  <div style="padding:5px;" role="navigation">
    <ul class="nav nav-pills nav-justified">
      <li role="presentation" class="active"><a class="front" href="/team"><b>MEET THE TEAM</b></a></li>
      <li role="presentation"><a class="front" href="/resources"><b>RESOURCES</b></a></li>

      @if (Auth::check())
        <li role="presentation"><a class="front" href="/student_profile"><b>YOUR ACCOUNT</b></a></li>
      @else
        <li role="presentation"><a class="front" href="/students"><b>STUDENT LOGIN</b></a></li>
        <li role="presentation"><a class="front" href="/students"><b>MENTOR LOGIN</b></a></li>
        <li role="presentation"><a class="front" href="/students"><b>SCHOOL LOGIN</b></a></li>
      @endif

    </ul>
  </div>
</div>
