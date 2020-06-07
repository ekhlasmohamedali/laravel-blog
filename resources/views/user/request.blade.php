@extends('layouts.user')
@section('title','تقديم طلب الالتحاق')
@section('content')
<div class="tolap">
             
            <!-- end card one -->
            <!-- start card two -->
        <div class="card2 border-secondary mb-3">
         <div class="card-header">
            <p>البيانات المطلوبه</p>
         </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <div class="card-body text-secondary" >
            <form method="post" action="/request" enctype="multipart/form-data">
            @csrf
               <div class="container">

                    <div class="row">
                        <div class=" form-group col-3">
                          <input type="radio"  name="gender" value="مصري" checked>مصري<br>
                        </div>
                        
                        <div class="form-group col-3">
                          <input type="radio" name="gender" value="وافد" 
                          > وافد<br>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class=" form-group col-3">
                          <input type="radio" name="student_type" value="طلاب قدامي" checked> طلاب قدامي<br>
                        </div>
                        
                        <div class=" form-group col-3">
                          <input type="radio" name="student_type" value="طلاب مستجدين" 
                           > طلاب مستجدين<br>
                        </div>
                    </div>
                    <div class="row">
                          <div class="form-group col-3">
                        <label > اسم الطالب <bdi>:</bdi> </label>
                          </div>
                          <div class= "form-group col-3">
                        <input type="text" name="name" value="{{ old('name')}}" class="form-control" required  placeholder="الإسم رباعي باللغة العربية">
                  </div>
                    </div>
                  
                 <div class="row">
                      <div class=" form-group col-3">
                  <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text" name="student_ssn" value="{{ old('student_ssn')}}"  class="form-control"required >
              </div>
                 </div>
                 
                  
                   <div class="row">
                     <div class="form-group col-3">
                  <label> كود الطالب <bdi>:</bdi> </label>
                     </div>
                      <div class="form-group col-3">
                  <input type="text"  name="code"  value="{{ old('code')}}" class="form-control" required >
                        </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-3">
                  <label> تاريخ الميلاد<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="date" name="birthday"  value="{{ old('birthday')}}" class="form-control" required >
                   </div>
                   </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> محل الاقامه<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <select name="residence" class="form-control" required >
                    <option  value=" disabled"></option>
                    <option value="وجه بحري" 

                    @if(old( "residence" ) == "وجه بحري")
                    {{ "selected" }}
                    @endif
                    >وجه بحري</option>
                    <option value="وجه قبلي" 
                    
                    @if(old( "residence" ) == "وجه قبلي")
                    {{ "selected" }}
                    @endif
                    >وجه قبلي</option>
                    <option value="سيناء"
                    
                    @if(old( "residence" ) == "سيناء")
                    {{ "selected" }}
                    @endif
                    >سيناء</option>
                    
                  </select>
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> العنوان بالتفصيل <bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text" name="address"  value="{{ old('address')}}" class="form-control"required>
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> البريد الالكتروني<bdi>:</bdi>  </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="email" name="email"  value="{{ old('email')}}" class="form-control"required >
                  </div>
                  </div>
                
                       
                  
                  
                  <div class="row">
                    <div class="form-group col-3">
                        <label> رقم الموبيل<bdi>:</bdi> </label>
                         </div>
                    <div class="form-group col-3">
                        <input type="text" name="mobile"  value="{{ old('mobile')}}" class="form-control" required >
                    </div>
                  
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> السنه الدراسيه<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text" name="study_year" value="{{ old('study_year')}}"  class="form-control" required>
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                  <label> الكليه <bdi>:</bdi> </label>
                  </div>
                    <div class="form-group col-3">
                  <input type="text" name="collegue"  value="{{ old('collegue')}}" class="form-control"required >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-3">
                        
                        <label> الفرقه <bdi>:</bdi> </label>
                        </div>
                        <div class="form-group col-3">
    <select  name="grade" required>

       <option value="الفرقه الاولي"
       
       @if(old( "grade" ) == "الفرقه الاولي")
                    {{ "selected" }}
                    @endif>الفرقه الاولي </option>
       <option value="الفرقه الاعداديه"
       
       @if(old( "grade" ) == "الفرقه الاعداديه")
                    {{ "selected" }}
                    @endif
                    >الفرقه الاعداديه</option>
       <option value="الفرقه الثانيه"
       
       @if(old( "grade" ) == "الفرقه الثانيه")
                    {{ "selected" }}
                    @endif
       >الفرقه الثانيه</option>
       <option value="الفرقه الثالثه"
       
       @if(old( "grade" ) == "الفرقه الثالثه")
                    {{ "selected" }}
                    @endif
                    >الفرقه الثالثه</option>
       <option value="الفرقه الرابعه"
       
       @if(old( "grade" ) == "الفرقه الرابعه")
                    {{ "selected" }}
                    @endif
       >الفرقه الرابعه</option>
       <option value="الفرقه الخامسه"
       
       @if(old( "grade" ) == "الفرقه الخامسه")
                    {{ "selected" }}
                    @endif>الفرقه الخامسه </option>
       <option value="الفرقه السادسه"
       
       @if(old( "grade" ) == "الفرقه السادسه")
                    {{ "selected" }}
                    @endif>الفرقه السادسه</option>
  
</select>
                        </div>
                  </div>
                     
       
                    <div class="row">
                      <div class="col-6">

                        <div class="form-group" >
                        <label for="post image">ارفق صورتك الشخصيه:</label>
                     <input type="file" class="form-group"  name="student_image" placeholder="add a new image" required class="py-3">
                      
                      </div></div>
                    <div class="col-6">

                        
                        <div class="form-group">
                        <label for="post image">ارفق صوره بطاقتك الشخصيه:</label>
                      <input type="file" class="form-group" name="ssn_image" placeholder="add a new image"required>
                        
                      </div></div>
                      </div>
                    <div class="row">
                      <div class="col-3">
                        <label> كلمة المرور<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="password"value="{{ old('password')}}" name="password" class="form-control" required>
                  </div>
                    </div>
                    
                  <div class="row">
                      <div class="col-3">
                        <label> تأكيد كلمة المرور<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="password"  value="{{ old('password_sure')}}"name="password_sure" class="form-control" required>
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        <label>  اسم ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text"  value="{{ old('father_name')}}"name="father_name" class="form-control" >
                  </div>
                  </div>
                  
                     <div class="row">
                      <div class="col-3">
                        <label>صلة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text"  value="{{ old('parent_link')}}" name="parent_link" class="form-control" required >
                  </div>
                     </div>
                     
                  <div class="row">
                      <div class="col-3">
                        <label> الرقم القومي<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" value="{{ old('father_ssn')}}" name="father_ssn"class="form-control"required>
                  </div>
                  </div>
                  <div class="row">
                      <div class="col-3">
                        <label> وظيفة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" value="{{ old('father_job')}}"name="father_job" class="form-control"required >
                     </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        <label> رقم الموبايل<bdi>:</bdi> </label>
                        </div>
                       <div class="col-3">
                        <input type="text"value="{{ old('phone')}}" name="phone"class="form-control" required>
                        </div>
                  </div>
              
                   <div class="row">
                  <div class="col-12">
                      
                        <div class="form-group d-flex flex-column">
                        <label for="post image">ارفق صوره بطاقه ولي الامر :</label>
                      <input type="file" class="form-group" name="father_image" placeholder="ارفق صوره بطاقه ولي الامر ">
                        
                      </div>
                      </div>
                   </div>
              <div class="row">
                  <div class="col-3">
                          <input type="radio" name="resident" value="ساكن عادي" checked> ساكن عادي<br>
            
                        </div>
                             <div class="col-3">
                          <input type="radio" name="resident" value="كوارث">
                           كوارث<br>
                  
                        </div>
                        
                          <div class="col-4">
                          <input type="radio" name="resident" value="ذوي احتياجات خاصه"> 
                          ذوي الإحتياجات الخاصة<br>
                     </div>
              </div>
               </div>
                 
                  <div class="card-header">
            <p>خاص بالطلاب قدامى </p>
         </div>
         <div class="card-body text-secondary" >
                    <div class="row">
                      <div class="form-group col-3">
                     <label> تقدير العام الماضى<bdi>:</bdi> </label>
                      </div>
                       <div class="form-group col-3">
                  <select  name="Estimate_last_year" class="form-control" required >
                    <option  value=" disabled"></option>
                    <option value="امتياز"
                    
       @if(old( "Estimate_last_year" ) == "امتياز")
                    {{ "selected" }}
                    @endif
                    >امتياز</option>
                    <option value="جيدجدا"
                    
       @if(old( "Estimate_last_year" ) == "جيدجدا")
                    {{ "selected" }}
                    @endif
                  >جيدجدا</option>
                    <option value="جيد"
                    
       @if(old( "Estimate_last_year" ) == "جيد")
                    {{ "selected" }}
                    @endif
                    
                    >جيد</option>
                  </select>
                  </div>
                  </div>
                  <div class="row">
                      <div class="col-3">
                         <label> نسبة  التقدير<bdi>:</bdi> </label>
                      </div>
                      <div class="col-3">
                     <input type="text" value="{{ old('Estimate_percentage')}}"name="Estimate_percentage" class="form-control" required >
                      </div>
                      
                      </div>
                  </div>
           
                  <div class="card-header">
            <p>خاص بالطلاب المستجدين </p>
         </div>
         <div class="card-body text-secondary" >
                   <div class="row">
                      <div class="form-group col-3">
                         <label>شعبه الثانويه الازهريه<bdi>:</bdi> </label>
                      </div>
                       <div class="form-group col-3">
                              <select class="test" name="Alazhar_secondaryschool"required>
                            <option  value="disabled" ></option>
                            <option value="ادبي"
                                            
       @if(old( "test" ) == "ادبي")
                    {{ "selected" }}
                    @endif>ادبي</option>
                            <option value="علمي"
                                            
       @if(old( "test" ) == "علمي")
                    {{ "selected" }}
                    @endif>علمي</option>
                            
                          </select>
                  </div>
                  </div>
                  <div class="row">
                      <div class="form-group col-3">
                         <label> مجموع الثانويه الازهريه<bdi>:</bdi> </label>
                      </div>
                      <div class="form-group col-3">
                     <input type="text" value="{{ old('Total_secondary_Azhar')}}" name="Total_secondary_Azhar" class="form-control"required  >
                      </div>
                      
                      
                       
                  </div>
                  </div>
         
             </div>
           <!-- end card one -->
             <!-- start card two -->
           <div class="card-header">
                    <p>الجزء الخاص بالضامن</p>
                 </div>
                 <div class="card-body text-secondary" >
                  
                       <div class="container">
                            <div class="row">
                                  <div class="form-group col-3">
                                <label > اسم الضامن <bdi>:</bdi> </label></div>
                                  <div class="form-group col-3">
                                    <input type="text"  value="{{ old('guarantor_name')}}"name="guarantor_name" class="form-control"  placeholder="الإسم رباعي باللغة العربية" required>
                                 </div>
                            </div>
                          
                         <div class="row">
                              <div class="form-group col-3">
                                 <label> رقم البطاقه<bdi>:</bdi> </label>
                               </div>
                               <div class="form-group col-3">
                                 <input type="text" value="{{ old('guarantor_ssn')}}"name="guarantor_ssn"class="form-control"required>
                               </div>
                         </div>
                 
                  
                            <div class="row">
                              <div class="form-group col-3">
                                 <label> رقم الموبيل <bdi>:</bdi> </label>
                              </div>
                               <div class="form-group col-3">
                                 <input type="text" value="{{ old('guarantor_mobile')}}"name="guarantor_mobil" class="form-control" required >
                                 </div>
                            </div>
                            
                            <div class="row">
                                 <div class="form-group col-3">
                                     <label> الوظيفه<bdi>:</bdi> </label>
                                 </div>
                                 <div class="form-group col-3">
                                    <input type="text" value="{{ old('guarantor_job')}}"name="guarantor_job" class="form-control"required>
                                 </div>
                            </div>
                   <div class="row">
                      <div class="col-6">

                        <div class="form-group">
                        <label for="post image">ارفق صوره بطاقه الضامن الشخصيه:</label>
                      <input type="file" class="form-group" name="guarantor_image" placeholder="add a new image" required>
                        
                      </div></div>
               
            
            </div>
         
         </div>
       
           <!-- end card two -->
           <!-- start card three -->
    <div class="card-header">
            <p>الجزء الخاص بالحاله الإجتماعيه</p>
             </div>
         <div class="card-body text-secondary" >
    
                 <div class="container">
                     
                    <div class="row">
                          <div class="form-group col-3">
                        <label > اسم ولي الأمر <bdi>:</bdi> </label>
                          </div>
                          <div class="form-group col-3">
                        <input type="text" value="{{ old('name_of_father')}}" name="name_of_father"class="form-control"  placeholder="الإسم رباعي باللغة العربية"required>
                  </div>
                    </div>
                  
                 <div class="row">
                      <div class="form-group col-3">
                  <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text"value="{{ old('ssn_of_father')}}" name="ssn_of_father" class="form-control"  required>
              </div>
                 </div>
                 
                  
                   <div class="row">
                     <div class="form-group col-3">
                  <label> الوظيفه <bdi>:</bdi> </label>
                     </div>
                      <div class="form-group col-3">
                  <input type="text" value="{{ old('job_of_father')}}"name="job_of_father" class="form-control" required >
                        </div>
                   </div>
                   
                   <div class="row">
                      <div class="form-group col-3">
                  <label> الدخل<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text"value="{{ old('salary')}}" name="salary"class="form-control"required >
                   </div>
                   </div>
                   
                    <div class="row">
                      <div class="form-group col-3">
                  <label>عدد أفراد الأسره<bdi>:</bdi> </label>
                      </div>
                    <div class="form-group col-3">
                  <input type="text" value="{{ old('familymember_number')}}"name="familymember_number" class="form-control"required>
                   </div>
                  
                       
                    </div>
                 </div>
            
            </div>
                   <!-- end card three -->
                    <!-- start card four -->
             <div class="card-header">
            <p> الإقامه السابقه للطلاب القدامي</p>
         </div>
         <div class="card-body text-secondary" >
    
                 <div class="container">
                     
                    <div class="row">
                          <div class="form-group col-3">
                        <label > اسم المبنى <bdi>:</bdi> </label></div>
                          <div class="form-group col-3">
                        <input type="text"  value="{{ old('bulding_name')}}" name="bulding_name"class="form-control"  placeholder="الإسم رباعي باللغة العربية"required>
                  </div> </div>
                  
                 <div class="row">
                      <div class="form-group col-3">
                  <label>رقم الغرفه<bdi>:</bdi> </label></div>
                <div class="form-group col-3">
                  <input type="text" value="{{ old('room_id')}}" name="room_id"class="form-control" required>
              </div>
                 </div>
                 
                  <div class="row">
                       <div class="form-group col-12">
                        <input type="text" name="message" placeholder="مخالفات قانونيه"class="form-control"required >
                      </div>
                   </div>
                  <div class="form-group col-12">
                        <input type="radio" name="endorsement" value="ekrar"required > أقر بأن البيانات(محل الإقامه-التقدير-الفرقه/الكليه)صحيحه طبقا للأوراق الرسميه على أن أقدم هذه الأوراق اذا ثبت أى خطأ في البيانات يتم تحويلي للشئون القانونيه وفصلي
                                          نهائيا من المدينه <br>
                  </div>
                     
                     <button type="submit" class="btn btn-primary mb-2"> <span class="mdi mdi-login-variant"> تسجيل طلب الإلتحاق </span></button>
                
                 </div>
                 </form>
                 </div>
           <!-- end card four -->
           
               
         </div>
         
                   <div class="card1  mb-3">
                        
                            
                           <p>ملاحظات هامه</p>
                                 
                            <ul>
                                <li>
                                    مع ملاحظه ان الطلاب المستجدين هم طلاب الفرق الاولي او الاعداديه ،  الطلاب القدامي هم طلاب ما بعد الفرق الاولي
                                </li>
                                <li>
                                   التقدم للمدينه الجامعيه من خلال استماره التقديم الالكترونى مجانى بالكامل 
                                </li>
                                <li>
                                   يجب الاحتفاظ بكلمة المرور لأهميتها فى تعديل بياناتك كما سيتم استخدمها لاحقا عند اقامتك بالمدينه 
                                </li>
                                <li>
                                    ذوى الإحتياجات الخاصه لايدخل ف التنسيق
                                </li>
                                <li>
                                   التأكد من البيانات جيدا قبل ارسالها 
                                </li>
                                
                            </ul>
                        
                        
                    </div>
        </div>
@endsection