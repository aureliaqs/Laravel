apakah bisa?

@foreach ($supplier as $supplierlist)

<p>{{ $supplierlist->supplier_id }}</p>
<p>{{ $supplierlist->supplier_name }}</p>
<p>{{ $supplierlist->supplier_address }}</p>
<br />
@endforeach
<a href="{{ url('Supplier/create') }}"> klik </a>