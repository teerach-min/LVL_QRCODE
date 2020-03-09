@extends('layout/layout')

@section('title', 'Success')

@section('content')
{{-- <style>

body {
  background: #1e255a;
}

h1 {

  font-size: 3em;
  text-align: center;
  color: #fff;
  font-weight: 100;
  letter-spacing: 3px;
  padding-top: 40px;
}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
  background: rgba(0, 0, 0, 0.18);
  background-size: cover;
}


input[type="text"], input[type="email"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 100%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  letter-spacing: 1px;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #c7c7c7;
  font-weight: 100;
}

.submit {
  font-size: .9em;
  color: #fff;
  background: #060f82;
  border: black;
  padding: 0.9em;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}

.agileits-top {
    padding: 2.5em;
}

.main-agileinfo {
    margin: 2em auto;
}

.main-agileinfo {
    width: 36%;
}
.title-manage{
    color: #c7c7c7;
    font-weight: 400;
    justify-content: baseline;
    display: flex;
    /* justify-content: space-between;
     */
}
label{
    padding: 25px 30px 0 0;
    margin: 0;
}
.form-group input{
    margin: 5px 5px 0 5px;
}


</style> --}}

<style>
    ::placeholder {
        color: #bdc0c3 !important;
        font-size: 13px;
    }
    .form-group{
        margin-bottom: 2rem;
    }
    .btn-success{
        width: 180px;
        letter-spacing: 4px;
        height: 40px;
    }
    .btn-success:hover{
        width: 180px;
        letter-spacing: 4px;
        height: 40px;
    }
    .card{
        border-radius: 15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .card-body{
        padding: 1.75rem 3rem;
    }
    .form-group{
      margin-bottom: 20px;
    }

</style>

<div class="container pt-5 pb-5">

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10">
          <div class="card">
            <div class="card-body">
                {{-- @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach --}}
                {{-- @if ($errors->any())
                  {{dd($errors->messages()['Regis_Email']['msg'])}}
              @endif --}}
                <h2 class="card-title">Signup</h2>
                <hr>
                <form action="/walkin_register" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Regis_Company">Company Name*</label>
                        <input type="text" name="Regis_Company" class="form-control" id="Regis_Company" value="{{ old('Regis_Company') }}" placeholder="Company’s Name" >
                      <small id="emailHelp" class="form-text text-danger">{{ isset($errors->messages()['Regis_Company']['msg']) ? $errors->messages()['Regis_Company']['msg'] : "" }}</small>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Regis_Title" id="inlineRadio1" value="Mr." checked>
                            <label class="form-check-label" for="inlineRadio1">Mr.</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Regis_Title" id="inlineRadio2" value="Ms.">
                            <label class="form-check-label" for="inlineRadio2">Ms.</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="Regis_FName">First Name*</label>
                        <input type="text" name="Regis_FName" class="form-control" id="Regis_FName" value="{{ old('Regis_FName') }}" placeholder="First Name" >
                        <small id="emailHelp" class="form-text text-danger">{{ isset($errors->messages()['Regis_FName']['msg']) ? $errors->messages()['Regis_FName']['msg'] : "" }}</small>
                    </div>
                    <div class="form-group">
                        <label for="Regis_LName">Last Name*</label>
                        <input type="text" name="Regis_LName" class="form-control" id="Regis_LName" value="{{ old('Regis_LName') }}" placeholder="Last Name" >
                        <small id="emailHelp" class="form-text text-danger">{{ isset($errors->messages()['Regis_LName']['msg']) ? $errors->messages()['Regis_LName']['msg'] : "" }}</small>
                    </div>
                    <div class="form-group">
                        <label for="Regis_Job">Job Title*</label>
                        <input type="text" name="Regis_Job" class="form-control" id="Regis_Job" value="{{ old('Regis_Job') }}" placeholder="Job Title">
                        <small id="emailHelp" class="form-text text-danger">{{ isset($errors->messages()['Regis_Job']['msg']) ? $errors->messages()['Regis_Job']['msg'] : "" }}</small>
                    </div>
                    <div class="form-group">
                        <label for="Regis_Email">Email Address*</label>
                        <input type="text" name="Regis_Email" class="form-control" id="Regis_Email" value="{{ old('Regis_Email') }}" placeholder="Email Address">
                        <small id="emailHelp" class="form-text text-danger">{{ isset($errors->messages()['Regis_Email']['msg']) ? $errors->messages()['Regis_Email']['msg'] : "" }}</small>
                    </div>
                    <div class="form-group">
                        <label for="Regis_Phone">Mobile Phone*</label>
                        <input type="text" name="Regis_Phone" class="form-control" id="Regis_Phone" value="{{ old('Regis_Phone') }}" placeholder="Mobile Phone">
                        <small id="emailHelp" class="form-text text-danger">{{ isset($errors->messages()['Regis_Phone']['msg']) ? $errors->messages()['Regis_Phone']['msg'] : "" }}</small>
                    </div>
                    <button class="btn btn-success" type="submit" name="" value="SIGNUP">SIGNUP</button>

                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input class="text" class="form-control" type="text" name="Regis_Company" placeholder="Company’s Name*" required="">
                    </div> --}}

                </form>
            </div>
          </div>
        </div>
      </div>

</div>

@endsection
