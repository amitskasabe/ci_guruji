<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/ead722a690.js" crossorigin="anonymous"></script>
<?php $batch = "07-02-2024" ?>
<style>
  .d-block, h2{
  color: #33475c;
  font-weight: 700;
  font-size: 2.5rem;
  display: block;
  margin: 0 auto;
  text-align: center;
  padding-bottom: 20px;
}

/* ============= Begin Testimonial Flexbox ============ */
#flex-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  min-height: 400px;
  height: 110vh;
  max-width: 1000px;
  margin: auto;
  background-color: #fff;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12),
    0 1px 2px rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  overflow: hidden;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  position: relative;
}

#left-zone {
  height: 50%;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

#left-zone .list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  list-style: none;
  -ms-flex-line-pack: stretch;
  align-content: stretch;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  margin: auto;
  padding: 0;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.item input {
  display: none;
}

label {
  display: block;
  opacity: 0.5;
  height: 50px;
  text-align: center;
  line-height: 50px;
  position: relative;
}

label:hover {
  opacity: 0.75;
  cursor: pointer;
}

.content-test {
  position: absolute;
  right: 0;
  bottom: 0;
  opacity: 0;
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
  height: 50%;
  width: 100%;
  -webkit-transition: 0.5s ease-out;
  -o-transition: 0.5s ease-out;
  transition: 0.5s ease-out;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  pointer-events: none;
}

.content-test p {
  max-width: 50%;
  text-align: center;
}

#right-zone {
  width: 100%;
  -webkit-box-flex: 1;
  -ms-flex: 1 0 auto;
  flex: 1 0 auto;
  height: 50%;
}

input:checked ~ .content-test {
  -webkit-transform: translateY(0%);
  -ms-transform: translateY(0%);
  transform: translateY(0%);
  -webkit-transition: -webkit-transform 1s;
  transition: -webkit-transform 1s;
  -o-transition: transform 1s;
  transition: transform 1s;
  transition: transform 1s, -webkit-transform 1s;
  opacity: 1;
}

@media (min-width: 480px) {
  #flex-container {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    min-height: auto;
    height: 400px;
    /* position: absolute; */
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
  }

  #left-zone .list {
    border-right: 2px solid #cccccc;
  }

  .content-test {
    width: 65%;
    height: 100%;
    pointer-events: auto;
    -webkit-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
  }

  #left-zone {
    width: 35%;
  }

  #right-zone {
    height: 100%;
    width: 65%;
  }
}
/* If the screen size is 480px or less */
@media (max-width: 480px) {
  .content_testimonial-1 .picto {
    padding-top: 100px;
  }
  .content_testimonial-2 .picto {
    padding-top: 100px;
  }
  .content_testimonial-3 .picto {
    padding-top: 100px;
  }
  .content_testimonial-4 .picto {
    padding-top: 100px;
  }
  .item > label {
    font-size: 1.3rem;
  }
}

.content_testimonial-1 .picto {
  height: 100px;
  width: 100px;
  background-image: url("https://img.freepik.com/free-vector/realistic-vector-icon-golden-king-queen-crown-isolated-white-background_134830-2012.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.content_testimonial-1 h1 {
  color: #d64541;
  text-align: center;
}

.content_testimonial-2 .picto {
  height: 100px;
  width: 100px;
  background-image: url("https://t3.ftcdn.net/jpg/03/20/35/28/360_F_320352822_Du18cSR0okuxVfYKgQIYYU794iqjQRAU.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.content_testimonial-2 h1 {
  color: #f5d76e;
}

.content_testimonial-3 .picto {
  height: 100px;
  width: 100px;
  background-image: url("https://i.postimg.cc/zV7sq04z/mod-Movers-Logo.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.content_testimonial-3 h1 {
  color: #00b16a;
}

.content_testimonial-4 .picto {
  height: 100px;
  width: 100px;
  background-image: url("https://i.postimg.cc/4Y3rypTz/ak-Pest-Control-Logo.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.content_testimonial-4 h1 {
  color: #f27935;
}

.content-test h1:first-letter {
  text-transform: uppercase;
}

input:checked ~ label {
  opacity: 1;
  -webkit-animation: all 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
  animation: all 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
}

input:checked ~ label.label_testimonial-1 {
  color: #d64541;
  border-right: solid 4px #d64541;
}

input:checked ~ label.label_testimonial-2 {
  color: #f5d76e;
  border-right: solid 4px #f5d76e;
}

input:checked ~ label.label_testimonial-3 {
  color: #00b16a;
  border-right: solid 4px #00b16a;
}

input:checked ~ label.label_testimonial-4 {
  color: #f27935;
  border-right: solid 4px #f27935;
}

label.label_testimonial-1:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://img.freepik.com/free-vector/realistic-vector-icon-golden-king-queen-crown-isolated-white-background_134830-2012.jpg");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
  border-radius: 50%;
}

label.label_testimonial-2:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://t3.ftcdn.net/jpg/03/20/35/28/360_F_320352822_Du18cSR0okuxVfYKgQIYYU794iqjQRAU.jpg");
  background-position: center;
  background-size: 75% 75%;
  border-radius: 50%;
  background-repeat: no-repeat;
}

label.label_testimonial-3:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://i.postimg.cc/zV7sq04z/mod-Movers-Logo.jpg");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
  border-radius: 50%;
}

label.label_testimonial-4:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://i.postimg.cc/4Y3rypTz/ak-Pest-Control-Logo.jpg");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
  border-radius: 50%;
}

label:first-letter {
  text-transform: uppercase;
}

.label_testimonial-1:hover {
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(#ffffff),
    to(#d64541a3)
  );
  background-image: -webkit-linear-gradient(left, #ffffff, #d64541a3);
  background-image: -o-linear-gradient(left, #ffffff, #d64541a3);
  background-image: linear-gradient(to right, #ffffff, #d64541a3);
  font-size: 1.2rem;
  -webkit-transition: font-size 0.5s;
  -o-transition: font-size 0.5s;
  transition: font-size 0.5s;
}

.label_testimonial-2:hover {
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(#ffffff),
    to(#f5d76e59)
  );
  background-image: -webkit-linear-gradient(left, #ffffff, #f5d76e59);
  background-image: -o-linear-gradient(left, #ffffff, #f5d76e59);
  background-image: linear-gradient(to right, #ffffff, #f5d76e59);
  font-size: 1.2rem;
  -webkit-transition: font-size 0.5s;
  -o-transition: font-size 0.5s;
  transition: font-size 0.5s;
}

.label_testimonial-3:hover {
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(#ffffff),
    to(#00b16aa3)
  );
  background-image: -webkit-linear-gradient(left, #ffffff, #00b16aa3);
  background-image: -o-linear-gradient(left, #ffffff, #00b16aa3);
  background-image: linear-gradient(to right, #ffffff, #00b16aa3);
  font-size: 1.2rem;
  -webkit-transition: font-size 0.5s;
  -o-transition: font-size 0.5s;
  transition: font-size 0.5s;
}

.label_testimonial-4:hover {
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(#ffffff),
    to(#f27935a3)
  );
  background-image: -webkit-linear-gradient(left, #ffffff, #f27935a3);
  background-image: -o-linear-gradient(left, #ffffff, #f27935a3);
  background-image: linear-gradient(to right, #ffffff, #f27935a3);
  font-size: 1.2rem;
  -webkit-transition: font-size 0.5s;
  -o-transition: font-size 0.5s;
  transition: font-size 0.5s;
}

p.testimonialState {
  margin-top: -5px;
  font-size: 0.8rem;
  font-style: italic;
  color: #808080d4;
}

p.testimonialFrom {
  margin-top: 5px;
  font-weight: bold;
  color: #33475c;
}
</style>
<section>
    <main>
    <div id="flex-container" class="testimonials">
    <div id="left-zone">
      <ul class="list">
        <li class="item">
          <input type="radio" id="radio_testimonial-1" name="basic_carousel" checked="checked" />
          <label class="label_testimonial-1" for="radio_testimonial-1">Who we are </label>
          <div class="content-test content_testimonial-1">
            <span class="picto"></span>
            <h1>The best institute for ssc in our region</h1>
            <p>“We are just not there to tech your child the basics , but to make their steps strong to stand up with world”</p>
           
          </div>
        </li>
        <li class="item">
          <input type="radio" id="radio_testimonial-2" name="basic_carousel" />
          <label class="label_testimonial-2" for="radio_testimonial-2">How we work</label>
          <div class="content-test content_testimonial-2">
            <span class="picto"></span>
            <h1>We teach them with basics to advanced</h1>
            <p>“You don’t have to be great to start. But you have to start to be great.”</p>
            <p class="testimonialFrom">Bill, Owner</p>
            <p class="testimonialState">Tucson, AZ</p>
            <br>
          </div>
        </li>
        
      </ul>
    </div>
    <div id="right-zone"></div>
  </div>
    </main>
    
</section>
<script src="">
    // Makeshift carousel function that gets invoked with the Index to start it off, then the callback increments the index to recursively invoke the same function. Works even in IE11!
var testimonialItems = document.querySelectorAll(".item label");
var timer;
function cycleTestimonials(index) {
   timer = setTimeout(function() {
    var evt;
    if (document.createEvent){
      //If browser = IE, then polyfill
      evt = document.createEvent('MouseEvent');
      evt.initMouseEvent('click', true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
    } else {
      //If Browser = modern, then create new MouseEvent
      evt = new MouseEvent("click", {
            view: window,
            bubbles: true,
            cancelable: true,
            clientX: 20
          });
    }
    var ele = "." + testimonialItems[index].className;
    var ele2 = document.querySelector(ele)
    ele2.dispatchEvent(evt);
    index++; // Increment the index
    if (index >= testimonialItems.length) {
      index = 0; // Set it back to `0` when it reaches `3`
    }
    cycleTestimonials(index); // recursively call `cycleTestimonials()`
    document.querySelector(".testimonials").addEventListener("click", function() {
      clearTimeout(timer); //stop the carousel when someone clicks on the div
    });
  }, 2000); //adjust scroll speed in miliseconds
}
//run the function
cycleTestimonials(0);
</script>