<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Modal -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <!-- Form -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <h2>Modal Example</h2>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">شروع کنید</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        
                        <div class="registration-form">
                            <form>
                            <!-- <form action="{{ route('patients.store') }}" method="post" id="form-id"> -->
                                @csrf
                                
                                <div class="form-group">
                                    <input type="text" class="form-control item" name="fname" 
                                        value="{{ old('fname') }}" placeholder="نام">
                                    @error('fname')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="lname" 
                                        value="{{ old('lname') }}" placeholder="نام خانوادگی">
                                    @error('lname')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="nationalcode" 
                                        value="{{ old('nationalcode') }}" placeholder="کد ملی">
                                    @error('nationalcode')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label">جنسیت</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="sex" id="membershipRadios1" value="0" checked="">
                                            مرد
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="sex" id="membershipRadios2" value="1">
                                            زن
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="age" 
                                        value="{{ old('age') }}" placeholder="سن">
                                    @error('age')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label">تاهل</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="married" id="membershipRadios1" value="0" checked="">
                                            خیر
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="married" id="membershipRadios2" value="1">
                                            بله
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="mobile" 
                                        value="{{ old('mobile') }}" placeholder="موبایل">
                                    @error('mobile')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="users_id" 
                                        value="{{ old('users_id') }}" placeholder="شناسه ی کاربری">
                                    @error('users_id')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="MainId">MainId</label>
                                    <select class="form-control" id="mainid" name="mainid">
                                        <option value="1">خودم</option>
                                        <option value="2">مادر</option>
                                        <option value="3">پدر</option>
                                        <option value="4">همسر</option>
                                        <option value="5">خواهر</option>
                                        <option value="6">برادر</option>
                                        <option value="7">فرزند</option>
                                        <option value="8">غیره </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="submit" id="register" class="btn btn-info btn-block bordered p-2" 
                                        value="ثبت نام">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Form -->
        <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> -->
        <!-- <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.js') }}"></script> -->

        


        <script type="text/javascript">
        
            $.ajaxSetup({
                headers: {        
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')        
                }        
            });        
            
            $("#register").click(function(e){             
                e.preventDefault();                
                var fname = $("input[name=fname]").val();
                if(fname.val == null){
                    alert("فیلد نام خالیست.")
                }               
                var lname = $("input[name=lname]").val();  
                var nationalcode = $("input[name=nationalcode]").val();              
                var sex = $("input[name=sex]").val();        
                var age = $("input[name=age]").val();        
                var married = $("input[name=married]").val(); 
                var mobile = $("input[name=mobile]").val();               
                var users_id = $("input[name=users_id]").val();        
                var mainid = $("input[name=mainid]").val();    
        
                var data = {
                        fname:fname, 
                        lname:lname, 
                        nationalcode:nationalcode, 
                        sex:sex, 
                        age:age, 
                        married:married, 
                        mobile:mobile, 
                        users_id:users_id, 
                        mainid:mainid
                    };


                $.ajax({
                    type:'POST',        
                    dataType:'json', 
                    url:"/ajaxRequest",        
                    data:data,        
                    success:function(data){        
                        alert(data.success);
                    }        
                });              
            });
            
        </script>





        <!-- <script>
            $(document).ready(function(){
                $("#form-id").submit(function(){
                    var set={target:'#result',beforeSubmit:before};
                    $("#form-id").ajaxSubmit(set);
                    return false;
                })
            });

            function before(){
                $("#result").html("در حال ارسال اطلاعات");
            }
        </script> -->


        <!-- <script>
            $( function() {
                $( '#form-id' ).on( 'submit', ajaxForm );
            } );
            
            function ajaxForm( evt ) {
                evt.preventDefault();
                
                var $form = $( this );
                var data = $form.serializeObject();
                
                $.post( $form.attr( 'action' ), data, function( response ) {
                    alert( response );
                } );
            }
            
            ( function( $, undefined ){
                '$:nomunge'; // Used by YUI compressor.
                
                $.fn.serializeObject = function(){
                    var obj = {};
                    
                    $.each( this.serializeArray(), function( i, o ){
                    var n = o.name,
                    v = o.value;
                    
                    obj[n] = obj[n] === undefined ? v
                    : $.isArray( obj[ n ] ) ? obj[ n ].concat( v )
                    : [ obj[n], v ];
                });
            
                 return obj;
            };
            
            } )( jQuery );
        </script> -->

    </body>
</html>








