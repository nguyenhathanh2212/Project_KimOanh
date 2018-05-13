<script type="text/javascript" src="http://www.diaockimoanh.com.vn/Scripts/jwplayer.js"></script>
        <script type="text/javascript">
          $(document).ready(function () {
            $(".hvideo-content a").click(function () {
              setvideo($(this).attr("rel"), $(this).attr('rev'), $(this).attr('ref'));
              return false;
            });
          });
          function setvideo(src, image, title) {
            jwplayer('mediaPlayer').setup({
              flashplayer: '/images/player.swf',
              file: src,
              image: image,
              height: 160,
              width: 265,
              controlbar: "bottom"
            });
            $("h2.hvideo-title").html(title);
          }
        </script>
        <h2 class="home-title">Video Clip</h2>
        <div class="hvideo-wrap">
          <div class="hvideo">
            <div id="mediaPlayer">
            </div>
          </div>
          <h2 class="hvideo-title">
          </h2>
          <script type="text/javascript">
            $(document).ready(function () {
              setvideo('https://www.youtube.com/watch?v=zvPy4kUjd30', 'images/video/m-3.jpg', 'Bản tin lễ giới thiệu dự án Mega City 2 trên HTV 7');
            });
          </script>
          <div class="hvideo-content">
            <div>
              <div>
                <a title="Bản tin lễ giới thiệu dự án Mega City 2 trên HTV 7" rel="https://www.youtube.com/watch?v=zvPy4kUjd30" rev="/images/video/m-3.jpg" ref="Bản tin lễ giới thiệu dự án Mega City 2 trên HTV 7">Bản tin lễ giới thiệu dự án Mega City 2 trên HTV 7</a>
              </div>
              <div>
                <a title="khu đô thị Mega City 2 hút khách, &quot;cháy&quot; hàng" rel="https://youtu.be/aLm5dHCTHBU" rev="/images/video/mega-2-02.jpg" ref="khu đô thị Mega City 2 hút khách, &quot;cháy&quot; hàng">khu đô thị Mega City 2 hút khách, "cháy" hàng</a>
              </div>
              <div>
                <a title="Khu đô thị Mega City 2" rel="https://youtu.be/ikCaI-Lsr8k" rev="/images/video/biet-thu-mega-2-ko.jpg" ref="Khu đô thị Mega City 2">Khu đô thị Mega City 2</a>
              </div>
              <div>
                <a title="Bước tiến mới của Kim Oanh Group" rel="https://youtu.be/PM51jZPX_UM" rev="/images/video/111.jpg" ref="Bước tiến mới của Kim Oanh Group">Bước tiến mới của Kim Oanh Group</a>
              </div>
              <div>
                <a title="Khu đô thị Golden Center City 3" rel="https://youtu.be/G32adnVaWLU" rev="/images/video/05-can-canh-cong-vien.jpg" ref="Khu đô thị Golden Center City 3">Khu đô thị Golden Center City 3</a>
              </div>
              <div>
                <a title="Khu đô thị Bến Cát Center City 2" rel="https://youtu.be/KhFXOejagDc" rev="/images/video/view-2-can-canh-khu-pho-a.jpg" ref="Khu đô thị Bến Cát Center City 2">Khu đô thị Bến Cát Center City 2</a>
              </div>
              <div>
                <a title="Nỗi lòng xa xứ người con miền Trung" rel="https://youtu.be/lFMhXSexTOo" rev="/images/video/noi-long.PNG" ref="Nỗi lòng xa xứ người con miền Trung">Nỗi lòng xa xứ người con miền Trung</a>
              </div>
              <div>
                <a title="Quỹ Từ Thiện Kim Oanh sát cánh cùng bà con vùng lũ" rel="https://youtu.be/odXuASRnHj0" rev="/images/video/sat-canh.PNG" ref="Quỹ Từ Thiện Kim Oanh sát cánh cùng bà con vùng lũ">Quỹ Từ Thiện Kim Oanh sát cánh cùng bà con vùng lũ</a>
              </div>
              <div>
                <a title="Hoạt động Kim Oanh 9 tháng đầu năm 2017" rel="Hoạt động Kim Oanh 9 tháng đầu năm 2017" rev="/images/video/mo-ban-siin.jpg" ref="Hoạt động Kim Oanh 9 tháng đầu năm 2017">Hoạt động Kim Oanh 9 tháng đầu năm 2017</a>
              </div>
              <div>
                <a title="Clip Kim Oanh Group hừng hực quyết tâm chinh phục tầm cao mới" rel="https://youtu.be/TwgiW3-_U_Y" rev="/images/video/hinh-1.jpg" ref="Clip Kim Oanh Group hừng hực quyết tâm chinh phục tầm cao mới">Clip Kim Oanh Group hừng hực quyết tâm chinh phục tầm cao mới</a>
              </div>
            </div>
          </div>
        </div>
        <h2 class="home-title">Đối tác</h2>
        <div class="home-partner">
          <ul class="nav">
          </ul>
        </div>
      </div>