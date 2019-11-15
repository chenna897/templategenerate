<!DOCTYPE html>
<html>
<head>
<title>Templategenerate</title>
</head>
<body>
        @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li style="color:green;">&emsp;&emsp;&emsp;&emsp;{{ Session::get('success') }}</li>
            </ul>
        </div>
    @endif

    <form action = "{{ route('createtemplate') }}" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<br><br><br><table align="center">
<tr>
<td>Name of the project :</td>
<td><input type='text' name='project_name' /></td>
<tr>
<td>Starting date of the project :</td>
<td><input type="text" name='starting_date'/></td>
</tr>
<tr>
<td>Current Link :</td>
<td><input type="text" name='current_link'/></td>
</tr>
<tr>
<td>Production (client) URL server :</td>
<td><input type="text" name='production_urlserver'/></td>
</tr>
<tr>
<td>Test server URL :</td>
<td><input type="text" name='test_serverurl'/></td>
</tr>
<tr>
<td>Database technology :</td>
<td><input type="text" name='database_technology'/></td>
</tr>
<tr>
<td>Front/Back technology :</td>
<td><input type="text" name='font_technology'/></td>
</tr>
<tr>
<td>Number of deliveries :</td>
<td><input type="text" name='number_deliveries'/></td>
</tr>
<tr>
<td>Number of days :</td>
<td><input type="text" name='number_ofdays'/></td>
</tr>
<tr>
<td>First name of the developer :</td>
<td><input type="text" name='name_developer'/></td>
</tr>
<tr>
<td>Date of this report :</td>
<td><input type="text" name='date_report'/></td>
</tr>
<td>Hour (IST) of this report :</td>
<td><input type="text" name='Hour(IST)_report'/></td>
</tr>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Submit"/>
</td>
</tr>
</table>
</form>
</body>
</html>