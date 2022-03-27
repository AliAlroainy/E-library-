<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/detailes.css" />
    <link rel="stylesheet" href="css/mainOffer.css" />


    <title>details</title>
  </head>
  <body class="body">
    <!-------------------- header --------------------------------------------------------->
    <header>
      <!--top header-->
      <div class="vnn"></div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 0 24 24"
          width="24px"
          fill="#000"
        >
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
        </svg>
      </a>
      <nav>
        <div class="nv" id="nav">
          <div
            onclick="document.getElementById('id01').style.display='block'"
            style="cursor: pointer"
            class="item"
          >
            <div>
              <img src="assets/svg/enterAcount.svg" width="20" height="20" alt="icon" />
            </div>
            <div style="font-size: 0.8rem">ادخل لحسابك او سجل الان</div>
          </div>

          <a href="index.html" class="item">
            <div>
              <img src="assets/svg/star.svg" width="20" height="20" alt="icon" />

            </div>
            <div>الرئيسية</div>
          </a>

          <a href="about.html" class="item">
            <div>
              <img src="assets/svg/whoisus.svg" width="20" height="20" alt="icon" />

            </div>
            <div>من نحن</div>
          </a>

          <a href="#" class="item">
            <div>
              <img src="assets/svg/callus.svg" width="20" height="20" alt="icon" />
            </div>
            <div>اتصل بنا</div>
          </a>

          <a href="#" class="item">
            <div>
              <img src="assets/svg/help.svg" width="20" height="20" alt="icon" />
            </div>
            <div>المساعدة</div>
          </a>

          <a href="#" class="item">
            <div>
              <img src="assets/svg/privcey.svg" width="20" height="20" alt="icon" />
            </div>
            <div>سياسة الخصوصية</div>
          </a>

          <a href="#" class="item">
            <div>
              <img src="assets/svg/yemen.svg" width="20" height="20" alt="icon" />
            </div>
            <div>اليمن Yem</div>
          </a>

          <a href="#" class="item">
            <div>English</div>
            <div>
              <img src="assets/svg/english.svg" width="20" height="20" alt="icon" />
            </div>
          </a>
        </div>
      </nav>
      <!--second header-->
      <div class="second-header">
        <div style="display: flex; width: 80vw; position: relative;">

          <a href="cart.html" class="cart">
            <div id="counter-cart" style="position: absolute;top: -5px; border-radius: 50%; left: 1px; width: 20px; height: 20px; background-color: red; color: #fff; display: flex; align-items: center; justify-content: center; visibility: hidden;">0</div>
            <img src="assets/svg/searc-cart.svg" width="24" height="24" alt="icon"/>
          </a>

          <div class="search">
            <form>
              <input  onkeyup="search_cat()" 
              type="search" id="search" placeholder="البحث" />              <button type="submit">
                <span class="material-icons-outlined">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="24px"
                    viewBox="0 0 24 24"
                    width="24px"
                    fill="#000000"
                  >
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                      d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                    />
                  </svg>
                </span>
              </button>
            </form>
          </div>
        </div>
        <div>
          <a href="index.html" class="logo">
            <img
              src="assets/home.png"
              class="logg"
              height="100px"
              width="100px"
              alt="icon"
            />
          </a>
        </div>
      </div>
    </header>

    <!-----------------  form modle ------------------------------>

    <div id="id01" class="modal">
      <form
        class="modal-content animate"
        action="/action_page.php"
        method="post"
      >
        <div class="container">

          <div style="display: flex; width: 100%; border-bottom: 1px solid rgba(51, 51, 51, 0.192); justify-content: center; align-items: center;margin-bottom: 5px; padding: 5px;">
            <h3>تسجيل الدخول</h3>
          </div>
          
          <input
            type="text"
            placeholder="البريد الالكتروني او رقم الجوال"
            name="uname"
            required
          />


          <div style="position: relative; width: 80%; ">

          <input type="password" style="width: 100%;" placeholder="كلمة السر" name="psw" required />

          <a href="#" style=" font-weight: bold; text-decoration: none ;position: absolute; color: rgb(58, 16, 196) ; left: 20px; top: 15px; z-index: 1;"><p>نسيت؟ </p></a>
        </div>

        

          <button type="submit">تسجيل الدخول</button>
        </div>
        <br/>
        <br/>
        <br/>

        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
          <p
        >
          ليس لديك حساب ؟
        </p>
        <button    onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'"
        style="color: #333; width: 50%; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
          انشاء حساب جديد
        </button>

          
        </div>

      </form>
    </div>

    <!-- --------    singup -------------->
    <div id="id02" class="modal2">
      <form
        class="modal-content animate"
        action="/action_page.php"
        method="post"
      >
        <div class="container">
          
          <div style="display: flex; width: 100%; border-bottom: 1px solid rgba(51, 51, 51, 0.192); justify-content: center; align-items: center;margin-bottom: 5px; padding: 5px;">
            <h3>انشاء حساب</h3>
          </div>

          <div style="display: flex; flex-direction: row; width: 80%; align-items: center;">
          <input type="text" placeholder="رقم الجوال" name="uname" required />

          <div style="position: relative; width: 50px;">
          

          <select placeholder="رقم الجوال"  required style="width: 80px; height: 40px; background-color: rgb(233, 232, 232);
          box-sizing: border-box;
          border: none;
          direction: rtl;
          border-radius: 5px;">
            <option> +970</option>
            <option>+967</option>
            <option>+966</option>
          </select>
          <img src="assets/svg/flag.svg" width="20" height="20" style="position: absolute; top: 9px; left: -9px;"/>
          <div style="position: absolute; right: 1px; top: 1px; font-size: 0.2rem;">رمز البلد</div>
        </div>

        </div>

          <div style="width: 80%; align-items: flex-start;">
          <p> سوف نرسل لك <samp style="font-weight: bold;" > رمز التحقق عن طريق رساله نصية</samp>   </p>
        </div>
          <button type="submit" style="background-color: rgb(223, 223, 223);font-size: 1rem; color: #333;" >ارسال رمز التحقق</button>
        
          <input type="text" placeholder="الاسم الاول" name="fname" required />
          <input type="text" placeholder="اسم العائلة" name="lname" required />
          <input
            type="text"
            placeholder="البريد الالكتروني"
            name="email"
            required
          />
          <input
            type="text"
            placeholder="تاكيد البريد الالكتروني"
            name="conf-email"
            required
          />
          <input type="password" placeholder="كلمة السر" name="psw" required />
          <div style="display: flex; flex-direction: column; justify-content: flex-start;width: 80%;margin-top: 10px;" >
            <div >
              <input type="checkbox" checked style="width: 20px; height: 20px;" />
              <label> اوافق <a style="text-decoration: none; color: #0089B6;" href="#"> على الشروط والاحكام </a> </label>
            </div>
            <div>
              <input type="checkbox"  checked style="width: 20px; height: 20px;" />
              <label> التسجيل للانضمام للنشرة البريدية </label>
            </div>
          </div>
         

          <button style="background-color: rgb(223, 223, 223);font-size: 1rem; color: #333;"  type="submit">
            انشاء حساب
          </button>
        </div>

        <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 5px; margin-top: 50px;">

          <div
            
          >
             لديك حساب ؟
          </div>
          <div style="color: #0089B6; cursor: pointer;"  onclick="document.getElementById('id01').style.display='block' ;document.getElementById('id02').style.display='none'"
          >  تسجيل الدخول < </div>

        </div>
      </form>
    </div>

    <!------------------------------end header  ---------------------------------------------->

    <!------------------------ slider -------------------------------------------------->

    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="assets/slid1.jpg" style="width: 100%; height: 300px;" />
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="assets/slid2.jpg" style="width: 100%; height: 300px;" />
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="assets/slid3.jpg" style="width: 100%; height: 300px;" />
        <div class="text">Caption Three</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <div style="text-align: center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>


    <!-------------------- end slider --------------------->

    <!--------------------------              main  start              --------------------------------->

    <div class="dtl-head">
      <a href="index.html">الرئيسية</a>
      <a href="#"> / الكتب العربية</a>
      <a href="#"> / كتب الكترونية</a>
      <a href="#"> لانك الله (كتاب الكتروني ) </a>

    </div>

    <!--------------------------------------book detail section-->

    <!-- The Modal -->
<div id="myModali" class="modali">

  <!-- The Close Button -->
  <span class="close">&times;</span>
  
  <!-- Modal Content (The Image) -->
  <img class="modali-content" id="img9">
  
  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
  </div>


    <section class="dtl-container">

      <!--book-img-dtl start-->
      <div class="book-img-dtl">

        <div>
          <img onclick="img()" src="assets/books/1.jpg" width="200" height="300" alt="hi here" />
        </div>

        <div>

          <di>
            <img src="assets/books/1.jpg" width="30" height="40" />
          </di>

        </div>
      </div>
      <!--book-img-dtl end-->

      <!--book-dtl start-->
      <div class="book-dtl">
        <div>
          <h1>لانك الله (كتاب الكتروني)</h1>
        </div>

        <div style="color: #0089B6;"><h3> عرض المزيد</h3></div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>

        <div style="direction: ltr; width: 100%;">
          <div>
          <small>Eachوحدة البيع </small>
          
        </div>
        <div>
          <small>المراجعات (15)</small>
          <span> 
            <img src="assets/goldstar.png" width="15" height="15" />
            <img src="assets/goldstar.png" width="15" height="15" />
            <img src="assets/goldstar.png" width="15" height="15" />
            <img src="assets/goldstar.png" width="15" height="15" />
          </span>
        </div>
        <div >
          <small><span>c224</span> رقم المنتج  </small>
          <small><span>4</span> رقم الصنف  </small>

          

        
        </div>
        </div>
        
        <div>
          الصيغ المتوفرة
        </div>
        <div style="display:flex; flex-direction: row; justify-content: space-between;width: 100%;">
          <div >
            <input type="radio" checked> <samp>كتاب الكتروني</samp> <samp> <img src="assets/svg/question.svg" width="10" height="10" />
            </samp>
          </div>
          <div class="mainOffer-price">
            <h3 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h3>
            <p style="font-size: 0.5rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
        </div>

        <div style="display:flex; flex-direction: row; justify-content: space-between;width: 100%;">
          <div >
            <input type="radio" > <samp>كتاب مطبوع</samp> 
          </div>
          <div class="mainOffer-price">
            <h3 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h3>
            <p style="font-size: 0.5rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
        </div>

      </div>
      <!--book-dtl end-->
     
      <!--book-cart-dtl start-->
      <div class="book-cart-dtl">
        <div style="background-color: rgb(243, 219, 152); padding: 5px; border-right: 3px solid saddlebrown; width: 90%;" > 
          <strong>ملاحظة :</strong> سيتم اضافة هذا الكتاب الى مكتبتك في قارئ جرير
          <div style="color: #0089B6;">اقراء المزيد</div>
        </div>
        <div style="display: flex; flex-direction: row; padding: 5px;align-items: center; gap: 3px;">
          <input type="number" value="1" style="width: 30px; height: 30px; border:  none; background-color: rgb(240, 238, 238); border-radius: 5px; box-shadow: 0px 0px 2px 1px rgba(177, 176, 176, 0.692);" >
        <button style="height: 30px;display: flex; align-items: center; justify-content: center;box-shadow: 0px 0px 2px 1px rgba(177, 176, 176, 0.692);">اضافة الى السلة  <img src="assets/svg/cart-1.svg" width="20" height="20" /> </button>
        </div>
        <div style="background-color: rgb(238, 238, 238); display: flex;flex-wrap: wrap; gap: 10px; padding: 10px;">
          <div>
            <img src="assets/svg/secury.svg" width="10" height="10" />
            تسوق آمن
            <img src="assets/svg/question.svg" width="10" height="10" />

          </div>
          <div>
            <img src="assets/svg/secury.svg" width="10" height="10" />
            اصلي ومضمون
            <img src="assets/svg/question.svg" width="10" height="10" />

          </div>
          <div>
            <img src="assets/svg/secury.svg" width="10" height="10" />
            شحن سريع ومجاني
            <img src="assets/svg/question.svg" width="10" height="10" />
          </div>
        </div>
        <br/>
        <div><hr/></div>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-evenly;">
          <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
            مشاركة
            <img src="assets/svg/share_black_24dp.svg" width="15" height="15" style="margin-right: 10px;" />
          </button>
            <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
              المفضلة
              <img src="assets/svg/favorite_black_24dp (1).svg" width="15" height="15" style="margin-right: 10px;" />
            </button>
              <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
                مقارنة
              <img src="assets/svg/card-arraw.svg" width="15" height="15" style="margin-right: 10px;" />
              </button>
        </div>
        <br/>
        <hr/>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-evenly;">
          <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
            مشاركة
            <img src="assets/svg/share_black_24dp.svg" width="15" height="15" style="margin-right: 10px;" />
          </button>
            <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
              المفضلة
              <img src="assets/svg/favorite_black_24dp (1).svg" width="15" height="15" style="margin-right: 10px;" />
            </button>
              <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
                مقارنة
                <img src="assets/svg/card-arraw.svg" width="15" height="15" style="margin-right: 10px;" />
              </button>
        </div>

        

      </div>
    

      <!--book-cart-dtl end-->


    </section>


    <div style="direction: rtl; width: 100%; padding: 30px; border-top: rgba(51, 51, 51, 0.349) solid 1px; border-bottom: rgba(51, 51, 51, 0.349) solid 1px; background-color: rgba(245, 241, 241, 0.918);">
      كتاب يتحدث عن اسماء الله الحسنى

    </div>

    <div style="direction: rtl;" >
      <h1>المواصفات</h1>

     
        <div>
        <!--str-->
        <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style=" color: rgba(0, 0, 0, 0.657); width: 300px;"><h3>رقم الصنف</h3></div> <div>JBB410156</div>
        </div>
        <!--end-->
         <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3>رقم المنتج</h3></div> <div>4</div>
        </div>
        <!--end-->
         <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3> المؤلف</h3></div> <div>علي جابر الفيفي</div>
        </div>
        <!--end-->
         <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3> الناشر</h3></div> <div>دار الحضارة للنشر والتوزيع</div>
        </div>
        <!--end-->
         <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3> تاريخ النشر</h3></div> <div>2016</div>
        </div>
        <!--end-->
         <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3> صيغة الكتاب</h3></div> <div>Ebook</div>
        </div>
        <!--end-->
         <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3> عدد الصفحات</h3></div> <div>182</div>
        </div>
        <!--end-->
         <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3> وزن الشحن (كجم)</h3></div> <div>0.01800</div>
        </div>
        <!--end-->
              <!--str-->
              <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
                <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3>  صيغة الملف </h3></div> <div>epub</div>
              </div>
              <!--end-->
                    <!--str-->
         <div style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;">
          <div style="width: 300px; color: rgba(0, 0, 0, 0.657);"><h3>  اللغة  </h3></div> <div>عربي</div>
        </div>
        <!--end-->

        </div>

      </div>

      <di style="display: flex;border-bottom: 1px solid rgba(20, 20, 20, 0.164); padding: 10px;color: #0089B6; ">
       <strong> ^ عرض اقل</strong> 
      </di>

      <hr/>

      <div style="display: flex; direction: rtl; align-items: center; padding: 20px;">
        <h2>مراجعات العملاء</h2>
        <button style="background-color: #0089B6; width: 150px; height: 50px; margin-right: 5px;"> اكتب مراجعاتك +</button>
      </div>

      <div style="padding: 20px;">

         <!--start -->
        <div style="background-color: rgb(248, 246, 246); padding: 10px; direction: rtl;border-top: 1px solid rgba(20, 20, 20, 0.164); ">
          <div> <strong>good</strong> </div>
          <div style="display: flex; flex-direction: row; justify-content: space-between; padding-top: 5px; color: rgb(158, 156, 156);">
            <div>من قبل reem</div>
            <div style="font-size: 0.5rem;">21-9-2021</div>
          </div>
        </div>

      <div style="display: flex; direction: rtl;margin: 5px; color: rgb(119, 116, 116);">good</div>
      <!--end -->

      <!--start -->
      <div style="background-color: rgb(248, 246, 246); padding: 10px; direction: rtl;border-top: 1px solid rgba(20, 20, 20, 0.164); ">
        <div> <strong>good</strong> </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; padding-top: 5px; color: rgb(158, 156, 156);">
          <div>من قبل reem</div>
          <div style="font-size: 0.5rem;">21-9-2021</div>
        </div>
      </div>

    <div style="display: flex; direction: rtl;margin: 5px; color: rgb(119, 116, 116);">good</div>
    <!--end -->

    <!--start -->
    <div style="background-color: rgb(248, 246, 246); padding: 10px; direction: rtl;border-top: 1px solid rgba(20, 20, 20, 0.164); ">
      <div> <strong>good</strong> </div>
      <div style="display: flex; flex-direction: row; justify-content: space-between; padding-top: 5px; color: rgb(158, 156, 156);">
        <div>من قبل reem</div>
        <div style="font-size: 0.5rem;">21-9-2021</div>
      </div>
    </div>

  <div style="display: flex; direction: rtl;margin: 5px; color: rgb(119, 116, 116);">good</div>
  <!--end -->

      </div>


      <div style="display: flex;border-radius: 10px;margin: 10px; border-bottom: 1px solid rgba(20, 20, 20, 0.603); padding: 10px;color: #0089B6; ">
        <strong> < اظهار جميع المراجعات (15)  </strong> 
       </div>
       <br/>
       <hr/>

     <div style="direction: rtl; padding: 15px; margin-top: 15px;">
      <h1>منتجات مشابهة</h1>
    </div>
       

       <div style="padding: 15px; direction: rtl; display: flex;flex-direction: row;flex-wrap: wrap; justify-content: space-evenly;">
          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details.html"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
            
              <h2>وبداء العد التنازلي </h2>
            </div>
           <br/>
           <br/>
           <br/>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>         
            </div>
            
          </div>

          <!--end card ----->

          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details.html"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
            
              <h2>وبداء العد التنازلي </h2>
            </div>
           <br/>
           <br/>
           <br/>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>         
            </div>
            
          </div>

          <!--end card ----->

          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details.html"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
            
              <h2>وبداء العد التنازلي </h2>
            </div>
           <br/>
           <br/>
           <br/>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>         
            </div>
            
          </div>

          <!--end card ----->

          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details.html"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
            
              <h2>وبداء العد التنازلي </h2>
            </div>
           <br/>
           <br/>
           <br/>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>         
            </div>
            
          </div>

          <!--end card ----->

       </div>


    
<div style="height: 300px; width: 100%;">

</div>
    




  <!-----------------------------   footer  ------------------------------>
  <footer>
    <div class="topfooter">
      <div class="item-top">
        <di class="footer-item">
          <h3>عن جرير</h3>
          <ul>
            <li><a href="#"> من نحن </a></li>
            <li><a href="#"> الحوكمة </a></li>
            <li><a href="#"> علاقات المستشترين والتقارير </a></li>
            <li><a href="#"> الاستدامة </a></li>
            <li><a href="#"> الاخبار </a></li>
          </ul>

          <h3 style="border-bottom: 0.1px solid rgba(255, 255, 255, 0.493)">
            <a href="#"> فرص العمل </a>
          </h3>
        </di>

        <di class="footer-item">
          <h3>روابط سريعة</h3>
          <ul>
            <li><a href="#">اصدارات جرير </a></li>
            <li><a href="#"> قارئ جرير </a></li>
            <li><a href="#"> شركاء برامج المكافئات</a></li>
            <li><a href="#"> خدمات شركة الاتصالات </a></li>
          </ul>
        </di>

        <di class="footer-item">
          <h3>خدمات جرير</h3>

          <ul>
            <li><a href="#">خدمة تقسيط المشتركين </a></li>
            <li><a href="#"> خدمة مابعد البيع </a></li>
            <li><a href="#"> خدمة الحماية الشاملة </a></li>
            <li><a href="#">حماية اجهزة ابل </a></li>
            <li><a href="#"> بطاقة خصم جرير </a></li>
            <li><a href="#"> بطاقة جرير للهدايا </a></li>
          </ul>
        </di>

        <di class="footer-item">
          <h3>خدمة العملاء</h3>

          <ul>
            <li><a href="#"> مبيعات الشركة </a></li>
            <li><a href="#"> الاسئلة المتكررة </a></li>
            <li><a href="#"> دليل التسويق والمطبوعات </a></li>
            <li><a href="#"> مواقع العارض </a></li>
            <li><a href="#"> سياسة الضمان </a></li>
            <li><a href="#"> سياسة الاسترجاع والاستبدال </a></li>
            <li>اتصل بنا></li>
          </ul>
          <h3 style="color: rgb(228, 228, 228);">92000086</h3>
        </di>

        <di class="footer-item">
          <h3>انظم الى نشرتنا البريدية</h3>
          <hr />
          <form class="footer-form">
            <input type="email" placeholder="ادخل البريد الالكتروني" />
            <img src="assets/svg/lock_black_24dp.svg" width="25" height="25" style="position: absolute; left: 5px; top: 23px; " />
            <button type="submit">اشتراك</button>
          </form>
        </di>
      </div>
      <div class="item-down">
        <h3>تواصل معنا</h3>

        <div
          style="
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
            width: 200px;
         
            
            border-top: 0.1px solid rgba(255, 255, 255, 0.493);
            padding-top: 10px;
          "
        >
          <div>
            <img src="assets/svg/facebook.svg" width="30" height="30" alt="facebook" />
          </div>
          <div>
            <img src="assets/svg/twiiter.svg" width="30" height="30" alt="twitter" />
          </div>
          <div>
            <img src="assets/svg/youtuob.svg" width="30" height="30" alt="youtube" />
          </div>
          <div>
            <img src="assets/svg/instgram.svg" width="30" height="30" alt="instagram" />
          </div>
          <div>
            <img src="assets/svg/linkedin.svg" width="30" height="30" alt="linkedin" />
          </div>
          <div>
            <img src="assets/svg/snapchat.svg" width="30" height="30" alt="snapchat" />
          </div>
          <div>
            <img src="assets/svg/tiktok.svg" width="30" height="30" alt="tiktok" />

          </div>
        </div>
      </div>
    </div>

    <div class="downfooter">
      <div class="d-left">
        <div>سياسة الخصوصية | شروط الخدمة</div>
        <div>
          جميع الحقوق محفوظة لمكتبة جرير 2015 س.ت 1010032264 اونلاين س.ت
          101033434
        </div>
      </div>
      <div class="d-right">
        <div>
         <a href="#"><img src="assets/svg/america-express.svg" width="70" height="50" alt="am-exp" /></a> 

        </div>
        <div>
         <a href="#"><img src="assets/svg/master-card.svg" width="50" height="40" alt="mastercard" /></a> 
        </div>
        <div>
         <a href="#"><img src="assets/svg/visa.svg" width="50" height="30" alt="visa" /></a> 

        </div>
        <div>
         <a href="#"><img src="assets/svg/mada.svg" width="70" height="20" alt="am-exp" /></a> 

        </div>
        <div>
         <a href="#"><img src="assets/svg/qataf.svg" width="70" height="50" alt="am-exp" /></a> 

        </div>
        <div>
         <a href="#"> <img src="assets/svg/offer-pay.svg" width="70" height="40" alt="am-exp" /> </a> 
        </div>
      </div>
    </div>
  </footer>

    <script src="js/detailes.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
