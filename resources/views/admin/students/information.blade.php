@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Student Details</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="/admin/students">Students</a></li>
                  <li class="breadcrumb-item active">Student Details</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="content details-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                <h3 class="card-title">البيانات الشخصية</h3>
                            </div>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> الجنسيه <bdi>:</bdi> </label>
                                                {{ $student->gender }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> نوع الطالب<bdi>:</bdi> </label>
                                                {{ $student->student_type }}
                                            </li>
                                          </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> اسم الطالب <bdi>:</bdi> </label>
                                                {{ $student->name }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> الرقم القومي للطالب <bdi>:</bdi> </label>
                                                {{ $student->student_ssn}}
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> كود الطالب <bdi>:</bdi> </label>
                                                {{ $student->code }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> تاريخ الميلاد<bdi>:</bdi> </label>
                                                {{ $student->birthday }}
                                            </li>
                                          </ul>
                                          </div>
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> محل الاقامه<bdi>:</bdi> </label>
                                                {{ $student->residence }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> العنوان بالتفصيل <bdi>:</bdi> </label>
                                                {{ $student->address }}
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> البريد الالكتروني<bdi>:</bdi> </label>
                                                {{ $student-> email}}
                                            </li>
                                            <li class="list-group-item">
                                                <label> رقم الموبيل <bdi>:</bdi> </label>
                                                {{ $student->mobile}}
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> السنه الدراسيه<bdi>:</bdi> </label>
                                                {{ $student->study_year }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> الكليه <bdi>:</bdi> </label>
                                                {{ $student->collegue }}
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> الفرقه<bdi>:</bdi> </label>
                                                {{ $student->grade }}
                                            </li>
                                            <li class="list-group-item">
                                                <label> الكليه <bdi>:</bdi> </label>
                                                {{ $student->collegue }}
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> صوره الطالب الشخصيه<bdi>:</bdi> </label>
                                                 <img src="{{asset('storage/'.$student-> student_image)}}">
                                            </li>
                                            <li class="list-group-item">
                                                <label> صوره بطاقه الطالب <bdi>:</bdi> </label>
                                                <img src="{{asset('storage/'.$student-> ssn_image)}}">
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> كلمه المرور<bdi>:</bdi> </label>
                                                {{ $student->password}}
                                            </li>
                                            <li class="list-group-item">
                                                <label> تاكيد كلمه المرور <bdi>:</bdi> </label>
                                                {{ $student->password_sure }}
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label> اسم ولي الامر<bdi>:</bdi> </label>
                                                {{ $student->father_name}}
                                            </li>
                                            <li class="list-group-item">
                                                <label> صله ولي الامر <bdi>:</bdi> </label>
                                                {{ $student->parent_link }}
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label>الرقم القومي لولي الامر<bdi>:</bdi> </label>
                                                {{ $student->father_ssn}}
                                            </li>
                                            <li class="list-group-item">
                                                <label> وظيفه ولي الامر <bdi>:</bdi> </label>
                                                {{ $student->father_job }}
                                               
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label>رقم الموبيل<bdi>:</bdi> </label>
                                                {{ $student->phone}}
                                            </li>
                                            <li class="list-group-item">
                                                <label> صوره بطاقه ولي الامر <bdi>:</bdi> </label>
                                                <img src="{{asset('storage/'.$student-> father_image)}}">

                                                
                                               
                                            </li>
                                          </ul>
                                          </div>
                                          
                                    <div class="col-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <label>حاله الطالب<bdi>:</bdi> </label>
                                                {{ $student->resident }}
                                            </li>
                                            </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">بيانات الطلاب القدامى</h3>
                            </div>
                            <div class="card-text">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label> تقدير العام الماضي <bdi>:</bdi> </label>
                                        {{ $student->Estimate_last_year }}
                                    </li>
                                    <li class="list-group-item">
                                        <label> نسبه التقدير<bdi>:</bdi> </label>
                                        {{ $student->Estimate_percentage }}
                                    </li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                
                    <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">بيانات الطلاب المستجدين</h3>
                            </div>
                            <div class="card-text">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label> شعبه الثانويه الازهريه <bdi>:</bdi> </label>
                                        {{ $student->Alazhar_secondaryschool}}
                                    </li>
                                    <li class="list-group-item">
                                        <label> مجموع الثانويه الازهريه<bdi>:</bdi> </label>
                                        {{ $student->Total_secondary_Azhar }}
                                    </li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                     <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الضامن</h3>
                            </div>
                            <div class="card-text">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label> اسم الضامن <bdi>:</bdi> </label>
                                        {{ $student->guarantor_name}}
                                    </li>
                                    <li class="list-group-item">
                                        <label> رقم القومي للضامن<bdi>:</bdi> </label>
                                        {{ $student->guarantor_ssn }}
                                    </li>
                                  </ul>
                            </div>
                            <div class="card-text">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label>  رقم الموبيل<bdi>:</bdi> </label>
                                        {{ $student->guarantor_mobil}}
                                    </li>
                                    <li class="list-group-item">
                                        <label> الوظيفه<bdi>:</bdi> </label>
                                        {{ $student->guarantor_job }}
                                    </li>
                                
                                    <li class="list-group-item">
                                        <label> صوره البطاقه<bdi>:</bdi> </label>
                                        <img src="{{asset('storage/'.$student-> guarantor_image)}}">
                                    </li>
                                  </ul>
                                
                            </div>
                          </div>
                        </div>
                    </div>
              
                
                    <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الحالة الاجتماعية</h3>
                                    </div>
                            <div class="card-text">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label> الدخل <bdi>:</bdi> </label>
                                        {{ $student->salary}}
                                    </li>
                                    <li class="list-group-item">
                                        <label> عدد افراد الاسره<bdi>:</bdi> </label>
                                        {{ $student-> familymember_number}}
                                    </li>
                                  </ul>
                          
                            </div>
                          </div>
                        </div>
                    </div>
                    
                     <div class="col-6">
                        <div class="card my-card">
                          <div class="card-body">
                             <div class="card-header bg-dark">
                                    <h3 class="card-title">الإقامة السابقة للطالب</h3>
                            </div>
                            
                            <div class="card-text">
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label> اسم المبني <bdi>:</bdi> </label>
                                        {{ $student->bulding_name}}
                                    </li>
                                    <li class="list-group-item">
                                        <label> رقم الغرفه<bdi>:</bdi> </label>
                                        {{ $student->room_id }}
                                    </li>
                                  </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

    

    </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
