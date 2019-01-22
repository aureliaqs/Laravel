<br />

@foreach ($customer as $customerlist)
<br />
<p>{{ $customerlist->customer_id }}</p>
<p>{{ $customerlist->name }}</p>
<p>{{ $customerlist->address }}</p>
<br />
<a href=" 
/Customer/{{ $customerlist->customer_id }}"> show </a>
<br/>
<a href=" 
/Customer/{{ $customerlist->customer_id }}/edit"> edit </a>
<br/>

@endforeach

<a href="{{ url('Customer/') }}"> kembali </a>