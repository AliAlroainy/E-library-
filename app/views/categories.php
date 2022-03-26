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



    <!----------------********************----      main catgure      ---------------------**************************--------->

  
    <div class="father">

        <!-- start left-->
      <div  class="left-g">

        <div>  
      <div class="dtl-head">
        <a href="index.php">الرئيسية</a>
        <a href="#"> / الكتب العربية</a>
        <a href="#"> / كتب الكترونية</a>
      </div>
        </div>

        <div style="width: 300px; height: 70px; border: 1px solid green; display: flex; align-items: center; justify-content: center;font-size: 2rem; color: green;">
          <img src="app/views/assets/svg/svgexport-34.svg" width="30" height="30" style="margin-left: 5px;" />
          كتب الكترونية
        </div>

        <div style="align-items: center; width: 300px; height: 40px;padding: 5px; color: white; background-color: green; border-top-left-radius: 10px; border-top-right-radius: 10px; margin-top: 10px;" >
          تصفية النتائج
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; width: 300px; height: 40px;padding: 5px; color: rgb(53, 53, 53); background-color: rgb(225, 231, 225); border: none; border-bottom: 1px solid rgba(191, 191, 191, 0.529);" >
          <div>علامة تجارية</div>
          <div style="border: 1px solid #333; width: 20px; display: flex; align-items: center; justify-content: center;">-</div>
        </div>

        <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; width: 300px; height: 40px;padding: 5px; color: rgb(53, 53, 53); background-color: rgb(225, 231, 225); border: none; border-bottom: 1px solid rgba(191, 191, 191, 0.529);" >
          <div> السعر</div>
          <div style="border: 1px solid #333; width: 20px; display: flex; align-items: center; justify-content: center;">-</div>
        </div>

        <div style="display: flex; flex-direction: column; justify-content: space-between; align-items: center; width: 300px; height: 60px;padding: 5px; color: rgb(53, 53, 53); background-color: rgb(255, 255, 255); border: none; border-bottom: 1px solid rgba(191, 191, 191, 0.529);" >
          <div style="position: relative;display: flex; align-items: center; width: 100%; padding-top: 10px;">
            <div style="width: 20px; height: 20px; background-color: red; border: none; position: absolute; right: 1px;"></div>
            <div style="width: 100%; height: 10px; background-color: gray; border: none;"></div>
            <div style="width: 20px; height: 20px; background-color: red; border: none; position: absolute; left:1px;"></div>

          </div>

          <div style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
            
            <div>0<small>ر.س</small></div>
            <div>150<small>ر.س</small></div>
          </div>
        </div>

       <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; width: 300px; height: 40px;padding: 5px; color: rgb(53, 53, 53); background-color: rgb(225, 231, 225); border: none; border-bottom: 1px solid rgba(191, 191, 191, 0.529);" >
          <div> صيغة الكتاب</div>
          <div style="border: 1px solid #333; width: 20px; display: flex; align-items: center; justify-content: center;">-</div>
        </div>


      </div>
        <!-- end left-->


      <!-- start right-->
      <div  class="right-g">

        <div style="display: flex; flex-direction: row;justify-content: flex-end; padding-left: 45px; margin-bottom: 10px; " >
          <div>الترتيب بحسب :</div>
          <div>  <select>
            <option>الرجاء الاخنيار</option>
            <option> السعر</option>
            <option> الفئة</option>
            <option> المحرر</option>
          </select>  </div>
        </div>

        <!-- start books-->
        <ol id='list' style="direction: rtl; width: 96%; list-style: none; " >
          <li class="animals">
        <div style="display: flex; flex-grow: 1; flex-wrap: wrap; gap: 10px; width: 100%; padding-right: 20px; ">

           <!--------------------------start card ---------------->
     
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
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
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
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
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
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
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
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
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
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
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card -----> <!--------------------------start card ---------------->
      <div class="mainOffer-card">
        <div>
          <a href="details.php"
            ><img class="mainOffer-img" src="app/views/assets/books/3.jpg"
          /></a>
        </div>
        <div class="mainOffer-title">
          <div>
            <img src="app/views/assets/svg/card-book.svg" width="24" height="24" />

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
            <img src="app/views/assets/svg/star.svg" width="24" height="24" />
          </a>
          <div onclick="checkCart()" style="cursor: pointer;" >
            <img src="app/views/assets/svg/car.svg" width="30" height="30" />
          </div>
          <a href="#">
            <img src="app/views/assets/svg/card-arraw.svg" width="24" height="24" />
          </a>
        </div>
      </div>

      <!--end card ----->
   

        </div>
      </li>
        <!-- end books---------------------------------->

        <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
          <button style="background-color: #0089B6; height: 20px; display: flex; align-items: center; justify-content: center; width: 90%;">عرض المزيد</button>
        </div>

        <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
        <div style="width: 90%; border: none; background-color: rgba(230, 230, 230, 0.733); height: 10px; border-radius: 10px;"></div>
      </div>

      <div style="width: 100%; display: flex; align-items: center; justify-content: flex-start; color: green; font-size: 1rem; padding-right: 40px; margin-top: 10px;">
        اشتر من كتب الكترونية على مكتبة جرير الالكترونية
      </div>



      </div>
      <!-- end right-->


    </div>

    <div style="height: 300px; width: 100%;"></div>




    <?php include_once "app/views/components/footer.php" ?>

