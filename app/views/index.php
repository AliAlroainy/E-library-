<?php include "components/header.php" ?>

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

    <!--------------------      brows catgure      -------------------->

    <h2 style="color: #5E2F26; direction: rtl; margin: 20px; margin-bottom: 0px;">تصفح حسب القسم</h2>
    
      <div class="divs-dady" >
        <img src="assets/svg/left.svg" style="cursor: pointer;" />
         <!--      start card   -------->
        <a  href="categories" class="card-dv" >
          <div><img src="assets/svg/religion.svg" width="40" height="40" /> </div>
          <div style="color:#5E2F26 ;">دين</div> 
        </a>
        <!--      end card   -------->

        <!--      start card   -------->
        <a href="categories" class="card-dv" >
          <div><img src="assets/svg/history.svg" width="40" height="40" /> </div>
          <div style="color: #F67828;">تاريخ</div> 
        </a>
        <!--      end card   -------->
        <!--      start card   -------->
        <a href="categories" class="card-dv" >
          <div><img src="assets/svg/stories.svg" width="40" height="40" /></div>
          <div style="color: #76689A;" >روايات</div> 
        </a>
        <!--      end card   -------->
        <!--      start card   -------->
        <a id="crl" href="categories" class="card-dv" >
          <div><img src="assets/svg/poliyes.svg" width="40" height="40" /></div>
          <div style="color: #BC4077;">سياسية</div> 
        </a>
        <!--      end card   -------->
        <!--      start card   -------->
        <a id="crl" href="categories" class="card-dv" >
          <div><img src="assets/svg/ecommnoimic.svg" width="40" height="40" /></div>
          <div style="color: #0089B6 ;">اقتصاد</div> 
        </a>
        <!--      end card   -------->
        <!--      start card   -------->
        <a id="crl" href="categories" class="card-dv" >
          <div><img src="assets/svg/cook.svg" width="100%" height="40" /></div>
          <div style="color: #7DB344;">طبخ</div> 
        </a>
        <!--      end card   -------->
        <!--      start card   -------->
        <a id="crl" href="categories" class="card-dv" >
          <div><img src="assets/svg/careing.svg" width="40" height="40" /></div>
          <div style=" color:#9C223F ;">تربية</div> 
        </a>
        <!--      end card   -------->

        <img src="assets/svg/right.svg" style="cursor: pointer;" />

      </div>
    

    <!---------------------   some offers pic ------------------------->

    <div style="display: flex; flex-direction: column;gap: 20px; width: 100%; justify-content: center; align-items: center; padding: 20px;">
      
      <div style="display: flex; flex-direction: row; width: 100%; gap: 20px;">

      <div style="width: 100%; height: 120px;">
        <img src="assets/h1.jpg" style="height: 100%; width: 100%;" />
      </div>
      
      <div style="width: 100%; height: 120px;">
        <img src="assets/h2.jpg" style="height: 100%; width: 100%; " />
      </div>
      <div id="crl" style="width: 100%; height: 120px;">
        <img src="assets/h3.jpg" style="height: 100%; width: 100%;" />
      </div>
      <div id="crl" style="width: 100%; height: 120px;">
        <img src="assets/h4.jpg" style="height: 100%; width: 100%;" />
      </div>

    </div>
<!--end top-->
<div style="width: 100%;">
  <div style="width: 100%; height: 120px;">
    <img src="assets/bts-home-page-ar-07.jpg" style="height: 100%; width: 100%;" />
  </div>
</div>

    </div>

     <!-- ---------   search ----------------->

     <!-- ordered list -->
     <ol id='list' style="direction: rtl; width: 96%; list-style: none; " >
      <li class="animals">
        
    
    <!-----------------------   Latest offer       ---------------------->

    <div class="mainOffer-container">
      <div class="latst-offer">
        <h1> العروض الحالية</h1> 
        <a style="color: #0089B6; text-decoration: none;" href="categories"><h3>عرض الكل</h3></a>
      </div>
      
      <div class="lastoffer-cards">

      <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; right: 10px;">

        <img src="assets/svg/left.svg" style="cursor: pointer; height: 30px; width: 30px;" />
      </div>
        <!--------------------------start card ---------------->
        <div class="mainOffer-card">
          <div>
            <a href="details">
              <img class="mainOffer-img" src="assets/books/1.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
             <img src="assets/svg/card-book.svg" width="24" height="24" />
            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          <div
            id="demo"
            style="color: rgb(5, 224, 5)"
            class="mainOffer-timer"
          ></div>
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>

        <!--end card ----->

        <!--start card ------------------>
        <div class="mainOffer-card">
          <div>
            <a href="details">
              <img class="mainOffer-img" src="assets/books/5.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />
            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          <div
            id="demo1"
            style="color: rgb(5, 224, 5)"
            class="mainOffer-timer"
          ></div>
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>
        <!--end card ----->

        <!--------------start card --------------------->
        <div class="mainOffer-card">
          <div>
            <a href="details">
              <img class="mainOffer-img" src="assets/books/4.jpg" />
            </a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />
            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          <div
            id="demo2"
            style="color: rgb(5, 224, 5)"
            class="mainOffer-timer"
          ></div>
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>
        <!--end card ----->

        <!--------------start card --------------------->
        <div class="mainOffer-card">
          <div>
            <a href="details">
              <img class="mainOffer-img" src="assets/books/5.jfif" />
            </a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />

            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          <div
            id="demo5"
            style="color: rgb(5, 224, 5)"
            class="mainOffer-timer"
          ></div>
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>
        <!--end card ----->


        <!-------------start card -------------------------->
        <div class="mainOffer-card">
          <div>
            <a href="details"
              ><img class="mainOffer-img" src="assets/books/3.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />

            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          <div
            id="demo3"
            style="color: rgb(5, 224, 5)"
            class="mainOffer-timer"
          ></div>
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>
        <!--end card ----->
        <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; left:2px;">
          <img src="assets/svg/right.svg" style="cursor: pointer; height: 30px; width: 30px;" />
        </div>
      
      </div>

      
      <!---->
     
    </div>



    


      </li>
      <li class="animals">
        <!-----------------------   الكتب الدينية   ---------------------->
    
        <div id="1" class="mainOffer-container">
          <div class="latst-offer">
            <h1>الكتب الدينية</h1>
            <a style="color: #0089B6; text-decoration: none;" href="categories"><h3>عرض الكل</h3></a>

          </div>
    
          <div class="lastoffer-cards">

            <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; right: 10px;">

              <img src="assets/svg/left.svg" style="cursor: pointer; height: 30px; width: 30px;" />
            </div>

            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->

    
            <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; left:2px;">
              <img src="assets/svg/right.svg" style="cursor: pointer; height: 30px; width: 30px;" />
            </div>

          </div>
    
          <!---->
        </div>
    </li>
      <li class="animals">
        <!-----------------------   الكتب التاريخية  ---------------------->
    
        <div id="2" class="mainOffer-container">
          <div class="latst-offer">
            <h1>الكتب التاريخية</h1>
            <a style="color: #0089B6; text-decoration: none;" href="categories"><h3>عرض الكل</h3></a>
          </div>
    
          <div class="lastoffer-cards">

            <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; right: 10px;">

              <img src="assets/svg/left.svg" style="cursor: pointer; height: 30px; width: 30px;" />
            </div>

            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->
            <!--------------------------start card ---------------->
            <div class="mainOffer-card">
              <div>
                <a href="details"
                  ><img class="mainOffer-img" src="assets/books/3.jpg"
                /></a>
              </div>
              <div class="mainOffer-title">
                <div>
                  <img src="assets/svg/card-book.svg" width="24" height="24" />
    
                </div>
                <h2>كتابي الكتروني</h2>
              </div>
              <div class="mainOffer-deyail">
                <p style="text-align: center; margin-bottom: 10px">
                  كتاب مغامرات مارتن (كتاب الكتروني)
                </p>
              </div>
              <div class="mainOffer-price">
                <h1 style="color: red">
                  49<span style="font-size: 0.5rem">ر.س</span>
                </h1>
                <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                  شامل الضريبة
                </p>
              </div>
              <div class="mainOffer-another">
                <p>صيغ اخرى :</p>
                <a href="#" style="text-decoration: none"
                  ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
                >
              </div>
              
              <div class="mainOffer-icon">
                <a href="#">
                  <img src="assets/svg/star.svg" width="24" height="24" />
                </a>
                <div onclick="checkCart()" style="cursor: pointer;" >
                  <img src="assets/svg/car.svg" width="30" height="30" />
                </div>
                <a href="#">
                  <img src="assets/svg/card-arraw.svg" width="24" height="24" />
                </a>
              </div>
            </div>

            <!--end card ----->

    
            <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; left:2px;">
              <img src="assets/svg/right.svg" style="cursor: pointer; height: 30px; width: 30px;" />
            </div>

          </div>
          <!---->
        </div>
    </li>

    <li class="animals">
      <!-----------------------   ابسياسية ---------------------->
  
      <div id="3" class="mainOffer-container">
        <div class="latst-offer">
          <h1>السياسية</h1>
          <a style="color: #0089B6; text-decoration: none;" href="categories"><h3>عرض الكل</h3></a>

        </div>
  
        <div class="lastoffer-cards">

          <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; right: 10px;">

            <img src="assets/svg/left.svg" style="cursor: pointer; height: 30px; width: 30px;" />
          </div>

          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
              <div>
                <img src="assets/svg/card-book.svg" width="24" height="24" />
  
              </div>
              <h2>كتابي الكتروني</h2>
            </div>
            <div class="mainOffer-deyail">
              <p style="text-align: center; margin-bottom: 10px">
                كتاب مغامرات مارتن (كتاب الكتروني)
              </p>
            </div>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>
              <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                شامل الضريبة
              </p>
            </div>
            <div class="mainOffer-another">
              <p>صيغ اخرى :</p>
              <a href="#" style="text-decoration: none"
                ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
              >
            </div>
            
            <div class="mainOffer-icon">
              <a href="#">
                <img src="assets/svg/star.svg" width="24" height="24" />
              </a>
              <div onclick="checkCart()" style="cursor: pointer;" >
                <img src="assets/svg/car.svg" width="30" height="30" />
              </div>
              <a href="#">
                <img src="assets/svg/card-arraw.svg" width="24" height="24" />
              </a>
            </div>
          </div>

          <!--end card ----->
          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
              <div>
                <img src="assets/svg/card-book.svg" width="24" height="24" />
  
              </div>
              <h2>كتابي الكتروني</h2>
            </div>
            <div class="mainOffer-deyail">
              <p style="text-align: center; margin-bottom: 10px">
                كتاب مغامرات مارتن (كتاب الكتروني)
              </p>
            </div>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>
              <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                شامل الضريبة
              </p>
            </div>
            <div class="mainOffer-another">
              <p>صيغ اخرى :</p>
              <a href="#" style="text-decoration: none"
                ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
              >
            </div>
            
            <div class="mainOffer-icon">
              <a href="#">
                <img src="assets/svg/star.svg" width="24" height="24" />
              </a>
              <div onclick="checkCart()" style="cursor: pointer;" >
                <img src="assets/svg/car.svg" width="30" height="30" />
              </div>
              <a href="#">
                <img src="assets/svg/card-arraw.svg" width="24" height="24" />
              </a>
            </div>
          </div>

          <!--end card ----->
          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
              <div>
                <img src="assets/svg/card-book.svg" width="24" height="24" />
  
              </div>
              <h2>كتابي الكتروني</h2>
            </div>
            <div class="mainOffer-deyail">
              <p style="text-align: center; margin-bottom: 10px">
                كتاب مغامرات مارتن (كتاب الكتروني)
              </p>
            </div>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>
              <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                شامل الضريبة
              </p>
            </div>
            <div class="mainOffer-another">
              <p>صيغ اخرى :</p>
              <a href="#" style="text-decoration: none"
                ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
              >
            </div>
            
            <div class="mainOffer-icon">
              <a href="#">
                <img src="assets/svg/star.svg" width="24" height="24" />
              </a>
              <div onclick="checkCart()" style="cursor: pointer;" >
                <img src="assets/svg/car.svg" width="30" height="30" />
              </div>
              <a href="#">
                <img src="assets/svg/card-arraw.svg" width="24" height="24" />
              </a>
            </div>
          </div>

          <!--end card ----->
          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
              <div>
                <img src="assets/svg/card-book.svg" width="24" height="24" />
  
              </div>
              <h2>كتابي الكتروني</h2>
            </div>
            <div class="mainOffer-deyail">
              <p style="text-align: center; margin-bottom: 10px">
                كتاب مغامرات مارتن (كتاب الكتروني)
              </p>
            </div>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>
              <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                شامل الضريبة
              </p>
            </div>
            <div class="mainOffer-another">
              <p>صيغ اخرى :</p>
              <a href="#" style="text-decoration: none"
                ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
              >
            </div>
            
            <div class="mainOffer-icon">
              <a href="#">
                <img src="assets/svg/star.svg" width="24" height="24" />
              </a>
              <div onclick="checkCart()" style="cursor: pointer;" >
                <img src="assets/svg/car.svg" width="30" height="30" />
              </div>
              <a href="#">
                <img src="assets/svg/card-arraw.svg" width="24" height="24" />
              </a>
            </div>
          </div>

          <!--end card ----->
          <!--------------------------start card ---------------->
          <div class="mainOffer-card">
            <div>
              <a href="details"
                ><img class="mainOffer-img" src="assets/books/3.jpg"
              /></a>
            </div>
            <div class="mainOffer-title">
              <div>
                <img src="assets/svg/card-book.svg" width="24" height="24" />
  
              </div>
              <h2>كتابي الكتروني</h2>
            </div>
            <div class="mainOffer-deyail">
              <p style="text-align: center; margin-bottom: 10px">
                كتاب مغامرات مارتن (كتاب الكتروني)
              </p>
            </div>
            <div class="mainOffer-price">
              <h1 style="color: red">
                49<span style="font-size: 0.5rem">ر.س</span>
              </h1>
              <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
                شامل الضريبة
              </p>
            </div>
            <div class="mainOffer-another">
              <p>صيغ اخرى :</p>
              <a href="#" style="text-decoration: none"
                ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
              >
            </div>
            
            <div class="mainOffer-icon">
              <a href="#">
                <img src="assets/svg/star.svg" width="24" height="24" />
              </a>
              <div onclick="checkCart()" style="cursor: pointer;" >
                <img src="assets/svg/car.svg" width="30" height="30" />
              </div>
              <a href="#">
                <img src="assets/svg/card-arraw.svg" width="24" height="24" />
              </a>
            </div>
          </div>

          <!--end card ----->

  
          <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; left:2px;">
            <img src="assets/svg/right.svg" style="cursor: pointer; height: 30px; width: 30px;" />
          </div>

        </div>
  
        <!---->
      </div>
  </li>

  <li class="animals">
    <!-----------------------   الاقتصاد  ---------------------->

    <div id="4" class="mainOffer-container">
      <div class="latst-offer">
        <h1>الاقتصاد</h1>
        <a style="color: #0089B6; text-decoration: none;" href="categories"><h3>عرض الكل</h3></a>

      </div>

      <div class="lastoffer-cards">

        <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; right: 10px;">

          <img src="assets/svg/left.svg" style="cursor: pointer; height: 30px; width: 30px;" />
        </div>

        <!--------------------------start card ---------------->
        <div class="mainOffer-card">
          <div>
            <a href="details"
              ><img class="mainOffer-img" src="assets/books/3.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />

            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>

        <!--end card ----->
        <!--------------------------start card ---------------->
        <div class="mainOffer-card">
          <div>
            <a href="details"
              ><img class="mainOffer-img" src="assets/books/3.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />

            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>

        <!--end card ----->
        <!--------------------------start card ---------------->
        <div class="mainOffer-card">
          <div>
            <a href="details"
              ><img class="mainOffer-img" src="assets/books/3.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />

            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>

        <!--end card ----->
        <!--------------------------start card ---------------->
        <div class="mainOffer-card">
          <div>
            <a href="details"
              ><img class="mainOffer-img" src="assets/books/3.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />

            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>

        <!--end card ----->
        <!--------------------------start card ---------------->
        <div class="mainOffer-card">
          <div>
            <a href="details"
              ><img class="mainOffer-img" src="assets/books/3.jpg"
            /></a>
          </div>
          <div class="mainOffer-title">
            <div>
              <img src="assets/svg/card-book.svg" width="24" height="24" />

            </div>
            <h2>كتابي الكتروني</h2>
          </div>
          <div class="mainOffer-deyail">
            <p style="text-align: center; margin-bottom: 10px">
              كتاب مغامرات مارتن (كتاب الكتروني)
            </p>
          </div>
          <div class="mainOffer-price">
            <h1 style="color: red">
              49<span style="font-size: 0.5rem">ر.س</span>
            </h1>
            <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
              شامل الضريبة
            </p>
          </div>
          <div class="mainOffer-another">
            <p>صيغ اخرى :</p>
            <a href="#" style="text-decoration: none"
              ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
            >
          </div>
          
          <div class="mainOffer-icon">
            <a href="#">
              <img src="assets/svg/star.svg" width="24" height="24" />
            </a>
            <div onclick="checkCart()" style="cursor: pointer;" >
              <img src="assets/svg/car.svg" width="30" height="30" />
            </div>
            <a href="#">
              <img src="assets/svg/card-arraw.svg" width="24" height="24" />
            </a>
          </div>
        </div>

        <!--end card ----->


        <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; left:2px;">
          <img src="assets/svg/right.svg" style="cursor: pointer; height: 30px; width: 30px;" />
        </div>

      </div>

      <!---->
    </div>
</li>

<li class="animals">
  <!-----------------------   الطبخ  ---------------------->

  <div id="5" class="mainOffer-container">
    <div class="latst-offer">
      <h1>الطبخ</h1>
      <a style="color: #0089B6; text-decoration: none;" href="categories"><h3>عرض الكل</h3></a>

    </div>

    <div class="lastoffer-cards">

      <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; right: 10px;">

        <img src="assets/svg/left.svg" style="cursor: pointer; height: 30px; width: 30px;" />
      </div>

      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->


      <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; left:2px;">
        <img src="assets/svg/right.svg" style="cursor: pointer; height: 30px; width: 30px;" />
      </div>

    </div>
    <!---->
  </div>
</li>

<li class="animals">
  <!-----------------------  افضل الروايات الرومانسية  ---------------------->

  <div id="6" class="mainOffer-container">
    <div class="latst-offer">
      <h1>افضل الروايات الرومانسية</h1>
      <a style="color: #0089B6; text-decoration: none;" href="categories"><h3>عرض الكل</h3></a>

    </div>

    <div class="lastoffer-cards">

      <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; right: 10px;">

        <img src="assets/svg/left.svg" style="cursor: pointer; height: 30px; width: 30px;" />
      </div>

      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
      <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details"
            ><img class="mainOffer-img" src="assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="assets/svg/card-book.svg" width="24" height="24" />

          </div>
          <h2>كتابي الكتروني</h2>
        </div>
        <div class="mainOffer-deyail">
          <p style="text-align: center; margin-bottom: 10px">
            كتاب مغامرات مارتن (كتاب الكتروني)
          </p>
        </div>
        <div class="mainOffer-price">
          <h1 style="color: red">
            49<span style="font-size: 0.5rem">ر.س</span>
          </h1>
          <p style="font-size: 0.7rem; color: rgba(128, 128, 128, 0.664)">
            شامل الضريبة
          </p>
        </div>
        <div class="mainOffer-another">
          <p>صيغ اخرى :</p>
          <a href="#" style="text-decoration: none"
            ><p style="color: blue; font-weight: bold">كتاب مطبوع</p></a
          >
        </div>
        
        <div class="mainOffer-icon">
          <a href="#">
            <img src="assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->


      <div style="display: flex; align-items: center; width: 20px; position: absolute; top: 150px; left:2px;">
        <img src="assets/svg/right.svg" style="cursor: pointer; height: 30px; width: 30px;" />
      </div>

    </div>

    <!---->
  </div>
</li>


  </ol>


  <?php include "components/footer.php" ?>

