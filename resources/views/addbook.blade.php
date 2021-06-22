<!DOCTYPE html>
<html>
<head>
	<title>Thêm sách mới</title>
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
				<h2 class="text-center">Thêm sách mới</h2>
                @if(session('error_exist'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>{{ session('error_exist') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				<a href="{{url('/index')}}">Trở về</a>
			</div>
			<div class="panel-body">
				<form action="{{ route('post_add') }}" method="post">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="tensach">Tên sách:</label>
                        <input required="true" type="text" class="form-control" id="tensach" name="tensach">
                    </div>
                    <div class="form-group">
                        <label for="tacgia">Tác giả:</label>
                        <input required="true" type="text" class="form-control" id="tacgia" name="tacgia">
                    </div>
                    <div class="form-group">
                        <label for="nhaxb">Nhà xuất bản:</label>
                        <input type="text" class="form-control" id="nhaxb" name="nhaxb">
                    </div>
                    <div class="form-group">
                        <label for="namxb">Năm xuất bản:</label>
                        <input required="true" type="number" class="form-control" id="namxb" name="namxb">
                    </div>
                    <div class="form-group">
                        <label for="sotrang">Số trang:</label>
                        <input required="true" type="number" class="form-control" id="sotrang" name="sotrang">
                    </div>
                    <button class="btn btn-success">Thêm</button>
                </form>
			</div>
		</div>
	</div>
</body>
</html>