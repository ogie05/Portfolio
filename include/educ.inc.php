<!-- for educational background -->
<section id="educ-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="background-educ">
        <br>
        <hr>
        <div class="educ-title">
        <h2 style="text-align: center;"> Educational Background</h2>
        </div>

      <div class="elem">
          <div class="row">
            <div class="col-md-9">
              <p style="font-family: 'Niramit', sans-serif;"> Elementary</p>
              <p> 2006 - 2012 - Tugatog National High School</p>
            </div>
            <div class="col-md-3"><img class="elempic" src="icon/elem.png"></div>
          </div>
      </div>

        <div class="hs">
          <div class="row">
            <div class="col-md-9">
              <p style="font-family: 'Niramit', sans-serif;"> Junior High School</p>
              <p> 2012 - 2016 - Dalandanan National High School</p>
            </div>
            <div class="col-md-3"><img class="hspic" src="icon/hs.png"></div>
          </div>
        </div>

        <div class="sh">
          <div class="row">
            <div class="col-md-9">
              <p style="font-family: 'Niramit', sans-serif;"> Senior High School</p>
              <p> 2016 - 2018 - Asian Institute of Computer Studies</p>
            </div>
            <div class="col-md-3"><img class="shpic" src="icon/sh.png"></div>
          </div> 
        </div>
        <div class="cl">
          <div class="row">
            <div class="col-md-9">
              <p style="font-family: 'Niramit', sans-serif;"> College</p>
              <p>2018 - Global Reciprocal Colleges</p>
            </div>
            <div class="col-md-3"><img class="clpic" src="icon/cl.png"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
<script>
VANTA.GLOBE({
  el: "#background-educ",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0xbe00ff,
  color2: 0xff8949,
  size: 0.50,
  backgroundColor: 0xffffff
})
</script>
<script>
AOS.init();
</script>