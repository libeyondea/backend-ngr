<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$categories = [
			['id' => 1, 'parent_id' => null, 'name' => 'Du Học', 'slug' => 'du-hoc'],
			['id' => 2, 'parent_id' => 1, 'name' => 'Du Học Canada', 'slug' => 'du-hoc-canada'],
			['id' => 3, 'parent_id' => 1, 'name' => 'Du Học Anh', 'slug' => 'du-hoc-anh'],
			['id' => 4, 'parent_id' => 1, 'name' => 'Du Học Mỹ', 'slug' => 'du-hoc-my'],
			['id' => 5, 'parent_id' => 1, 'name' => 'Du Học Úc', 'slug' => 'du-hoc-uc'],
			['id' => 6, 'parent_id' => 1, 'name' => 'Du Học New Zealand', 'slug' => 'du-hoc-new-zealand'],
			['id' => 7, 'parent_id' => 1, 'name' => 'Du Học Singapore', 'slug' => 'du-hoc-singapore'],
			['id' => 8, 'parent_id' => 1, 'name' => 'Du Học Phần Lan', 'slug' => 'du-hoc-phan-lan'],
			['id' => 9, 'parent_id' => 1, 'name' => 'Du Học Hà Lan', 'slug' => 'du-hoc-ha-lan'],
			['id' => 10, 'parent_id' => 1, 'name' => 'Du Học Thụy Sĩ', 'slug' => 'du-hoc-thuy-si'],
			['id' => 11, 'parent_id' => 1, 'name' => 'Du Học Malaysia', 'slug' => 'du-hoc-malaysia'],
			['id' => 12, 'parent_id' => 1, 'name' => 'Du Học Thái Lan', 'slug' => 'du-hoc-thai-lan'],
			['id' => 13, 'parent_id' => 1, 'name' => 'Du Học Đài Loan', 'slug' => 'du-hoc-dai-loan'],
			['id' => 14, 'parent_id' => 1, 'name' => 'Du Học Philippines', 'slug' => 'du-hoc-philippines'],
			['id' => 15, 'parent_id' => 2, 'name' => 'Các Trường Đại Học & Cao Đẳng Canada', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-canada'],
			['id' => 16, 'parent_id' => 2, 'name' => 'Trung Học Canada', 'slug' => 'trung-hoc-canada'],
			['id' => 17, 'parent_id' => 2, 'name' => 'Visa Canada', 'slug' => 'visa-canada'],
			['id' => 18, 'parent_id' => 2, 'name' => 'Thông Tin Nước Canada', 'slug' => 'thong-tin-nuoc-canada'],
			['id' => 19, 'parent_id' => 3, 'name' => 'Hệ Thống Các Trường Anh Quốc', 'slug' => 'he-thong-cac-truong-anh-quoc'],
			['id' => 20, 'parent_id' => 3, 'name' => 'Visa Anh', 'slug' => 'visa-anh'],
			['id' => 21, 'parent_id' => 3, 'name' => 'Thông Tin Nước Anh', 'slug' => 'thong-tin-nuoc-anh'],
			['id' => 22, 'parent_id' => 4, 'name' => 'Các Trường Đại Học & Cao Đẳng Mỹ', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-my'],
			['id' => 23, 'parent_id' => 4, 'name' => 'Trung Học Mỹ', 'slug' => 'trung-hoc-my'],
			['id' => 24, 'parent_id' => 4, 'name' => 'Visa Mỹ', 'slug' => 'visa-my'],
			['id' => 25, 'parent_id' => 4, 'name' => 'Thông Tin Nước Mỹ', 'slug' => 'thong-tin-nuoc-my'],
			['id' => 26, 'parent_id' => 5, 'name' => 'Các Trường Đại Học & Cao Đẳng Úc', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-uc'],
			['id' => 27, 'parent_id' => 5, 'name' => 'Trung Học Úc', 'slug' => 'trung-hoc-uc'],
			['id' => 28, 'parent_id' => 5, 'name' => 'Visa Úc', 'slug' => 'visa-uc'],
			['id' => 29, 'parent_id' => 5, 'name' => 'Thông Tin Nước Úc', 'slug' => 'thong-tin-nuoc-uc'],
			['id' => 30, 'parent_id' => 6, 'name' => 'Các Trường Đại Học & Cao Đẳng New ZeaLand', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-new-zealand'],
			['id' => 31, 'parent_id' => 6, 'name' => 'Visa New Zealand', 'slug' => 'visa-new-zealand'],
			['id' => 32, 'parent_id' => 6, 'name' => 'Thông Tin Nước New  Zealand', 'slug' => 'thong-tin-nuoc-new-zealand'],
			['id' => 33, 'parent_id' => 7, 'name' => 'Hệ Thống Các Trường Singapore', 'slug' => 'he-thong-cac-truong-singapore'],
			['id' => 34, 'parent_id' => 7, 'name' => 'Thông Tin Nước Singapore', 'slug' => 'thong-tin-nuoc-singapore'],
			['id' => 35, 'parent_id' => 8, 'name' => 'Hệ Thống Các Trường Phần Lan', 'slug' => 'he-thong-cac-truong-phan-lan'],
			['id' => 36, 'parent_id' => 8, 'name' => 'Visa Phần Lan', 'slug' => 'visa-phan-lan'],
			['id' => 37, 'parent_id' => 8, 'name' => 'Thông Tin Nước Phần Lan', 'slug' => 'thong-tin-nuoc-phan-lan'],
			['id' => 38, 'parent_id' => 9, 'name' => 'Hệ Thống Các Trường Hà Lan', 'slug' => 'he-thong-cac-truong-ha-lan'],
			['id' => 39, 'parent_id' => 9, 'name' => 'Visa Hà Lan', 'slug' => 'visa-ha-lan'],
			['id' => 40, 'parent_id' => 9, 'name' => 'Thông Tin Nước Hà Làn', 'slug' => 'thong-tin-nuoc-ha-lan'],
			['id' => 41, 'parent_id' => 10, 'name' => 'Hệ Thống Các Trường Thụy Sĩ', 'slug' => 'he-thong-cac-truong-thuy-si'],
			['id' => 42, 'parent_id' => 10, 'name' => 'Visa Thụy Sĩ', 'slug' => 'visa-thuy-si'],
			['id' => 43, 'parent_id' => 10, 'name' => 'Thông Tin Nước Thụy Sĩ', 'slug' => 'thong-tin-nuoc-thuy-si'],
			['id' => 44, 'parent_id' => 11, 'name' => 'Hệ Thống Các Trường Malaysia', 'slug' => 'he-thong-cac-truong-malaysia'],
			['id' => 45, 'parent_id' => 11, 'name' => 'Thông Tin Nước Malaysia', 'slug' => 'thong-tin-nuoc-malaysia'],
			['id' => 46, 'parent_id' => 12, 'name' => 'Hệ Thống Các Trường Thái Lan', 'slug' => 'he-thong-cac-truong-thai-lan'],
			['id' => 47, 'parent_id' => 12, 'name' => 'Thông Tin Nước Thái Lan', 'slug' => 'thong-tin-nuoc-thai-lan'],
			['id' => 48, 'parent_id' => 13, 'name' => 'Hệ Thống Các Trường Đài Loan', 'slug' => 'cac-truong-dai-loan'],
			['id' => 49, 'parent_id' => 13, 'name' => 'Visa Đài Loan', 'slug' => 'visa-dai-loan'],
			['id' => 50, 'parent_id' => 13, 'name' => 'Thông Tin Nước Đài Loan', 'slug' => 'thong-tin-nuoc-dai-loan'],
			['id' => 51, 'parent_id' => 14, 'name' => 'Hệ Thống Các Trường Philippines', 'slug' => 'he-thong-cac-truong-philippines'],
			['id' => 52, 'parent_id' => 14, 'name' => 'Thông Tin Nước Philippines', 'slug' => 'thong-tin-nuoc-philippines'],
			['id' => 53, 'parent_id' => NULL, 'name' => 'Định Cư', 'slug' => 'dinh-cu'],
			['id' => 54, 'parent_id' => 53, 'name' => 'Định Cư Mỹ', 'slug' => 'dinh-cu-my'],
			['id' => 55, 'parent_id' => 54, 'name' => 'Chương Trình EB-5', 'slug' => 'chuong-trinh-eb-5'],
			['id' => 56, 'parent_id' => 54, 'name' => 'Chương Trình L1', 'slug' => 'chuong-trinh-l-1'],
			['id' => 57, 'parent_id' => 54, 'name' => 'Bảo Lãnh Nhân Thân', 'slug' => 'bao-lanh-nhan-than'],
			['id' => 58, 'parent_id' => 54, 'name' => 'Dịch Vụ An Cư', 'slug' => 'dinh-vu-an-cu'],
			['id' => 59, 'parent_id' => 54, 'name' => 'Dự Án EB-5', 'slug' => 'du-an-eb-5'],
			['id' => 60, 'parent_id' => 54, 'name' => 'Tìm Hiểu Về Nước Mỹ', 'slug' => 'tim-hieu-ve-nuoc-my'],
			['id' => 61, 'parent_id' => 53, 'name' => 'Định Cư Úc', 'slug' => 'dinh-cu-uc'],
			['id' => 62, 'parent_id' => 61, 'name' => 'Chương Trình 132A', 'slug' => 'chuong-trinh-132a'],
			['id' => 63, 'parent_id' => 61, 'name' => 'Chương Trình 132B', 'slug' => 'chuong-trinh-132b'],
			['id' => 64, 'parent_id' => 61, 'name' => 'Chương Trình 188A', 'slug' => 'chuong-trinh-188a'],
			['id' => 65, 'parent_id' => 61, 'name' => 'Chương Trình 188B', 'slug' => 'chuong-trinh-188b'],
			['id' => 66, 'parent_id' => 61, 'name' => 'Chương Trình 188C', 'slug' => 'chuong-trinh-188c'],
			['id' => 67, 'parent_id' => 61, 'name' => 'Tìm Hiểu Về Nước Úc', 'slug' => 'tim-hieu-ve-nuoc-uc'],
			['id' => 68, 'parent_id' => 53, 'name' => 'Định Cư Canada', 'slug' => 'dinh-cu-canada'],
			['id' => 69, 'parent_id' => 68, 'name' => 'Định Cư Brunswick', 'slug' => 'dinh-cu-brunswick'],
			['id' => 70, 'parent_id' => 68, 'name' => 'Dự Án British Columbia', 'slug' => 'du-an-british-columbia'],
			['id' => 71, 'parent_id' => 68, 'name' => 'Tìm Hiểu Về Canada', 'slug' => 'tim-hieu-ve-canada'],
			['id' => 72, 'parent_id' => NULL, 'name' => 'Học Bổng', 'slug' => 'hoc-bong'],
			['id' => 73, 'parent_id' => 72, 'name' => 'Học Bổng Canada', 'slug' => 'hoc-bong-canada'],
			['id' => 74, 'parent_id' => 72, 'name' => 'Học Bổng Anh', 'slug' => 'hoc-bong-anh'],
			['id' => 75, 'parent_id' => 72, 'name' => 'Học Bổng Mỹ', 'slug' => 'hoc-bong-my'],
			['id' => 76, 'parent_id' => 72, 'name' => 'Học Bổng Úc', 'slug' => 'hoc-bong-uc'],
			['id' => 77, 'parent_id' => 72, 'name' => 'Học Bổng New Zealand', 'slug' => 'hoc-bong-zealand'],
			['id' => 78, 'parent_id' => 72, 'name' => 'Học Bổng Singapore', 'slug' => 'hoc-bong-singapore'],
			['id' => 79, 'parent_id' => 72, 'name' => 'Học Bổng Phần Lan', 'slug' => 'hoc-bong-phan-lan'],
			['id' => 80, 'parent_id' => 72, 'name' => 'Học Bổng Hà Lan', 'slug' => 'hoc-bong-ha-lan'],
			['id' => 81, 'parent_id' => 72, 'name' => 'Học Bổng Thụy Sĩ', 'slug' => 'hoc-bong-thuy-si'],
			['id' => 82, 'parent_id' => NULL, 'name' => 'Đào Tạo', 'slug' => 'dao-tao'],
			['id' => 83, 'parent_id' => 82, 'name' => 'Luyện Thi Tiếng Anh', 'slug' => 'luyen-thi-tieng-anh'],
			['id' => 84, 'parent_id' => 82, 'name' => 'Luyện IELTS Du Học', 'slug' => 'luyen-ielts-du-hoc'],
			['id' => 85, 'parent_id' => 82, 'name' => 'Luyện Anh Văn Phỏng Vấn Xin Visa Mỹ', 'slug' => 'luyen-anh-van-phong-van-xin-visa-my'],
			['id' => 86, 'parent_id' => 82, 'name' => 'Dạy Anh Văn Du Lịch', 'slug' => 'day-anh-van-du-lich'],
			['id' => 87, 'parent_id' => 82, 'name' => 'Dạy Anh Văn Cho Người Sắp Định Cư', 'slug' => 'day-anh-van-cho-nguoi-sap-dinh-cu'],
			['id' => 88, 'parent_id' => 82, 'name' => 'Huấn Luyện Sinh Viên Thực Tập', 'slug' => 'huan-luyen-sinh-vien-thuc-tap'],
			['id' => 89, 'parent_id' => 82, 'name' => 'Huấn Luyện Nhân Sự', 'slug' => 'huan-luyen-nhan-su'],
			['id' => 90, 'parent_id' => NULL, 'name' => 'Dịch Vụ', 'slug' => 'dich-vu'],
			['id' => 91, 'parent_id' => 90, 'name' => 'Khách Hàng', 'slug' => 'khach-hang'],
			['id' => 92, 'parent_id' => 90, 'name' => 'Đối Tác', 'slug' => 'doi-tac'],
			['id' => 93, 'parent_id' => 90, 'name' => 'Tuyển Dụng', 'slug' => 'tuyen-dung'],
			['id' => 94, 'parent_id' => 90, 'name' => 'Tin Tức', 'slug' => 'tin-tuc'],
			['id' => 95, 'parent_id' => 92, 'name' => 'Đối Tác Nước Mỹ', 'slug' => 'doi-tac-nuoc-my'],
			['id' => 96, 'parent_id' => 92, 'name' => 'Đối Tác Nước Canada', 'slug' => 'doi-tac-nuoc-canada'],
			['id' => 97, 'parent_id' => 92, 'name' => 'Đối Tác Nước Singapore', 'slug' => 'doi-tac-nuoc-singapore'],
		];

		foreach ($categories as $category) {
			Category::create($category);
		}

		Category::fixTree();
	}
}
