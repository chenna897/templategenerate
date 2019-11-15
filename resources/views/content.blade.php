<!DOCTYPE html>
<html>
<head>
<title>Templategenerate</title>
<style>
    li{
    list-style-type: none;
    }
</style>
</head>
<body>
<br>&emsp;@if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                  <li style="color:green;">&emsp;&emsp;&emsp;&emsp;{{ Session::get('success') }}</li>
            </ul>
        </div>
    @endif

    <form action = "{{ route('contenttemplate') }}" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<br><table align="left">
<tr>
<td>Name :</td>
<td><input type='text' name='name' /></td>
<tr>
<td>Content</td>
<td><textarea rows="15" cols="35"  name='content'>
</textarea>
</td>
</tr>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Add student"/>
</td>
</tr>
</table>
</form>
</body>
</html>