<!DOCTYPE html>
<html>
<head>
	<title>Sửa thông tin sách</title>
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
				<h2 class="text-center">Chỉnh sửa thông tin sách</h2>
                <a href="{{url('/index')}}">Trở về</a>
			</div>
			<div class="panel-body">
                <form method="POST" action="{{url('/post_edit/'.$bookList->id)}}">
                    <div class="form-group">
                                {{ csrf_field() }}
                                <label for="tensach">Tên sách:</label>
                                <input required="true" type="text" class="form-control" id="tensach" name="tensach" value="{{$bookList['tensach']}}">
                            </div>
                            <div class="form-group">
                                <label for="tacgia">Tác giả:</label>
                                <input required="true" type="text" class="form-control" id="tacgia" name="tacgia" value="{{$bookList['tacgia']}}">
                            </div>
                            <div class="form-group">
                                <label for="nhaxb">Nhà xuất bản:</label>
                                <input type="text" class="form-control" id="nhaxb" name="nhaxb" value="{{$bookList['nhaxb']}}">
                            </div>
                            <div class="form-group">
                                <label for="namxb">Năm xuất bản:</label>
                                <input required="true" type="number" class="form-control" id="namxb" name="namxb" value="{{$bookList['namxb']}}">
                            </div>
                            <div class="form-group">
                                <label for="sotrang">Số trang:</label>
                                <input required="true" type="number" class="form-control" id="sotrang" name="sotrang" value="{{$bookList['sotrang']}}">
                            </div>
                            <button class="btn btn-success">Cập nhật</button>
                </form>
			</div>
		</div>
	</div>
</body>
</html>