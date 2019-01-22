

@foreach ($customer as $customerlist)

<p>{{ $customerlist->customer_id }}</p>
<p>{{ $customerlist->name }}</p>
<p>{{ $customerlist->address }}</p>
<br />
<a href=" 
/Customer/{{ $customerlist->customer_id }}"> show </a>
<br/>

<form action="/Customer/{{ $customerlist->customer_id }}" method="post">
{{csrf_field()}}
{{method_field('DELETE')}}<button>Hapus</button>
<br/>
</form>

@endforeach

<a href="{{ url('Customer/create') }}"> kembali </a>