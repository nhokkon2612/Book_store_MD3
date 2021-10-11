<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->name = 'Nhà Giả Kim';
        $book->image = 'http://y5study.com/wp-content/uploads/nha-gia-kim-cuon-sach-ban-chay-chi-sau-kinh-thanh.jpeg';
        $book->description = 'Nhà giả kim (tựa gốc tiếng Bồ Đào Nha: O Alquimista) là một cuốn sách được xuất bản lần đầu ở Brasil năm 1988 và là cuốn sách nổi tiếng nhất của nhà văn Paulo Coelho. Nó được dịch ra 67 ngôn ngữ và bán ra tới 95 triệu bản (theo thống kê ngày 19 tháng 5 năm 2008), trở thành một trong những quyển sách bán chạy nhất mọi thời đại.';
        $book->cost = 75000;
        $book->price = 94000;
        $book->quantity_import = 200;
        $book->quantity_now = 200;
        $book->author_id = 1;
        $book->publisher_id = 2;
        $book->save();

        $book = new Book();
        $book->name = 'Mật Mã Da Vinci';
        $book->image = 'https://upload.wikimedia.org/wikipedia/vi/8/84/M%E1%BA%ADt_m%C3%A3_davinci.jpg';
        $book->description = 'Mật mã Da Vinci (tiếng Anh: The Da Vinci Code) là một tiểu thuyết của nhà văn người Mỹ Dan Brown được xuất bản năm 2003 bởi nhà xuất bản Doubleday Fiction. Đây là một trong số các quyển sách bán chạy nhất thế giới với trên 40 triệu quyển được bán ra (tính đến tháng 3 năm 2006), và đã được dịch ra 44 ngôn ngữ.
                              Tổng hợp các thể loại hư cấu trinh thám, giật gân và âm mưu, quyển sách là một trong bốn tiểu thuyết liên quan tới nhân vật Robert Langdon, cùng với Thiên thần và Ác quỷ (Angels and Demons), Biểu tượng thất truyền (The Lost Symbol, trước đây được biết đến với tên The Solomon Key)[1] và Hỏa ngục (Inferno).';
        $book->cost = 175000;
        $book->price = 194000;
        $book->quantity_import = 200;
        $book->quantity_now = 200;
        $book->author_id = 3;
        $book->publisher_id = 2;
        $book->save();

        $book = new Book();
        $book->name = 'Bố Già';
        $book->image = 'https://product.hstatic.net/1000328521/product/bo_gia__bia_cung__tai_ban_2021_c4216326d8a8408aa57df10d44e53ab5_master.jpg';
        $book->description = "Bố già (tiếng Anh: The Godfather) là tên một cuốn tiểu thuyết nổi tiếng của nhà văn người Mỹ gốc Ý Mario Puzo được xuất bản lần đầu vào năm 1969 bởi nhà xuất bản G. P. Putnam's Sons. Tác phẩm là câu chuyện về một gia đình mafia gốc Sicilia tại Mỹ được tạo lập và lãnh đạo bởi một nhân vật được gọi là 'Bố già' (Godfather) Don Vito Corleone. Các sự kiện chính của tiểu thuyết xảy ra từ năm 1945 đến 1955 ngoài ra cũng đề cập đến thời thơ ấu và giai đoạn thanh niên của Vito Corleone vào đầu thế kỉ 20.";
        $book->cost = 75000;
        $book->price = 94000;
        $book->quantity_import = 200;
        $book->quantity_now = 200;
        $book->author_id = 2;
        $book->publisher_id = 2;
        $book->save();
    }
}
