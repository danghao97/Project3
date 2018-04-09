@extends('layouts.master')
@section('title')
    Quan ly tai khoan
@endsection
@section('navitem')qltk @endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Danh sách tài khoản</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>User name</th>
                                <th>User type</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="id" value="1">
                                    1
                                </td>
                                <td>admin</td>
                                <td>QLHT</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="id" value="1">
                                    2
                                </td>
                                <td>root</td>
                                <td>QLHT</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="id" value="1">
                                    3
                                </td>
                                <td>gsv1</td>
                                <td>LĐ</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="id" value="1">
                                    4
                                </td>
                                <td>user1</td>
                                <td>VHHT</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="id" value="1">
                                    5
                                </td>
                                <td>qtv</td>
                                <td>LĐ</td>
                            </tr>
                            <tr>
                                <td colspan="3" align=center>
                                    <input type="submit" name="" value="Sửa">
                                    <input type="submit" name="" value="Xóa">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h3 class="panel-title">Thêm tài khoản mới</h3>
                  </div>
                  <div class="panel-body">
                      <table class="table">
                          <tr>
                              <td>
                                  User type:
                              </td>
                              <td>
                                  <select name="type">
                                      <option>QLHT</option>
                                      <option>LĐ</option>
                                      <option>VHHT</option>
                                  </select>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  User name:
                              </td>
                              <td>
                                  <input type="text">
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Password:
                              </td>
                              <td>
                                  <input type="text">
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  Confirm:
                              </td>
                              <td>
                                  <input type="text">
                              </td>
                          </tr>
                          <tr>
                              <td colspan="2" align=center>
                                  <button type="button">OK</button>
                                  <button type="button">Reset</button>
                              </td>
                          </tr>
                      </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
