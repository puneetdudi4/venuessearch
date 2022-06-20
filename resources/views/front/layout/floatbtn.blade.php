
 <!--floatbuttonscss-->
 <link rel="stylesheet" href="{{asset('front_end/css/floatactionbtn.css') }}" />
<body>
<section class="container-parent">
        <div class="container-child">
            <span class="groupbtn"><button id="whatsappbtnId" class="btn whatsappbtn float-btn">
    <a href="https://api.whatsapp.com/send?phone=+971524055060&text=Hello" class="float" target="_blank"><i class="fab fa-whatsapp float-icon"></i> </a></button
          ></span>
            <span class="groupbtn"><button id="callbtnId" class="btn callbtn float-btn">
            <a href="tel: +971542046989">
                <i class="fa fa-phone float-icon"></i>
              </a></button
          ></span>
            <span class="groupbtn"><button id="closebtnId" class="btn closebtn float-btn">
              <i class="fa fa-times float-icon"></i></button
          ></span>
            <span id="contactId" class="groupbtn contactText"><p  class="float-contactText">Contact Us</p></span>

            <span class="groupbtn"><button id="chatbtnId" class="btn chatbtn float-btn" onclick="toggle12()">
              <i class="fa fa-comment float-icon"></i></button
          ></span>
        </div>
    </section>
     <!--floatactionbuttonjs-->
     <script type="text/javascript " src="{{asset('front_end/js/floatactionbtn.js') }}"></script>
</body>