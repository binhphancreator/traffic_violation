# Bài tập lớn môn lập trình web

## Đề tài: Vi phạm giao thông - Phan Văn Bình - B18DCPT031

- Link file tài nguyên css, js, img :
```
ln -s -r ./resource/css ./public/
ln -s -r ./resource/js ./public/
ln -s -r ./resource/img ./public/
ln -s -r ./storage/public/* ./public/
```

- Dump dữ liệu:
```
mysqldump -u gosafer -p gosafer --no-data > sql/gosafer.sql
```