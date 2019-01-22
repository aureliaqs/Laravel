<br />

@foreach ($employee as $employeelist)
<br />
<p>{{ $employeelist->employeee_id }}</p>
<p>{{ $employeelist->employee_name }}</p>
<p>{{ $employeelist->employee_address }}</p>
<p>{{ $employeelist->employee_phone_number }}</p>
<br />
<a href=" 
/Employee/{{ $employeelist->employee_id }}"> show </a>
<br/>
<a href=" 
/Employee/{{ $employeelist->employee_id }}/edit"> edit </a>
<br/>

@endforeach

<a href="{{ url('Employee/') }}"> kembali </a>