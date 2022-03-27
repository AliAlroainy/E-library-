<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />

    <title>about</title>
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

    <div style="width: 100vw; height: 70vh; display: flex; align-items: center; justify-content: center;">about</div>

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

    <script src="js/script.js"></script>
  </body>
</html>
