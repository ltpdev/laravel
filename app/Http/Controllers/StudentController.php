<?php
namespace App\Http\Controllers;
use App\Member;
use App\Student;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class StudentController extends Controller{
    public function index(){
        $students=Student::paginate(5);
        return view('student.index',['students'=>$students]);
    }
    //增加页面
    public function create(Request $request){

        if ($request->isMethod('post')){
            //控制器验证
            /*$this->validate($request,['Student.name'=>'required|min:2|max:20',
                'Student.age'=>'required|integer',
                'Student.sex'=>'required',
            ],['required'=>':attribute 为必填项',
                'min'=>':attribute 不符合长度',
                'integer'=>':attribute 为整数'
            ],[
                'Student.name'=>'姓名',
                'Student.age'=>'年龄',
                'Student.sex'=>'性别',
            ]);*/
            //Validator类验证
            $validator=\Validator::make($request->input(),['Student.name'=>'required|min:2|max:20',
                'Student.age'=>'required|integer',
                'Student.sex'=>'required',
            ],['required'=>':attribute 为必填项',
                'min'=>':attribute 不符合长度',
                'integer'=>':attribute 为整数'
            ],[
                'Student.name'=>'姓名',
                'Student.age'=>'年龄',
                'Student.sex'=>'性别',
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }



            $data=$request->input('Student');
            if (Student::create($data)){
                return redirect('student/index')->with('succ','插入成功');
            }else{
                return redirect()->back();
            }
        }
        return view('student.create');
    }
    //保存提交的数据
    public function save(Request $request){
        $data=$request->input('Student');
        var_dump($data);
        $student=new Student();
        $student->name=$data['name'];
        $student->age=$data['age'];
        $student->sex=$data['sex'];
        if ($student->save()){
            return redirect('student/index');
        }else{
            return redirect()->back();
        }
    }
    public function update(Request $request,$id){
        $student=Student::find($id);
        if ($request->isMethod('post')){
            $this->validate($request,['Student.name'=>'required|min:2|max:20',
                'Student.age'=>'required|integer',
                'Student.sex'=>'required',
            ],['required'=>':attribute 为必填项',
                'min'=>':attribute 不符合长度',
                'integer'=>':attribute 为整数'
            ],[
                'Student.name'=>'姓名',
                'Student.age'=>'年龄',
                'Student.sex'=>'性别',
            ]);
            $data=$request->input('Student');
            $student->name=$data['name'];
            $student->age=$data['age'];
            $student->sex=$data['sex'];
            if ($student->save()){
                return redirect('student/index')->with('succ','修改成功'.$id);;
            }else{
                return redirect()->back();
            }
        }
        return view('student.update',['student'=>$student]);
    }

        public function detail($id){
            $student=Student::find($id);
            return view('student.detail',['student'=>$student]);
        }
    public function delete($id){
        $student=Student::find($id);
        if ($student->delete()){
            return redirect('student/index')->with('succ','删除成功'.$id);
        }else{
            return redirect('student/index')->with('succ','删除失败'.$id);
        }

    }

}