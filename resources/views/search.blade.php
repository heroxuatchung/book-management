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
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sách của tác giả {{ request()->input('query') }}</h2>
				<a href="{{url('/index')}}">Trở về</a>
			<div class="panel-body">				
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
							<td><a href="{{url('/delete/'.$book->id)}}" class="btn btn-danger">Xoá</a></button></td>
						</tr>
					@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</body>
</html>