<?php include_once "app/views/components/header.php" ?>


    <!------------------------ slider -------------------------------------------------->

    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="app/views/assets/slid1.jpg" style="width: 100%; height: 300px;" />
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="app/views/assets/slid2.jpg" style="width: 100%; height: 300px;" />
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="app/views/assets/slid3.jpg" style="width: 100%; height: 300px;" />
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
          <img onclick="img()" src="app/views/assets/books/1.jpg" width="200" height="300" alt="hi here" />
        </div>

        <div>

          <di>
            <img src="app/views/assets/books/1.jpg" width="30" height="40" />
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
            <img src="app/views/assets/goldstar.png" width="15" height="15" />
            <img src="app/views/assets/goldstar.png" width="15" height="15" />
            <img src="app/views/assets/goldstar.png" width="15" height="15" />
            <img src="app/views/assets/goldstar.png" width="15" height="15" />
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
            <input type="radio" checked> <samp>كتاب الكتروني</samp> <samp> <img src="app/views/assets/svg/question.svg" width="10" height="10" />
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
        <button style="height: 30px;display: flex; align-items: center; justify-content: center;box-shadow: 0px 0px 2px 1px rgba(177, 176, 176, 0.692);">اضافة الى السلة  <img src="app/views/assets/svg/cart-1.svg" width="20" height="20" /> </button>
        </div>
        <div style="background-color: rgb(238, 238, 238); display: flex;flex-wrap: wrap; gap: 10px; padding: 10px;">
          <div>
            <img src="app/views/assets/svg/secury.svg" width="10" height="10" />
            تسوق آمن
            <img src="app/views/assets/svg/question.svg" width="10" height="10" />

          </div>
          <div>
            <img src="app/views/assets/svg/secury.svg" width="10" height="10" />
            اصلي ومضمون
            <img src="app/views/assets/svg/question.svg" width="10" height="10" />

          </div>
          <div>
            <img src="app/views/assets/svg/secury.svg" width="10" height="10" />
            شحن سريع ومجاني
            <img src="app/views/assets/svg/question.svg" width="10" height="10" />
          </div>
        </div>
        <br/>
        <div><hr/></div>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-evenly;">
          <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
            مشاركة
            <img src="app/views/assets/svg/share_black_24dp.svg" width="15" height="15" style="margin-right: 10px;" />
          </button>
            <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
              المفضلة
              <img src="app/views/assets/svg/favorite_black_24dp (1).svg" width="15" height="15" style="margin-right: 10px;" />
            </button>
              <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
                مقارنة
              <img src="app/views/assets/svg/card-arraw.svg" width="15" height="15" style="margin-right: 10px;" />
              </button>
        </div>
        <br/>
        <hr/>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-evenly;">
          <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
            مشاركة
            <img src="app/views/assets/svg/share_black_24dp.svg" width="15" height="15" style="margin-right: 10px;" />
          </button>
            <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
              المفضلة
              <img src="app/views/assets/svg/favorite_black_24dp (1).svg" width="15" height="15" style="margin-right: 10px;" />
            </button>
              <button style="width: 30%;color: #333; background-color: #fff; display: flex; justify-content: center; box-shadow: 0px 0px 2px 1px rgba(51, 51, 51, 0.603);">
                مقارنة
                <img src="app/views/assets/svg/card-arraw.svg" width="15" height="15" style="margin-right: 10px;" />
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
              <a href="details.php"
                ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
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
              <a href="details.php"
                ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
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
              <a href="details.php"
                ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
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
              <a href="details.php"
                ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
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
    



<?php include_once "app/views/components/footer.php" ?>

