<!-- 成功提示框 -->
@if(\Illuminate\Support\Facades\Session::has('succ'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>成功!</strong> {{\Illuminate\Support\Facades\Session::get('succ')}}
</div>
@endif
<!-- 失败提示框 -->
@if(\Illuminate\Support\Facades\Session::has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>失败!</strong> {{\Illuminate\Support\Facades\Session::get('error')}}
</div>
    @endif
