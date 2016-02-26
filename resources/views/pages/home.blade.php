@extends('layouts.default', array('name'=> $name))
@section('content')

<div class="row maintext" id="maintext">
  <div class="col-md-4">
    Video In here
  </div>

  <div class="col-md-4 text-center">
    <div style="padding-bottom:10px; " class="well well-sm"><a class="aboutlinks" href="javascript:void(0)" onclick="openclose('pa1')">Why was GoActive developed?</a></div>
    <span class="ocbox" id="pa1">
      <div class="well">
        <p style="font-size:16px;">GoActive was developed to answer a clear need for effective health promotion programmes to increase physical activity levels in adolescents. A 10-minute increase in moderate-to-vigorous activity was associated with a smaller waist circumference and lower fasting insulin among young people in a large international study. However, over 10 minutes/day of PA every year is replaced by sedentary time between 9/10 years and13/14 years-of-age. Insufficient activity is a risk factor for obesity and related metabolic disorders in youth. Moreover, low PA in adolescence is likely to progress to adulthood inactivity, which is linked to increased risk of many diseases including type 2 diabetes, cancer and also premature mortality. Given that pubertal, brain and social development during adolescence leads to new capacity for health behaviours, increasing the likelihood of long term change, adolescence is a critical period to increase PA, with potential for long term public health benefits.</p>
      </div>
    </span>

    <div style="padding-bottom:10px;"><a class="aboutlinks" href="javascript:void(0)" onclick="openclose('pa2')">What is the GoActive programme?</a></div>
    <span class="ocbox" id="pa2">
      <div class="well">
        <p style="font-size:16px;">GoActive aims to increase physical activity through increased peer support, self-efficacy, self-esteem and friendship quality, and is implemented using a tiered-leadership system. Tutor groups choose two weekly activities each; Mentors (older adolescents in the school) and weekly Peer-Leaders (two per class) encourage students try these. Students gain points for trying new activities; points are entered into a between-class competition. GoActive will run for two terms: weekly facilitation support from a council-funded health trainer will be offered in the Spring term, with more distant support in the Summer term.</p>
      </div>
    </span>

    <div style="padding-bottom:10px;"><a class="aboutlinks" href="javascript:void(0)" onclick="openclose('pa3')">Has GoActive been tested?</a></div>
    <span class="ocbox" id="pa3">
      <div class="well">
        <p style="font-size:16px;">The GoActive intervention is evidence-based, and designed iteratively with adolescent input to ensure appeal for all students. Strategies for effective inclusion of inactive/shy adolescents were developed in collaboration with people with these characteristics. Feasibility has been established (feasibility study: one school), and a subsequent pilot randomised controlled trial (RCT) in three school demonstrated efficacy on primary outcomes.</p>
      </div>
    </span>

    <div style="padding-bottom:10px;"><a class="aboutlinks" href="javascript:void(0)" onclick="openclose('pa4')">What's next for GoActive?</a></div>
    <span class="ocbox" id="pa4">
      <div class="well">
        <p style="font-size:16px;">A full trial is now scheduled to commence in September 2016. The full trial for GoActive will recruit 16 Cambridgeshire secondary schools, and will include all Year 9 students within participating schools (n~2400 students). Schools will be recruited to represent national variability in socio-economic status.</p>
      </div>
    </span>

    <div style="padding-bottom:10px;"><a class="aboutlinks" href="javascript:void(0)" onclick="openclose('pa5')">How will we know if GoActive has been successful?</a></div>
    <span class="ocbox" id="pa5">
      <div class="well text-left">
        <p>Outcomes will be assessed at (1) baseline, (2) intervention week 6, (3) 14-16 weeks post-baseline [main outcome], and (4) at 10-month follow-up. The primary outcome is change in daily accelerometer-assessed moderate-to-vigorous PA. Secondary outcomes include:</p>
        <p><ol>
        <li>Accelerometer-assessed sedentary, light, overall physical activity during school time, weekday evenings, weekends</li>
        <li>Self-reported physical activity, self-efficacy, self-esteem, peer support, friendship quality, diet quality, sleep, mood, school-reported absence and academic performance, body fat %, BMI</li>
        <li>Within-trial, long-term cost-effectiveness and cost-utility analyses</li>
        <li>Mixed methods process evaluation assessing a) programme acceptability, uptake, maintenance, and dose; and b) putative moderators/mediators</li>
        </ol></p>
        <p>In addition, within-trial cost-effectiveness will be expressed as incremental costs per incremental change in physical activity (METs). Long term cost-effectiveness will assess whether the intervention is likely to increase length and/or quality of life, and at what cost. Focus groups and interviews (mentors/teachers/students) will also explore programme acceptability, barriers, facilitators, potential mechanisms of effect and population group differences.</p>
      </div>
    </span>

    <div style="padding-bottom:10px;"><a class="aboutlinks" href="javascript:void(0)" onclick="openclose('pa6')">How will we make sure GoActive has wider impact?</a></div>
    <span class="ocbox" id="pa6">
      <div class="well">
        <p style="font-size:16px;">Workshops will be held with key stakeholders throughout the project to ensure the dissemination of results for optimal public health impact. The evaluation of GoActive will provide evidence to influence government policy in the UK. As such, the existing study website will be further developed to more efficiently distribute intervention materials, study information and future results. In addition to the potential for large-scale public health impact, this research has unprecedented academic significance. GoActive will be one of the first to so thoroughly explore efficacy and cost-effectiveness (e.g. conducting mixed-methods analyses, comprehensively examining mechanisms, including long-term follow-up), and one of the largest trials of a school-based intervention to increase physical activity in adolescence.</p>
      </div>
    </span>
  </div>

  <div class="col-md-4">
    <a class="twitter-timeline" href="https://twitter.com/GoActiveCamb" data-widget-id="699600485246959616">Tweets by @GoActiveCamb</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>

</div>

@stop
