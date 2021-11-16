<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\city;


class usersController extends Controller
{
	public function getList()
	{
		$user=User::all();
		return view("admin.users.list",["user"=>$user]);
	}
	public function getAdd()
	{
		return view("admin.users.add");
	}
	public function postAdd(Request $r)
	{
		$user=new User();
		$user->id=rand(9999999,999999999);
		$user->name=$r->name;
		$user->email=$r->email;
		$user->password=bcrypt($r->pass);
		$user->quyen=$r->quyen;
		$u=$r->check;
		if($r->changeOption)
		{

			$user->phone_number=$r->phone_number;
			$user->address=$r->address;
			$user->note=$r->note;
			$user->gender=$r->gender;
		}
		$user->save();
		return redirect("users/add")->with("thongbao","Thêm thành công");

	}

	public function getEdit($id)
	{
		$user=user::find($id);
		return view("admin.users.edit",["user"=>$user]);
	}
	public function postEdit(Request $r,$id)
	{
		$user=User::find($id);
		$user->quyen=$r->quyen;
		$user->name=$r->name;

		if($r->changePass)
		{

			$user->password=bcrypt($r->pass);
		}
		if($r->changeOption)
		{

			$user->phone_number=$r->phone_number;
			$user->address=$r->address;
			$user->note=$r->note;
			$user->gender=$r->gender;
		}
		$user->save();
		return redirect("users/edit/".$id)->with("thongbao","Sửa thành công");
	}
	public function getDelete($id)
	{
		$user=user::find($id);
		$user->delete();
		return redirect("users/list")->with("thongbao","Xóa thành công");
	}

}

