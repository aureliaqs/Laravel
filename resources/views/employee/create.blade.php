ini create dari view
<form method="POST" 
action="{{ route('Employee.store')}}">
{{ csrf_field() }}
<input type="text" name="txt_id"/><br />
<br /><input type="text" name="txt_name" /><br />
<br /><input type="text" name="txt_address"/><br />
<br /><input type="text" name="txt_phone_number"/><br />
<br /> <input type="submit" name="sbm_save" id="sbm_save" value="save"/>

</form>