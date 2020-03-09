@extends('layout/layout')

@section('title', 'VeiwAll')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<style>
    .box{
        padding-top: 3%;
    }
    body{
        background:#eee;
        font-size:12px;
        font-family: 'Poppins', Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>
<?php 
function dateTime($date)
{
    if ($date != '')
    {
        $date = date('h:i:s', strtotime($date));
    }
    return $date;
}
?>
{{-- {{ dd($data)}} --}}
<div class="container box">
        <div class="card">
                <div class="card-body">
                    <h2>View List</h2>
                    <hr>
                  {{-- This is some text within a card body. --}}
                  <div class="table-responsive">
                      <table id="table" class="table">
                          <thead>
                              <tr>
                                  <th width="250px">Name</th>
                                  <th>Company</th>
                                  <th>Email</th>
                                  <th width="10px">Job</th>
                                  <th width="250px">Phone</th>
                                  <th>Status</th>
                                  <th>Time</th>
                                  <th>Link</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($data as $item)
                              <tr>
                                  <td nowarp>{{ $item->Regis_Title.' '.$item->Regis_FName .' '. $item->Regis_LName }}</td>
                                  <td>{{$item->Regis_Company}}</td>
                                  <td>{{$item->Regis_Email}}</td>
                                  <td width="10px">{{$item->Regis_Job}}</td>
                                  <td>{{$item->Regis_Phone}}</td>
                                  <td class="text-center">
                                      @if ($item->Regis_Status == 0)
                                          Waiting
                                      @else
                                          Joined
                                      @endif
                                  </td>
                                  <td>{{ dateTime($item->Regis_Attend) }}</td>
                                  <td><a href="{{ $item->Regis_Qrcode}}">Link</a></td>
                  
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
                </div>
              </div>

</div>

<script>
$(document).ready( function () {
    $('#table').DataTable();
} );

// function ch
</script>

@endsection
