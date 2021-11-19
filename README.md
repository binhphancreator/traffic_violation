# Bài tập lớn môn lập trình web

## Đề tài: Vi phạm giao thông - Phan Văn Bình - B18DCPT031

- Link file tài nguyên css, js, img :
```
//Linux
ln -s -r ./resource/css ./public/
ln -s -r ./resource/js ./public/
ln -s -r ./resource/img ./public/
ln -s -r ./storage/file ./public/
//Window
mklink /j "public/img" "./resource/img/"
mklink /j "public/css" "./resource/css/"
mklink /j "public/js" "./resource/js/"  
mklink /j "public/file" "./storage/file/" 
```

- SQL:
```
//Dump dữ liệu
mysqldump -u gosafer -p gosafer --no-data > sql/gosafer.sql
//Nhập dữ liệu
mysqldump -u gosafer -p gosafer < sql/gosafer.sql
```

- Admin:
```
//User
admin@gosafer.xyz
gosafer
```