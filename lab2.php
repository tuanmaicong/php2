<?php
    // Bài 1:
    // Tạo 2 lớp:
    // Khách hàng
    // - tên
    // - địa chỉ
    // - giới tính
    // - thongtin(): trả về thông tin của khách hàng
    // - muaVe($sl): mua vé lên tàu
    
    // Chuyến tàu
    // - Mã số 
    // - số người mua vé
    // - số vé còn lại
    // - giá vé
    // - tổng số tiền thu được
    // - thongtin(): trả về thông tin của chuyến tàu
    
    // ==> tạo 3 khách hàng, mỗi khách hàng sẽ mua số vé khác nhau để lên tàu
    // ==> tạo 1 chuyến tàu
    // ==> sau khi khách hàng mua vé thì hiển thị thông của của chuyến tàu
   class KhachHang{
       var $ten;
       var $diachi;
       var $gioitinh;
       
       function thongTin(){
           return "Họ tên khách hàng:".$this->ten."<br>"."Địa chỉ:".$this->diachi."<br>"."Giới tính:".$this->gioitinh."<br>"."<br>";
       }
       function muaVe($sl){
            return $sl;
       }
       
   } 

   class ChuyenTau{
       var $maso;
       var $songuoi;
       var $soveconlai;
       var $giave;
       var $tongtien;

       function thongTinChuyenTau(){
            return "Thông tin chuyến tàu mã số:".$this->maso."<br>"."Số người trên chuyến tàu:".$this->songuoi."<br>"."Số vé còn lại:".$this->soveconlai."<br>"."Giá vé:".$this->giave."<br>"."Tiền bán vé:".$this->tongtien."<br>"."<br>";
       }

      
   }

   $tuan=new KhachHang();
   $tuan->ten="Mai Công Tuấn";
   $tuan->diachi="Hà Nội";
   $tuan->gioitinh="Nam";
   echo $tuan->thongTin();

   $hai=new KhachHang();
   $hai->ten="Mai Hồng Hải";
   $hai->diachi="Hà Nội";
   $hai->gioitinh="Nam";
   echo $hai->thongTin();

   $hien=new KhachHang();
   $hien->ten="Mai Thị Hiền";
   $hien->diachi="Hà Nội";
   $hien->gioitinh="Nữ";
   echo $hien->thongTin();

   $chuyen1=new ChuyenTau();
   $chuyen1->maso="MS01";
   $chuyen1->songuoi=0;
   $chuyen1->soveconlai=10;
   $chuyen1->giave=100000;
   $chuyen1->tongtien=0;
   
   $tong=$tuan->muaVe(2);
   echo $tuan->ten."<br>";
   echo "Mua:".$tong." "."vé"."<br>";
   $chuyen1->songuoi=$tong/$tong;
   $chuyen1->soveconlai=$chuyen1->soveconlai-$tong;
   $chuyen1->tongtien=$chuyen1->giave*$tong;
   echo $chuyen1->thongTinChuyenTau();

   $tong=$hai->muaVe(4);
   echo $hai->ten."<br>";
   echo "Mua:".$tong." "."vé"."<br>";
   $chuyen1->songuoi= $chuyen1->songuoi+$tong/$tong;
   $chuyen1->soveconlai=$chuyen1->soveconlai-$tong;
   $chuyen1->tongtien=$chuyen1->tongtien+$chuyen1->giave*$tong;
   echo $chuyen1->thongTinChuyenTau();

   $tong=$hien->muaVe(3);
   echo $hien->ten."<br>";
   echo "Mua:".$tong." "."vé"."<br>";
   $chuyen1->songuoi= $chuyen1->songuoi+$tong/$tong;
   $chuyen1->soveconlai=$chuyen1->soveconlai-$tong;
   $chuyen1->tongtien=$chuyen1->tongtien+$chuyen1->giave*$tong;
   echo $chuyen1->thongTinChuyenTau();
   
   
?>