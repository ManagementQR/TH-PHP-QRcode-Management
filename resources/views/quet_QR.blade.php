@extends('admin_layout')
@section('admin_content')

<script src="{{asset('public/frontend/js/html5-qrcode.min.js')}}"></script>
<style>
  .result{
    background-color: green;
    color:#fff;
    padding:20px;
  }
  .row{
    display:flex;
  }
</style>


<div class="row">
  <div class="col">
    <div style="width:500px;" id="reader"></div>
  </div>
  
    <div class="col" style="padding:30px;">
        <h4>SCAN RESULT</h4>
        <div id="result">Result Here</div>
    </div>
  
</div>


<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    //document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
    document.getElementById('result').innerHTML = '<form action="'+qrCodeMessage+'" method="GET">'+
                                                        '<input type="submit" value="Xác nhận"/>'+
                                                    '</form>';
}

function onScanError(errorMessage) {
  //handle scan error
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);

</script>

@endsection