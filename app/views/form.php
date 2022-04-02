<?php include_once "components/header.php" ?>


      

      <!------------------------------66666666666668788-->

      <form action="#" class="form">
        <h1 class="text-center">بيانات الدفع</h1>
        <!-- Progress bar -->
        <div class="progressbar">
          <div class="progress" id="progress"></div>
          
          <div
            class="progress-step progress-step-active"
            data-title="شخصي"
          ></div>
          <div class="progress-step" data-title="اتصال"></div>
          <div class="progress-step" data-title="البطاقة"></div>
          <div class="progress-step" data-title="التاكيد"></div>
        </div>
  
        <!-- Steps -->
        <div class="form-step form-step-active">
          <div class="input-group">
            <label for="username">اسم المستخدم</label>
            <input type="text" name="username" id="username" required/>
          </div>
          <div class="input-group">
            <label for="countery">البلد</label>
            <input type="text" name="countery" id="position" required/>
          </div>
          <div class="">
            <a href="#"  class="btn btn-next width-50 ml-auto">التالي</a>
          </div>
        </div>
        <div class="form-step">
          <div class="input-group">
            <label for="phone">الهاتف</label>
            <input type="text" name="phone" id="phone" required/>
          </div>
          <div class="input-group">
            <label for="email">البريد الالكتروني</label>
            <input type="text" name="email" id="email" required/>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">السابق</a>
            <a href="#" class="btn btn-next">التالي</a>
          </div>
        </div>
        <div class="form-step">
          <div class="input-group">
            <label for="dob">تاريخ الميلاد</label>
            <input type="date" name="dob" id="dob" required/>
          </div>
          <div class="input-group">
            <label for="ID">رقم البطاقة</label>
            <input type="number" name="ID" id="ID" required/>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">السابق</a>
            <a href="#" class="btn btn-next">التالي</a>
          </div>
        </div>
        <div class="form-step">
          <div class="input-group">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" id="password" required />
          </div>
          <div class="input-group">
            <label for="confirmPassword">تاكيد كلمة المرور</label>
            <input
              type="password"
              name="confirmPassword"
              id="confirmPassword"
              required
            />
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">السابق</a>
            <input type="submit" value="تاكيد" class="btn" style="background-color: red; font-size: 1rem;  font-family: Tajawal;" />
          </div>
        </div>
      </form>

      <!--iiiiiiiiiiiiiiiiiiiiiiiiiiiii-->












      <?php include_once "components/footer.php" ?>
