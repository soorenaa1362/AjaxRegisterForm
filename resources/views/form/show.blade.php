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
    <body style="background: #fff;">
        <br>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">نام</th>
                        <th scope="col" class="text-center">نام خانوادگی</th>
                        <th scope="col" class="text-center">کد ملی</th>
                        <th scope="col" class="text-center">جنسیت</th>
                        <th scope="col" class="text-center">سن</th>
                        <th scope="col" class="text-center">تاهل</th>
                        <th scope="col" class="text-center">موبایل</th>
                        <th scope="col" class="text-center">شناسه</th>
                        <th scope="col" class="text-center">شخص</th>
                        <th scope="col" class="text-center">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">{{ $patient->fname }}</td>                        
                        <td class="text-center">{{ $patient->lname }}</td>                        
                        <td class="text-center">{{ $patient->nationalcode }}</td>                        
                        <td class="text-center">{{ $patient->sex }}</td>                        
                        <td class="text-center">{{ $patient->age }}</td>                        
                        <td class="text-center">{{ $patient->married }}</td>                        
                        <td class="text-center">{{ $patient->mobile }}</td>                        
                        <td class="text-center">{{ $patient->users_id }}</td>                        
                        <td class="text-center">{{ $patient->mainid }}</td>
                        <td>
                            <button class="btn btn-success">ویرایش</button>
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>        


        <script type="text/javascript">
                
        </script>

    </body>
</html>




