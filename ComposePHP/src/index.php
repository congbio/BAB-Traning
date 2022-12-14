<?php
//bai 1 so lon nhat trong mang
  $N = [1, 3, 5, 4, 7, 30, 3, 10, 20];
  function maxInArray($N)
{
  
    $max = $N[0];
    foreach ($N as $n) {
        if ($max < $n) {
            $max = $n;
        }
    }
    return $max;
}
// echo maxInArray();
// --------------------------------------------

// so nho nhat trong mang
function minInArray()
{
    $N = [1, 3, 5, 4, 7, 30, 3, 10, 20];
    $min = $N[0];
    foreach ($N as $n) {
        if ($min > $n) {
            $min = $n;
        }
    }
    return $min;
}
// echo minInArray();
// --------------------------------------------

// tìm phần tử lặp lại đầu tiên trong mảng 
// cach 1
function findElementRepearInArray()
{
    $N = [1, 2, 4, 0, 30, 0, 20, 20,20];
    for ($i = 0; $i < count($N) - 1; $i++) {
        for ($j = $i + 1; $j < count($N); $j++) {
            // echo "$N[$i] --- $N[$j]<br>";
            if ($N[$i] == $N[$j]) {
                echo  $N[$i];
            }
        }
    }
}
echo findElementRepearInArray();
// --------------------------------------------

// 4, xóa phần tử có key = 1 khỏi mảng n
function removeElementOfKey($key)
{
    $N = [4, 6, 8];
    array_splice($N, $key, 1);
    return $N;
}
// var_dump(removeElementOfKey(1)) ;
// --------------------------------------------



// xap xep giam dan
function sortArrayReduce()
{
    $N = [1, 2, 4, 7, 30, 0, 20, 20];
    for ($i = 0; $i < count($N) - 1; $i++) {
        for ($j = $i + 1; $j < count($N); $j++) {
            if ($N[$i] > $N[$j]) {
                $tg = $N[$i];
                $N[$i] = $N[$j];
                $N[$j] = $tg;
            }
        }
    }
    // return $N;
    foreach ($N as $value) {
        echo "$value";
    }
}
// sortArrayReduce();
// --------------------------------------------

// string = “ welcome to bap company ” đếm các kí tự ( không tính kí tự trống )
function wordCount()
{
    $str = "welcome to bap company";
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] != ' ') {
            $count += 1;
        }
    }
    return $count;
}
// echo wordCount();
// --------------------------------------------

// string = “ welcome to bap company ” timf cac ky tu lap lai tren 2 lan

function findWordAgainBigger2()
{
    $str = "ewlcome to bap company";

    for ($i = 0; $i < strlen($str) - 1; $i++) {
        $count = 1;
        if ($str[$i] != ' ') {
            for ($j = $i + 1; $j < strlen($str); $j++) {
                if ($str[$j] != ' ') {
                    if ($str[$i] == $str[$j]) {
                        $count += 1;
                        if ($count > 2) {
                            return $str[$i];
                        }
                    }
                }
            }
        }
    }
}
// echo findWordAgainBigger2();
// ---------------------------------------------------------
// 3, thay thế  “ company” bằng “software”.

// echo str_replace('company', "software",  " welcome to bap company ");

function formDayInput()
{
    if (isset($_POST['day']))
        $day = $_POST['day'];
    switch ($day) {
        case "2":
            $result = "Monday";
            break;
        case "3":
            $result = "Tuesday";
            break;
        case "4":
            $result = "Wednesday";
            break;
        case "5":
            $result = "Thursday";
            break;
        case "6":
            $result = "Friday";
            break;
        case "7":
            $result = "Saturday";
            break;
        case "8":
            $result = "Sunday";
            break;

        default:
            $result = "invalid";
            break;
    }


?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        Day: <input type="text" name="day" value="<?php echo $day ? $day  : '' ?> "><br>
        Result: <input type="text" name="result" value="<?php echo $result ? $result  : '' ?> "><br>
        <button type="submit">Gửi</button>
    </form>
<?php


}
// formDayInput();
// ---------------------------------------------------
// 4. Giải phương trình bậc hai môt ẩn: ax2 + bx = c = 0.
function GPTB2()
{
    $result = '';
    if (isset($_POST['calculate'])) {
        // Bước 1: Lấy tham số
        $a =  $_POST['a'];
        $b =  $_POST['b'];
        $c =  $_POST['c'];

        // Bước 2: Validate và tính toán
        $delta = ($b * $b) - (4 * $a * $c);

        if ($delta < 0) {
            $result = 'Phương trình vô nghiệp';
        } else if ($delta == 0) {
            $result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b / 2 * $a);
            // dfsdkfd
        } else {
            $result = 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($delta)) / 2 * $a);
            $result .= ',x2 = ' . ((-$b - sqrt($delta)) / 2 * $a);
        }
    }
?>
    <h1>Giải phương trình bậc hai</h1>
    <form method="post" action="">
        <input type="text" name="a" width="200px" value="<?php echo $a ? $a  : '' ?> " />x <sup>2</sup>

        <input type="text" name="b" width="200px" value="<?php echo $b ? $b  : '' ?> " />x

        <input type="text" name="c" width="200px" value="<?php echo $c ? $c  : '' ?> " />
        = 0
        <br /><br />
        <input type="submit" name="calculate" width="200px" value="Tính" />
    </form>
<?php echo $result;
};
// GPTB2();
// ------------------------------------------------------------------------
// dòng 18
// Ctrl+Shift+V show file reădme 
//Viết chương trình PHP để loại bỏ các mục trùng lặp khỏi danh sách đã sắp xếp:
function removeElementAgain()
{
    $N = [1, 1, 2, 2, 3, 4, 5, 5];
    for ($i = 0; $i < count($N); $i++) {
        for ($j = $i + 1; $j < count($N); $j++) {
            if ($N[$i] == $N[$j]) {
                array_splice($N, $i + 1, 1);
            }
        }
    }
    return $N;
}

function remove($N, $lengt, $index)
{
    for ($i = 0; $i < $lengt; $i++) {
        $N[$i - 1] = $N[$i];
    }    
    $lengt--;
}
// var_dump(removeElementAgain()) ;


// Viết chương trình PHP tính tổng các số nguyên tố nhỏ hơn 100 Lưu ý: Có 25 số nguyên tố nhỏ hơn 100. 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 và tổng của tất cả các số này là 1060.

function isPrimeNumber($n)
{
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function totalIsPrimeNumbe()
{
    $total = 0;
    for ($i = 2; $i < 100; $i++) {
        if (isPrimeNumber($i)) {
            $total += $i;
        }
    }
    return $total;
}
// echo totalIsPrimeNumbe();

// -----------------------------------------------
// viết một class Caculator chấp nhận hai giá trị làm đối số, sau đó cộng, trừ, nhân hoặc chia chúng theo yêu cầu:
class MyCalculator
{
    public $a;
    public $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    function get_b()
    {
        return $this->b;
    }
    function get_a()
    {
        return $this->a;
    }
    public function add()
    {
        return $this->a + $this->b;
    }

    public function subtract()
    {
        return $this->a - $this->b;
    }
    public function multi()
    {
        return $this->a * $this->b;
    }
    public function divided()
    {
        return $this->a / $this->b;
    }  
}

$mycalc = new MyCalculator(12,6);
// echo $mycalc->add();
 
// 7. Viết chương trình PHP để xác thực địa chỉ email

// Variable to check
// $email = "congexample@gmail.com";

// Remove all illegal characters from email
// $email = filter_var($email, FILTER_SANITIZE_EMAIL);


// Validate e-mail
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   echo("Email is a valid email address");
// }
// else{
//     echo("Email is a invalid email address");

// }

 
