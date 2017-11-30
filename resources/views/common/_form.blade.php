<form class="form-horizontal" method="post" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>

        <div class="col-sm-5">
            <input type="text" class="form-control" name="Student[name]" value="{{old('Student')['name']?old('Student')['name']:isset($student)?$student->name:''}}" id="name" placeholder="请输入学生姓名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.name')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>

        <div class="col-sm-5">
            <input type="text" class="form-control" value="{{old('Student')['age']?old('Student')['age']:isset($student)?$student->age:''}}" name="Student[age]" id="age" placeholder="请输入学生年龄">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.age')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>

        <div class="col-sm-5">
            <label class="radio-inline">
                <input type="radio"  value="未知" name="Student[sex]" {{ isset($student) && $student->sex=='未知'?'checked':'' }}> 未知
            </label>
            <label class="radio-inline">
                <input type="radio" name="Student[sex]" value="男" {{ isset($student) && $student->sex=='男'?'checked':'' }}> 男
            </label>
            <label class="radio-inline">
                <input type="radio" name="Student[sex]" value="女" {{ isset($student) && $student->sex=='女'?'checked':'' }}> 女
            </label>
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.sex')}}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>