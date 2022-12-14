Bài tập
1. cho 1 mảng n = [1,3,5,4,7,3,10,20]
    - viết chương trình tìm phần tử lớn nhất trong mảng.
    - nhỏ nhất trong mảng.
    - tìm phần tử lặp lại trong mảng.
    - xóa phần tử có key = 1 khỏi mảng n
    - Cho 1 mảng m = [4,6,8]
    5, cho các phần tử của mảng m vào n và sắp xếp mảng từ nhỏ → lớn.
2. Cho 1 chuổi string = “ welcome to bap company ”
    - đếm các kí tự ( không tính kí tự trống )
    -  tìm những kí tự lặp lại > 2.
    - thay thế  “ company” bằng “software”.

3. nhập vào 1 thứ là số và cho ra kết quả là tiếng anh :
nếu không hợp lệ thì in ra : “invalid”
vd : nhập thứ 2 kq : monday.

4. Giải phương trình bậc hai môt ẩn: ax2 + bx = c = 0.

5. Viết chương trình PHP để loại bỏ các mục trùng lặp khỏi danh sách đã sắp xếp:
Đầu vào: (1,1,2,2,3,4,5,5)
Đầu ra: (1,2,3,4,5)

6. Viết chương trình PHP tính tổng các số nguyên tố nhỏ hơn 100
Lưu ý: Có 25 số nguyên tố nhỏ hơn 100.
2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 và tổng của tất cả các số này là 1060.
7. Viết chương trình PHP để xác thực địa chỉ email.
8. viết một class Caculator chấp nhận hai giá trị làm đối số, sau đó cộng, trừ, nhân hoặc chia chúng theo yêu cầu:
Ví dụ:
$mycalc = new MyCalculator( 12, 6);
echo $mycalc-> add(); // Hiển thị 18
echo $mycalc->multiply(); // Hiển thị 72

## ##########OOP#################

1. Định nghĩa: Object oriented programming: là một phương pháp lập trình đưa những đối tượng bên ngoài vào lập trình với những thuộc tính và phương thức.

2. Lớp là một kiểu dữ liệu bao gồm cả thuộc tính và phương thức, những đối tượng có đặc điểm giống nhau sẽ được tập hợp tạo một lớp. Lớp bao gồm thuộc tính và phương thức.    Lớp bạn có thể hiểu nó như là khuôn mẫu, đối tượng là một thực thể thể hiện dựa trên khuôn mẫu đó.
3. Ưu điểm của OOP là : mô hình hóa phức tạo thành đơn giản,   có thể tái sử dụng, bảo mật cao, dễ dàng mở rộng.
4. Tính chất cơ bản của OOP 
- Đóng gói : là đưa tất cả các thông tin quan trọng vào bên trong đối tượng, sau khi một đối tượng được tạo từ class thì dữ liệu và phương thức đã được đóng gói trong đối tượng đó. Access modifier:
    + Private (riêng tư): phương thức có khai báo private chỉ có thể được truy cập trong chính lớp được khai báo đó.
    +   Public (công cộng): phương thức có khai báo public có thể được truy cập ở bất cứ lớp nào khác.
    + Protected (được bảo vệ): phương thức có khai báo protected chỉ có thể được truy cập thông qua Tính kế thừa.
    + Default (Mặc định): là khi phương thức không được khái báo rõ ràng. Thông thường thì nếu không được khai báo, phương thức sẽ được hiểu là public theo mặc định.
- Tính kế thừa (inheritance): là sự liên quan giữa hai class với nhau, khi kế thừa con được thừa hưởng phương thức, thuộc tính của class cha, Tuy nhiên, nó chỉ được truy cập các thành viên public và protected của class cha. Nó không được phép truy cập đến thành viên private của class cha. Có 3 kiểu kế thừa trong java đó là đơn kế thừa, kế thừa nhiều cấp, kế thừa thứ bậc.

- Tính đa hình: chúng ta có thể thực hiện một hành động bằng nhiều cách khác nhau. Tức là nhiều hàm hoặc phương thức có thể cùng một tên nhưng chức năng thực sự của chúng lại khác nhau.
    + Lý do: không cần viết lại mã hoặc lớp có sản, Lập trình viên có thể dùng một tên duy nhất để lưu trữ các dữ liệu khác nhau(Overloading, Overriding)
    +  
- Tính trừu tượng (Abstraction): là quá trình chọn các bộ dữ liệu quan trọng cho một Đối tượng trong phần mềm của bạn và loại bỏ các dữ liệu không đáng kể.

5. This:
    1. Tham chiếu tới biến instance của lớp hiện tại.
    2. Sử dụng this() gọi Constructor của lớp hiện tại.
    3. Gọi phương thức của lớp hiện tại.
    4. Sử dụng từ khóa this như một tham số của phương thức.
    5. Sử dụng từ khóa this như một tham số của Constructor.
    6. Sử dụng từ khóa this để trả về instance của lớp hiện tại.




 