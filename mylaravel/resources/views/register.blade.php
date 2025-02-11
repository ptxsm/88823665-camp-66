@extends('layouts.default')
@section('content')
<div class="register-page ">
    <div class="register-box">
      <div class="register-logo">
        <a href="../index2.html"><b>Admin</b>LTE</a>
      </div>
      <!-- /.register-logo -->
      <div class="card">
        <div class="card-body register-card-body">
          <p class="register-box-msg">Register a new membership</p>
          <form action="{{url ('/register')}}" onsubmit="return myfunction()" oninput="return myfunction()" method="post">  
          @csrf
            <div class="input-group mb-3">
              <input type="text" name="name" id="name" class="form-control" placeholder="Full Name"  />
              <div class="input-group-text"><span class="bi bi-person"></span></div>
              <div class="valid-feedback">
                OK
              </div>
              <div class="invalid-feedback" id="invalid-name">
                กรุณาระบุข้อมูล
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" name = "email" id = "email" class="form-control" placeholder="Email"   />
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
              <div class="valid-feedback">
                OK
              </div>
              <div class="invalid-feedback" id="invalid-email">
                กรุณาตรวจสอบข้อมูล email ต้องมี @ และ . 
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" id="pass" class="form-control" placeholder="Password"  />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
              <div class="valid-feedback">
                OK
              </div>
              <div class="invalid-feedback" id="invalid-pass">
              กรุณาตรวจสอบรหัสผ่าน รหัสผ่านต้องมีตัวเลข ตัวพิมพ์เล็ก และตัวพิมพ์ใหญ่
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="mycheckbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree to the <a href="#">terms</a>
                  </label> 
                  <div class="valid-feedback">
                  OK
                  </div>
                  <div class="invalid-feedback" id="invalid-checkbox">
                  กรุณายอมรับเงื่อนไข
                  </div>        
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2" onclick= "return checkValue();">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
          <!-- <button class="btn" onclick="return myfunction()">Click me</button> -->
          <div class="social-auth-links text-center mb-3 d-grid gap-2">
          
          </div>
          <!-- /.social-auth-links -->
          <p class="mb-0">
            <a href="login.html" class="text-center"> I already have a membership </a>
          </p>
        </div>
        <!-- /.register-card-body -->
      </div>
    </div>
    <!-- /.register-box -->
</div>
  @endsection
  @section('scripts')
  <script>
       


      function myfunction(){

        let isValid = true; 
        let name = document.getElementById('name')
        name = $('#name')
        let email =document.getElementById('email').value.trim();
        emailCheck =$('#email')
        let pass = document.getElementById('pass').value.trim();
        password= $('#pass')
        let mycheckbox = document.getElementById('mycheckbox').checked;
        checkbox  = $('#mycheckbox')
        let n = ""; 

        if(name.val()== n){
          name.addClass('is-invalid');
          $('#invalid-name')
          isValid = false;          
        }
        else{
          name.removeClass('is-invalid');
        }  
        if(name.val()!= n){
            name.addClass('is-valid');     
        }else{
            name.removeClass('is-valid');
        }
        
          if( emailCheck.val() == n  ){
            emailCheck.addClass('is-invalid');
            $('#invalid-email')
            isValid = false;       
           }
          else{
            emailCheck.removeClass('is-invalid');
        
          }
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{0,3}$/;
        if(emailCheck.val() != n){
          if(!email.match(emailPattern)){
            emailCheck.addClass('is-invalid');
            $('#invalid-email')
            isValid = false;
          }else{
            emailCheck.removeClass('is-invalid'); if(email.match(emailPattern )){
              emailCheck.addClass('is-valid');      
            }
            else{
              emailCheck.removeClass('is-valid');
          
            }
          }
        }
        
                   
        if( password.val() == n ){
          password.addClass('is-invalid');
          $('#invalid-pass')
          isValid = false;        }
        else{
          password.removeClass('is-invalid');
        }
        let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;
        if(password.val() != n){
          if (!pass.match(passwordPattern)) {
            password.addClass('is-invalid');
            $('#invalid-pass')
            isValid = false;          
          }else{
            password.removeClass('is-invalid'); 
            if (pass.match(passwordPattern)) {
            password.addClass('is-valid');
          }else{
            password.removeClass('is-valid')
          }
        }
      }
      if (!mycheckbox) {
        checkbox.addClass('is-invalid');
            $('#invalid-checkbox')
            isValid = false;          
      }else{
            checkbox.removeClass('is-invalid')
      }
    
      return isValid;
    }
    // function checkname() {
    //         $('#name').removeClass('is-invalid');
    //         $('#name').removeClass('is-valid');
    //         let name = document.getElementById('name');
    //         // let email = document.getElementById('email');
    //         if (name.value == '') {
    //             $('#name').addClass('is-invalid'); //error
    //         } else {
    //             $('#name').addClass('is-valid'); //ok
    //         }
    //         return true;
    //     }

    //     function checkemail() {
    //         let email = $('#email');
    //         let emailValue = email.val().trim();
    //         const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/;

    //         email.removeClass('is-invalid is-valid');

    //         if (emailValue === '') {
    //             email.addClass('is-invalid'); // ถ้าข้อมูลว่าง ขึ้น Invalid
    //             return false;
    //         } else if (!emailPattern.test(emailValue)) {
    //             email.addClass('is-invalid'); // ถ้า Format ไม่ถูกต้อง ขึ้น Invalid
    //             return false;
    //         } else {
    //             email.addClass('is-valid'); // ถ้าถูกต้อง ขึ้น Valid
    //             return true;
    //         }
    //     }

    //     function checkPassword() {
    //         let password = $('#password');
    //         let passwordValue = password.val().trim();
    //         const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    //         password.removeClass('is-invalid is-valid');

    //         if (passwordValue === '') {
    //             password.addClass('is-invalid'); // ถ้าข้อมูลว่าง ขึ้น Invalid
    //             return false;
    //         } else if (!passwordPattern.test(passwordValue)) {
    //             password.addClass('is-invalid'); // ถ้า Format ไม่ถูกต้อง ขึ้น Invalid
    //             return false;
    //         } else {
    //             password.addClass('is-valid'); // ถ้าถูกต้อง ขึ้น Valid
    //             return true;
    //         }
    //     }

    //     function checkValue() {
    //         let checkbox = document.getElementById("flexCheckDefault");
    //         if (!checkbox.checked) {
    //             Swal.fire({
    //                 icon: "error",
    //                 title: "Oops...",
    //                 text: "Please check the CheckBox!",
    //                 footer: '<a href="#">Why do I have this issue?</a>'
    //             });
    //             return false;
    //         }
    //     }
      
      
      
     
  </script>
    
  <!-- <script>
    console.log(myval2)
  </script> -->
  @endsection