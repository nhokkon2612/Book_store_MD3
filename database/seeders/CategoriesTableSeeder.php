<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Trinh thám';
        $category->description = 'Tiểu thuyết trinh thám (tiếng Pháp: roman détective) là một tiểu loại của tiểu thuyết phiêu lưu. Bản thân tên gọi thể loại đã làm nổi bật một vài đặc điểm riêng của nó.
                                Nó nói lên nghề nghiệp của nhân vật chính. Nhân vật chính có thể là “thám tử”, là “mật thám”, hay “điều tra viên” gì đó, nhưng đều có nghề nghiệp chung là dò la, điều tra, khám phá cái bí mật, còn nằm trong bóng tối.
                                Nó chứng tỏ, đây là truyện vụ án, truyện viết về tội phạm, một loại truyện rất phổ biến ở các nước phương Tây.
                                Nó mách bảo người sáng tác cách thức xây dựng cốt truyện: phải giữ đến cùng những bí mật của tội phạm để tạo nên sự hấp dẫn, khiến người đọc luôn luôn ở trong trạng thái căng thẳng.';
        $category->save();


        $category = new Category();
        $category->name = 'Phát triển bản thân';
        $category->description = 'nâng cao kiến thức và hình ảnh bản thân, phát triển tài năng và khả năng, tích lũy tài sản và sự nghiệp, nâng cao chất lượng cuộc sống và làm sáng tỏ những ước mơ và hoài bão. Khái niệm này không chỉ dừng lại ở phát triển bản thân mà nó còn bao gồm các hoạt động chính thức và không chính thức để phát triển người khác trong những vai trò như thầy giáo, hướng dẫn viên, tư vấn viên, quản lý, huấn luyện viên. Nói cho cung, phát triển bản thân diễn ra trong bối cảnh thể chế, nó liên quan tới phương pháp, chương trình, công cụ, kỹ thuật và hệ thống đánh giá nhằm hỗ trợ con người phát triển ở mức độ cá nhân trong các tổ chức.';
        $category->save();


        $category = new Category();
        $category->name = 'Tiểu thuyết lãng nạm';
        $category->description = 'Tiểu thuyết lãng mạn, tiểu thuyết diễm tình/ngôn tình là một thuật ngữ tạm thời để mô tả dòng văn xuôi (hoặc đôi khi văn vần) khai thác các mối quan hệ hoan lạc - tình ái giữa người với người, thông thường có một kết thúc hạnh phúc và có hậu.[1]
                                Ngôn tình được biết đến là loại tiểu thuyết tình cảm có nguồn gốc từ Trung Quốc. Hoàn cảnh xảy ra của ngôn tình thì rất đa dạng phong phú như có thể diễn ra ở thời hiện đại, thời xưa, thần tiên…';
        $category->save();


        $category = new Category();
        $category->name = 'Cổ tích';
        $category->description = 'Cổ tích là một thể loại văn học được tự sự dân gian sáng tác có xu thế hư cấu, bao gồm cổ tích thần kỳ, cổ tích thế sự, cổ tích phiêu lưu và cổ tích loài vật. Đây là loại truyện ngắn, chủ yếu kể về các nhân vật dân gian hư cấu, như tiên, yêu tinh, thần tiên, quỷ, người lùn, người khổng lồ, người cá, hay thần giữ của, và thường là có phép thuật, hay bùa mê.';
        $category->save();


        $category = new Category();
        $category->name = 'Trinh thám';
        $category->description = 'Tiểu thuyết trinh thám (tiếng Pháp: roman détective) là một tiểu loại của tiểu thuyết phiêu lưu. Bản thân tên gọi thể loại đã làm nổi bật một vài đặc điểm riêng của nó.
                                Nó nói lên nghề nghiệp của nhân vật chính. Nhân vật chính có thể là “thám tử”, là “mật thám”, hay “điều tra viên” gì đó, nhưng đều có nghề nghiệp chung là dò la, điều tra, khám phá cái bí mật, còn nằm trong bóng tối.
                                Nó chứng tỏ, đây là truyện vụ án, truyện viết về tội phạm, một loại truyện rất phổ biến ở các nước phương Tây.
                                Nó mách bảo người sáng tác cách thức xây dựng cốt truyện: phải giữ đến cùng những bí mật của tội phạm để tạo nên sự hấp dẫn, khiến người đọc luôn luôn ở trong trạng thái căng thẳng.';
        $category->save();
    }
}
