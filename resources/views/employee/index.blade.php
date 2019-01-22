@foreach ($employee as $employeelist)

<p>{{ $employeelist->employee_id }}</p>
<p>{{ $employeelist->employee_name }}</p>
<p>{{ $employeelist->employee_address }}</p>
<p>{{ $employeelist->employee_phone_number }}</p>
<br />
<a href=" 
/Employee/{{ $employeelist->employee_id }}"> show </a>
<br/>

<form action="/Employee/{{ $employeelist->employee_id }}" method="post">
{{csrf_field()}}
{{method_field('DELETE')}}<button>Hapus</button>
<br/>
</form>

@endforeach

<a href="{{ url('Employee/create') }}"> kembali </a>