
<div class="col-md-12 mt-3" id="bg-about">
    <div data-aos="fade-up-right" data-aos-offset="100"
            data-aos-delay="40"
            data-aos-duration="1000">
    <p style="font-family: 'Rancho',sans-serif;font-size:64px;text-align:center" class="font-effect-shadow-multiple">
      System Developer , Back-end Programmer
    </p>
    </div>
    <div data-aos="fade-up-left" data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="2200">
    <p style="font-family: 'Rancho',sans-serif;font-size:32px;text-align:center;" class="font-effect-shadow-multiple typewrite" data-period="500" data-type='[ "I design and create system app, webpage and games.","I love Logic.", "I am Creative.", "I Love to Develop.","Aspire to be a Back End Developer." ]'>
        <span class="wrap"></span>
    </p>
    </div>
    <div data-aos="flip-down" data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="2200">
    <img src="icon/myprofileicon.png" width="250px" height="250px" class="mx-auto d-block">
    </div>
  </div>

  <div class="wave-container">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#ff5500" fill-opacity="1" d="M0,96L34.3,85.3C68.6,75,137,53,206,69.3C274.3,85,343,139,411,181.3C480,224,549,256,617,261.3C685.7,267,754,245,823,213.3C891.4,181,960,139,1029,144C1097.1,149,1166,203,1234,208C1302.9,213,1371,171,1406,149.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
<script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #000}";
        document.body.appendChild(css);
    };


VANTA.BIRDS({
  el: "#bg-about",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  backgroundColor: 0xffffff,
  birdSize: 1.20
})
</script>

