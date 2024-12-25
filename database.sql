create database huy

-- Thêm trường User(Admin)
create table user 
(
ma_nguoi_dung int PRIMARY KEY AUTO_INCREMENT ,
tai_khoan varchar(50) UNIQUE NOT NULL ,
mat_khau varchar(50) NOT NULL ,
ho_ten varchar(50) ,
dia_chi varchar(50) DEFAULT NULL,
role ENUM('admin','user') not null 
)
-- Thêm data vào user
INSERT INTO `user`(`tai_khoan`, `mat_khau`, `ho_ten`, `dia_chi`, `role`) VALUES ('admin123','tnanh1407','','','admin')
INSERT INTO `user`(`tai_khoan`, `mat_khau`, `ho_ten`, `dia_chi`, `role`) VALUES ('user123','tnanh1407','','','user')
-- Thêm trường sản phẩm
create table if not EXISTS san_pham
(
ma_san_pham int PRIMARY KEY AUTO_INCREMENT ,
ten_san_pham varchar(50) UNIQUE NOT NULL ,
kich_co varchar(50) ,
loai_san_pham varchar(50) ,
tinh_trang varchar(50) ,
gia double not null,
anh_chinh varchar(255) DEFAULT null,
anh_phu varchar(255) DEFAULT null
)