<!DOCTYPE html>
<html>
<head>
	<x-slot name="header">
	<title>Bộ sưu tập sách</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Sweet Alert -->
	
	
</head>
<body>
	
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Bộ sưu tập sách</h2>
				@if(session('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('success') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				@if(session('edit'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('edit') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				@if(session('delete'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('delete') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				<a href="{{url('/logout')}}">Trở về trang đăng nhập</a>
			
			<div class="panel-body">				
				<button class="btn btn-success" onclick="window.open('{{ route('view_add') }}', '_self')" style="margin-top:10px">Thêm sách mới</button>
				<form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}" style="margin-left:750px" type="get">
					<input class="form-controll mr-sm-2" type="search" name="query" placeholder="Tìm kiếm..." aria-label="Search">
					<button class="btn btn-info my-2 my-sm-0" type="submit">Tìm kiếm</button>
				</form>
				<table class="table table-bordered" style="margin-top:10px">
					<thead>
						<tr>
							<th>Id</th>
							<th>Tên sách</th>
							<th>Tác giả</th>
							<th>Nhà xuất bản</th>
							<th>Năm xuất bản</th>
							<th>Số trang</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					@foreach($bookList as $book)
						<tr>
							<td>{{ $book->id }}</td>
							<td>{{ $book->tensach }}</td>
							<td>{{ $book->tacgia }}</td>
							<td>{{ $book->nhaxb }}</td>
							<td>{{ $book->namxb }}</td>
							<td>{{ $book->sotrang }}</td>
							<td><a href="{{url('/view_edit/'.$book->id)}}" class="btn btn-warning">Chỉnh sửa</a></td>
							<td><a href="{{url('/delete/'.$book->id)}}" class="btn btn-danger" >Xoá</a></td>			
						</tr>
					@endforeach
					</tbody>
				</table>
				<hr>
				{{$bookList->links()}}
			</div>
		</div>
	</div>
</body>
</html>




