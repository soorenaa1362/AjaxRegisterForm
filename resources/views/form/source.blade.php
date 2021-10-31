<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="registration-form">
        <form action="{{ route('patients.store') }}" method="post">
            @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control item" name="fname" 
                    value="{{ old('fname') }}" placeholder="FName">
                @error('fname')
                    <div class="input-error-validation">
                        <strong style="color:red;">{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="lname" 
                    value="{{ old('lname') }}" placeholder="LName">
                @error('lname')
                    <div class="input-error-validation">
                        <strong style="color:red;">{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="nationalcode" 
                    value="{{ old('nationalcode') }}" placeholder="Nationalcode">
                @error('nationalcode')
                    <div class="input-error-validation">
                        <strong style="color:red;">{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="col-sm-3 col-form-label">Sex</label>
                <div class="col-sm-4">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" 
                            name="sex" id="membershipRadios1" value="0" checked="">
                        Male
                        <i class="input-helper"></i></label>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" 
                            name="sex" id="membershipRadios2" value="1">
                        Female
                        <i class="input-helper"></i></label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="age" 
                    value="{{ old('age') }}" placeholder="Age">
                @error('age')
                    <div class="input-error-validation">
                        <strong style="color:red;">{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="col-sm-3 col-form-label">Married</label>
                <div class="col-sm-4">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" 
                            name="married" id="membershipRadios1" value="0" checked="">
                        No
                        <i class="input-helper"></i></label>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" 
                            name="married" id="membershipRadios2" value="1">
                        Yes
                        <i class="input-helper"></i></label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="mobile" 
                    value="{{ old('mobile') }}" placeholder="Mobile">
                @error('mobile')
                    <div class="input-error-validation">
                        <strong style="color:red;">{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name="users_id" 
                    value="{{ old('users_id') }}" placeholder="Users_id">
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
                <input type="submit" class="btn btn-info btn-block bordered p-2" value="Register">
            </div>
            <!-- <div class="form-group">
                <button type="button" class="btn btn-block create-account">Create Account</button>
            </div> -->

        </form>
        <!-- <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div> -->
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Modal -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <!-- Form -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <h2>Modal Example</h2>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Get Started</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        
                        <div class="registration-form">
                            <form action="{{ route('patients.store') }}" method="post">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="text" class="form-control item" name="fname" 
                                        value="{{ old('fname') }}" placeholder="FName">
                                    @error('fname')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="lname" 
                                        value="{{ old('lname') }}" placeholder="LName">
                                    @error('lname')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="nationalcode" 
                                        value="{{ old('nationalcode') }}" placeholder="Nationalcode">
                                    @error('nationalcode')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Sex</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="sex" id="membershipRadios1" value="0" checked="">
                                            Male
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="sex" id="membershipRadios2" value="1">
                                            Female
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="age" 
                                        value="{{ old('age') }}" placeholder="Age">
                                    @error('age')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Married</label>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="married" id="membershipRadios1" value="0" checked="">
                                            No
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" 
                                                name="married" id="membershipRadios2" value="1">
                                            Yes
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="mobile" 
                                        value="{{ old('mobile') }}" placeholder="Mobile">
                                    @error('mobile')
                                        <div class="input-error-validation">
                                            <strong style="color:red;">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control item" name="users_id" 
                                        value="{{ old('users_id') }}" placeholder="Users_id">
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
                                    <input type="submit" class="btn btn-info btn-block bordered p-2" value="Register">
                                </div>
                                <!-- <div class="form-group">
                                    <button type="button" class="btn btn-block create-account">Create Account</button>
                                </div> -->

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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>










<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Modal</title>
</head>
<body>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        ('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script> 
</body>
</html> -->
