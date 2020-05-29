<?php
include_once("header.php");
include_once('top-menu.php');
?>
  <form class="order">
    <table>
    <tbody>
      <tr valign="middle">
          <td width="150px">زبان</td>
          <td>
            <div style="display=none">لطفا زبانی راکه میخاهید سفارش شما تایپ شود را انتخاب نمایید</div>
          <select name="language" class="form-control language">
						        <option value=''>--انتخاب کنید--</option>
						        <option type='combobox' value='fa'>فارسی  </option>
										<option type='combobox' value='en'> انگلیسی</option>
										<option type='combobox' value='du'> آلمانی</option>
										<option type='combobox' value='russian'> روسی</option>
										<option type='combobox' value='arab'>عربی </option>
										<option type='combobox' value='spain'> اسپانیایی </option>
										<option type='combobox' value='turky'>ترکی استانبولی</option>
										<option type='combobox' value='kurdi'>کردی</option>
          </select>
          <img src="image/question.png">
          <font color="red">*</font>
</td>
</tr>
      
       <div class="language">
          <lable>زمینه</lable>
          <select name="language" class="form-control language">
						        <option value=''>--انتخاب کنید--</option>
						        <option type='combobox' value='fa'>فارسی  </option>
										<option type='combobox' value='en'> انگلیسی</option>
										<option type='combobox' value='du'> آلمانی</option>
										<option type='combobox' value='russian'> روسی</option>
										<option type='combobox' value='arab'>عربی </option>
										<option type='combobox' value='spain'> اسپانیایی </option>
										<option type='combobox' value='turky'>ترکی استانبولی</option>
										<option type='combobox' value='kurdi'>کردی</option>
					</select>
       </div>
            

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Type of thing you want to order</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" placeholder=" ">
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Another type of thing you want to order</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" placeholder=" ">
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label" for="date-picker-example">Date</label>
            </div>
            <div class="col-12">
              <input class="order-form-input datepicker" placeholder="Selected date" type="text"
                id="date-picker-example">
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Adress</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" placeholder="Street Address">
            </div>
            <div class="col-12 mt-2">
              <input class="order-form-input" placeholder="Street Address Line 2">
            </div>
            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="City">
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Region">
            </div>
            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="Postal / Zip Code">
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Country">
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="validation" id="validation" value="1">
                <label for="validation" class="form-check-label">I know what I need to know</label>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-12">
              <button type="button" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</table>
</form>
  <?php
include_once("footer.php");
?>