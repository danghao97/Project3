<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAMERA</title>
        <style media="screen">
            body {
                max-width: 1000px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <h2 align=center>Danh sách tài khoản</h2>
        <table>
            <tr>
                <td>
                    <!-- Danh sach tai khoan -->
                    <table width="600px" border="1" style="border-collapse: collapse;">
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
                </td>
                <td>
                    <!-- Them tai khoan -->
                    <table style="margin: auto;">
                        <tr>
                            <td colspan="2">Thêm tài khoản mới</td>
                        </tr>
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
                </td>
            </tr>
        </table>
    </body>
</html>
