@extends('templates.kimoanh.master')
@section('content')
<div class="news-home">
{{-- 	<div class="wrap-left"> --}}
		<div class="detail-bds">
			<h1>BĐS rao bán</h1>
			@include('templates.kimoanh.breadcrum')
		</div>
		<div class="wrap-detail-bds">
			<h2>MỸ PHƯỚC 4 - VÀNH ĐAI 4</h2>
			<div class="top-detail-bds">
				<span class="left">
					<img src='/images/re/565900/untitled-1.png' width='515' alt='MỸ PHƯỚC 4 - VÀNH ĐAI 4' />
				</span>
				<div class="info-bds">
					<ul>
						<li><b class="price">1 VNĐ/Tổng diện tích</b></li>
						<li><b>Ngày đăng: </b>04/05/2018</li>
						<li><b>Địa chỉ: </b>Binh Duong</li>
						<li><b>Chủ sở hữu: </b>Chính chủ</li>
						<li><b>Loại BĐS: </b>Đất nền</li>
						<li><b>Tình trạng pháp lý: </b>Giấy tờ hợp lệ</li>
						<li><b>Diện tích sử dụng (m2): </b>182</li>
						<li><b>Diện tích xây dựng (m2): </b>182</li>
						<li><b>Hướng: </b>Không xác định</li>


						<li><b>Dự án: </b>MP4</li>

					</ul>
					<div class="detail-contact">
						<p><span>Liên hệ</span></p>
						<p class="name">Hồ Nam Ninh</p>
						<p></p>
					</div>
				</div>
				<div class="both"></div>
			</div>

			<div class="desc-bds">
				<h2>Mô tả thêm</h2>
				<div style="text-align: center;"><span style="font-size: 22px;">LÀNG ĐẠI HỌC VIỆT ĐỨC- THỦ DẦU MỘT</span></div>
				<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
				Vị Trí: 5c45 MỸ PHƯỚC 4, BẾN CÁT, BÌNH DƯƠNG</div>
				<div><br />
					Mặt tiền Vành đai 4 - 62m :&nbsp;Giá : 12,8tr/m&nbsp;&nbsp;<br />
					Mặt đường 16 m :&nbsp;Giá : 6,8 tr/m<br />
				Cọc 30triệu/sp</div>
				<div><br />
				Liên hệ :&nbsp; 0973.677.801</div>
			</div>
			<div class="tags">
				<label class="tagstitle">
				Tags: </label>

			</div>
			<div class="both"></div>
		</div>
		@include('kimoanh.exchange.otherbds')
	{{-- </div> --}}
</div>

@endsection